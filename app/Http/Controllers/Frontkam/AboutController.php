<?php

namespace App\Http\Controllers\Frontkam;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\Olke;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function about(){
        $about = About::find(1);
        $olkes = Olke::where('status', '1')->get();
        return view('front.home.about',compact('about','olkes'));
    }
}
