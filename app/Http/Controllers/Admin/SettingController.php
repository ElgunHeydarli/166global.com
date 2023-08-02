<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\SettingRequest;
use App\Models\Settings;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function index(){
        $setting = Settings::find(1);
        return view('admin.setting.index',compact('setting'));
    }

    public function update(SettingRequest $request){
        $setting = Settings::find(1);
        $validated  = $request->validated();

        if ($request->hasFile('image')) {
            $name = 'image' . time() . '.' . $request->file('image')->extension();
            $request->file('image')->move(public_path() . '/image/', $name);
            $validated['image'] = $name;
        }

        $setting->update($validated);
        return redirect()->route('admin.setting')->with('message','Məlumatlar uğurla yeniləndi');
    }

}
