<?php

namespace App\Http\Controllers;

use App\Model\Category;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $this->data_view['roots'] = Category::where('level',1)->orderby('position','asc')->get();
        return view('home',$this->data_view);
    }
}
