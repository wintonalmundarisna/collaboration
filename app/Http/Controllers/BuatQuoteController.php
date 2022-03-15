<?php

namespace App\Http\Controllers;

use App\Models\BuatQuote;
use App\Http\Requests\StoreBuatQuoteRequest;
use App\Http\Requests\UpdateBuatQuoteRequest;

class BuatQuoteController extends Controller
{
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
     * @param  \App\Http\Requests\StoreBuatQuoteRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBuatQuoteRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\BuatQuote  $buatQuote
     * @return \Illuminate\Http\Response
     */
    public function show(BuatQuote $buatQuote)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\BuatQuote  $buatQuote
     * @return \Illuminate\Http\Response
     */
    public function edit(BuatQuote $buatQuote)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateBuatQuoteRequest  $request
     * @param  \App\Models\BuatQuote  $buatQuote
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateBuatQuoteRequest $request, BuatQuote $buatQuote)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BuatQuote  $buatQuote
     * @return \Illuminate\Http\Response
     */
    public function destroy(BuatQuote $buatQuote)
    {
        //
    }
}
