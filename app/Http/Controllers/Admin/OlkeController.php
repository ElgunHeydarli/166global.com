<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\OlkeRequest;
use App\Models\Olke;
use Illuminate\Http\Request;

class OlkeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $olkes = Olke::get();
        return view('admin.olke.index',compact('olkes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.olke.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(OlkeRequest $request)
    {
        $validated = $request->validated();
        if ($request->hasFile('image')) {
            $name = 'image' . time() . '.' . $request->file('image')->extension();
            $request->file('image')->move(public_path() . '/image/', $name);
            $validated['image'] = $name;
        }

        Olke::create($validated);
        return redirect()->route('admin.olke')->with('message','Məlumatlar uğurla əlavə edildi');
    }



    public function updateStatus(Request $request)
    {
        $olkes = Olke::findOrFail($request->olke_id);
        $olkes->status = $request->status;
        $olkes->save();

        return response()->json(['message' => 'User status updated successfully.']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $olke = Olke::find($id);
        return view('admin.olke.edit',compact('olke'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(OlkeRequest $request, $id)
    {
        $olke = Olke::find($id);
        $validated  = $request->validated();

        if ($request->hasFile('image')) {
            $name = 'image' . time() . '.' . $request->file('image')->extension();
            $request->file('image')->move(public_path() . '/image/', $name);
            $validated['image'] = $name;
        }

        $olke->update($validated);
        return redirect()->route('admin.olke')->with('message','Məlumatlar uğurla yeniləndi');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Olke::find($id)->delete();
        return redirect()->back()->with('message','Uğurla silindi');

    }
}
