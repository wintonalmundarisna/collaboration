<?php

namespace App\Http\Controllers;

use App\Models\MyPost;
use App\Http\Requests\StoreMyPostRequest;
use App\Http\Requests\UpdateMyPostRequest;

class MyPostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('mypost');
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
     * @param  \App\Http\Requests\StoreMyPostRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreMyPostRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\MyPost  $myPost
     * @return \Illuminate\Http\Response
     */
    public function show(MyPost $myPost)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\MyPost  $myPost
     * @return \Illuminate\Http\Response
     */
    public function edit(MyPost $myPost)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateMyPostRequest  $request
     * @param  \App\Models\MyPost  $myPost
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateMyPostRequest $request, MyPost $myPost)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MyPost  $myPost
     * @return \Illuminate\Http\Response
     */
    public function destroy(MyPost $myPost)
    {
        //
    }
}