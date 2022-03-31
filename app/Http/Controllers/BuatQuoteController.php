<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Quottime;


class BuatQuoteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('buat-quote');
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
        $validatedData = $request->validate([
            'tagar' => 'required|max:20',
            'gambar' => 'image|file|max:1024',
            'isi' => 'required'
        ]);

        if ($request->file('gambar')) {
            $validatedData['gambar'] = $request->file('gambar')->store('gambar');
        }

        $validatedData['user_id'] = auth()->user()->id;
        // strip_tags biar semua element htmlnya hilang
        // $validatedData['isi'] = Str::limit(strip_tags($request->isi), 100);
        $validatedData['isi'] = preg_replace('#</?div.*?>#is', '', $request->isi);
        Quottime::create($validatedData);
        return redirect('/quottime')->with('berhasil', 'Quotes berhasil dibuat');
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
