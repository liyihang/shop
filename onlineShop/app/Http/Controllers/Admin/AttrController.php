<?php

namespace App\Http\Controllers\Admin;

use App\Admin\Attr;
use Illuminate\Http\Request;

class AttrController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('admin.attr.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Attr  $attr
     * @return \Illuminate\Http\Response
     */
    public function show(Attr $attr)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Attr  $attr
     * @return \Illuminate\Http\Response
     */
    public function edit(Attr $attr)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Attr  $attr
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Attr $attr)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Attr  $attr
     * @return \Illuminate\Http\Response
     */
    public function destroy(Attr $attr)
    {
        //
    }
}
