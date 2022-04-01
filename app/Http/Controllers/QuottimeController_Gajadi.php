<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Quottime;

class QuottimeController extends Controller
{


    public function user()
    {
        return view('/quottime', [
            'data' => Quottime::latest()->get(),
        ]);
    }

    public function quotes()
    {
        $data = Quottime::latest();

        if (request('cari')) {
            $data->where('isi', 'like', '%' . request('cari') . '%')->orWhere('tagar', 'like', '%' . request('cari') . '%');
            // $data->where('isi', 'like', '%' . request('cari') . '%');
            // $data = Quottime::where('nama', request('cari'))->first();
        }

        return view('/quotes', [
            'data' =>  $data->get()
        ]);
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
