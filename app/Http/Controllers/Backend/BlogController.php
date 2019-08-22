<?php

namespace App\Http\Controllers\Backend;

use App\Model\Blog;
use App\Model\Category;
use App\Models\Media;
use App\Models\Utils\MediaTool;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BlogController extends Controller
{
    /**
     * 获取所有的博客信息，返回blog List
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function list(){
        $this->data_view['blogs'] = Blog::orderby('id','asc')->get();
        $this->data_view['roots'] = Category::where('level',1)->orderby('position','asc')->get();
        return view('backend.blog.list',$this->data_view);
    }

    /**
     * 创建新的博客
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create(){
        $this->data_view['blog'] = new Blog();
        $categories = Category::orderBy('id','asc')->get();
        //dd($categories);
        $this->data_view['categories'] = $categories;
        return view('backend.blog.view',$this->data_view);
    }

    /**
     * 保存提交表单的方法
     * @param Request $request
     */
    public function save(Request $request){
        $data = $request->all();
        //调用Blog Model中写好的方法对获取到的数据进行处理以及存储
        $blog = Blog::Persistent($data);
        //dd($blog);

        //如果有上传了新图片的话对图片进行存储
        $image = $request->file('image');
        if($image){
            $storagePath = _buildUploadFolderPath();
            $mediaFor = MediaTool::$FOR_BLOG_MAIN;
            $name = str_replace(" ", "_", $image->getClientOriginalName());
            //get image file.
            $path = $image->storeAs($storagePath,$name,'public');
            // 保存到数据库中
            $media= Media::Persistent(
                    $blog->id,
                    MediaTool::GuessFileTypeByExtensionName($image->extension()),
                    _buildFrontendAssertPath($path),
                    $name,
                    $mediaFor
            );
            if($media){
                //成功上传的情况下，需要对feature_image进行更新
                $blog->feature_image = $media->url;
                $blog->save();
            }
        }else{
            //如果没有图片，可能是没有上传 或者是清空了原有的图片，因此需要把feature_image属性清0
            $blog->feature_image = null;
            $blog->save();
        }
        return redirect('admin/blog/list');
    }

    public function edit($id){
        $blog = Blog::find($id);
        $this->data_view['blog'] = $blog;
        $categories = Category::orderBy('id','asc')->get();
        $this->data_view['categories'] = $categories;
        return view('backend.blog.view',$this->data_view);
    }
}
