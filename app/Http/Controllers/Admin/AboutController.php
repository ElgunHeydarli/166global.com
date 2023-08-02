<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AboutRequest;
use App\Models\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index(){
        $about = About::find(1);
        return view('admin.about.index',compact('about'));
    }


    public function update(AboutRequest $request){
        $about = About::findOrFail(1);
        $validated = $request->validated();

        $about->update($validated);
        return redirect()->back()->with('message','Məlumatlar uğurla yeniləndi');

    }

}
