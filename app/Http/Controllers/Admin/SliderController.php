<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\SliderRequest;
use App\Models\Slider;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    public function index(){
        $slider = Slider::find(1);
        return view('admin.slider.index',compact('slider'));
    }


    public function update(SliderRequest $request){
        $slider = Slider::find(1);
        $validated  = $request->validated();

        if ($request->hasFile('image')) {
            $name = 'image' . time() . '.' . $request->file('image')->extension();
            $request->file('image')->move(public_path() . '/image/', $name);
            $validated['image'] = $name;
        }

        $slider->update($validated);
        return redirect()->route('admin.slider')->with('message','Məlumatlar uğurla yeniləndi');
    }


}
