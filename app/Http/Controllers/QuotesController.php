<?php

namespace App\Http\Controllers;

use App\Models\Quotes;
use App\Http\Requests\StoreQuotesRequest;
use App\Http\Requests\UpdateQuotesRequest;
use App\Models\Quottime;
use App\Models\User;

class QuotesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $data = Quottime::latest();

        if (request('cari')) {
            // $data = User::firstWhere('nama', request('nama'));
            $data->where('nama', 'like', '%' . request('cari') . '%');
                // ->orWhere('isi', 'like', '%' . request('cari') . '%');
        }
        
        // if (request('isi')) {
            // $data = Quottime::firstWhere('isi', request('isi'));
            // $data->where('isi', 'like', '%', request('cari'), '%');
        // }

        return view('quotes', [
            "data" =>  $data->get()
        ]);

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
     * @param  \App\Http\Requests\StoreQuotesRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreQuotesRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Quotes  $quotes
     * @return \Illuminate\Http\Response
     */
    public function show(Quotes $quotes)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Quotes  $quotes
     * @return \Illuminate\Http\Response
     */
    public function edit(Quotes $quotes)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateQuotesRequest  $request
     * @param  \App\Models\Quotes  $quotes
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateQuotesRequest $request, Quotes $quotes)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Quotes  $quotes
     * @return \Illuminate\Http\Response
     */
    public function destroy(Quotes $quotes)
    {
        //
    }
}
