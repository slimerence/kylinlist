<?php

namespace App\Http\Controllers\Backend;

use App\Models\Media;
use App\Models\Utils\MediaTool;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Category;

class CategoryController extends Controller
{
    public function list(){
        $this->data_view['roots'] = Category::where('level',1)->orderby('position','asc')->get();
        $this->data_view['data_table'] = true;

        return view('backend.category.list',$this->data_view);
    }

    /**
     * @param $id
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit($id){
        $this->data_view['roots'] = Category::where('level',1)->orderby('position','asc')->get();
        $category = Category::find($id);
        $this->data_view['category'] = $category;
        $this->data_view['seo'] = $category->getSeo();
        return view('backend.category.view',$this->data_view);
    }

    public function create(){
        $this->data_view['roots'] = Category::where('level',1)->orderby('position','asc')->get();
        $this->data_view['category'] = new Category();
    return view('backend.category.view',$this->data_view);
}

    public function delete($id){
        $category = Category::find($id);
        $category->delete();
        return redirect('admin/category/list');
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function save(Request $request)
    {
        $data = $request->all();
        //dd($data);
        $seoData = $request->get('seo');
        $category = Category::Persistent($data);
        if ($seoData && !is_null($seoData['title'])) {
            //save seo data
            $seo = $category->getSeo();
            $seo->saveArrayData($seoData);
        }
        $image = $request->file('image');
        if($image){
            //如果获取到了新的图片，需要把原数据库中对应的图片删掉
            $this->_removeDefaultImg($category->id);
            $storagePath = _buildUploadFolderPath();
            $mediaFor = MediaTool::$FOR_CATEGORY;
            //dd($image);
            $name = str_replace(" ", "_", $image->getClientOriginalName());
            //get image file.
            $path = $image->storeAs($storagePath,$name,'public');
            // 保存到数据库中
            Media::Persistent(
                $category->id,
                MediaTool::GuessFileTypeByExtensionName($image->extension()),
                _buildFrontendAssertPath($path),
                $name,
                $mediaFor
            );
        }

        return redirect('admin/category/list');
    }

    public function _removeDefaultImg($id){
        $medias = Media::where('for',MediaTool::$FOR_CATEGORY)->where('target_id',$id);
        $medias->delete();
    }

}
