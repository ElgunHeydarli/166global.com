<?php

namespace App\Http\Controllers\Frontkam;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Olke;
use App\Models\Slider;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $slider = Slider::find(1);
        $olkes = Olke::where('status','1')->get();
        $blogs = Blog::where('status','1')->get();
        return view('front.home.index',compact('slider','olkes','blogs'));
    }
}
