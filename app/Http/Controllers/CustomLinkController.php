<?php

namespace App\Http\Controllers;

use App\Models\CustomLink;
use Illuminate\Http\Request;

class CustomLinkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $customs = CustomLink::latest()->get();
        return view('admin.custom_link.index',compact('customs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.custom_link.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'url'=>'required',
            'status'=>'required',
            'position'=>'required',
        ]);
        $data = $request->all();
        CustomLink::create($data);
        return redirect()->route('admin.custom-link.index')->with('success','Custom Link Created Successfully');
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
        $customLink = CustomLink::find($id);
        return view('admin.custom_link.edit',compact('customLink'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name'=>'required',
            'url'=>'required',
            'status'=>'required',
            'position'=>'required',
        ]);
        $data = $request->all();
        $link = CustomLink::find($id);
        $link->update($data);

        return redirect()->route('admin.custom-link.index')->with('success','Custom Link Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $link = CustomLink::find($id);
        $link->delete();
        return redirect()->route('admin.custom-link.index')->with('success','Custom Link Deleted Successfully');
    }
}
