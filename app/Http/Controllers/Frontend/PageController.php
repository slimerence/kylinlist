<?php

namespace App\Http\Controllers\Frontend;

use App\Model\Blog;
use App\Model\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PageController extends Controller
{
    public function index(){
        $this->data_view['roots'] = Category::where('level',1)->orderby('position','asc')->get();
        return view('frontend.home',$this->data_view);
    }

    public function about(){

        return view('frontend.about',$this->data_view);

    }

    public function faq(){

        return view('frontend.pages.faq');
    }

    public function contact(){

        return view('frontend.contact',$this->data_view);

    }

    public function coming(){

        return view('frontend.pages.construction');
    }

    public function pricing(){

        return view('frontend.pages.pricing');
    }

    /**
     * 用来获取全部blog文章的方法
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function blog_list(){
        $blogs = Blog::orderby('id','asc')->paginate(9);
        $this->data_view['blogs'] = $blogs;
        $this->data_view['categories'] = Category::getBlogCategory();
        return view('frontend.blog.blog-list',$this->data_view);
    }

    /**
     * 用来获取指定category下的文章的方法
     * @param null $uri
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function blog_list_spec($uri=null){
        $blogs = Blog::orderby('id','asc')->paginate(9);
        //根据访问的url获取访问的category
        if(isset($uri)&&$uri!=='null'){
            $category = Category::where('url',$uri)->first();
            if($category){
                $blogs = Blog::where('category_id',$category->id)->paginate(9);
            }
        }
        $this->data_view['blogs'] = $blogs;
        $this->data_view['categories'] = Category::getBlogCategory();
        return view('frontend.blog.blog-list',$this->data_view);
    }

    public function blog_detail($category,$url){
        $blog = Blog::where('url',$url)->first();
        if($blog == null){
            return redirect('/industry');
        }
        $this->data_view['blog'] = $blog;
        $this->data_view['categories'] = Category::getBlogCategory();
        return view('frontend.blog.detail',$this->data_view);
    }
}
