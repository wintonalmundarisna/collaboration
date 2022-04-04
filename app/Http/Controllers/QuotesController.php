<?php

namespace App\Http\Controllers;

use App\Models\Quottime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class QuotesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('mypost', [
            'data' => Quottime::where('user_id', auth()->user()->id)->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('buat-quote');
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
            'tagar' => 'required|max:80',
            'gambar' => 'image|file|max:1024',
            'isi' => 'required|max:200'
        ]);

        if ($request->file('gambar')) {
            $validatedData['gambar'] = $request->file('gambar')->store('gambar');
        }

        $validatedData['user_id'] = auth()->user()->id;
        // strip_tags biar semua element htmlnya hilang
        $validatedData['tagar'] = Str::limit(strip_tags($request->tagar), 80);
        $validatedData['isi'] = preg_replace('#</?div.*?>#is', '', $request->isi);
        Quottime::create($validatedData);
        return redirect('/mypost/quottime')->with('berhasil', 'Quotes berhasil dibuat');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Quottime  $quottime
     * @return \Illuminate\Http\Response
     */
    public function show(Quottime $quottime)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Quottime  $quottime
     * @return \Illuminate\Http\Response
     */
    public function edit(Quottime $quottime)
    {
        if ($quottime->user->id !== auth()->user()->id) {
            abort(403);
        }

        return view('edit', [
            'data' => $quottime
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Quottime  $quottime
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Quottime $quottime)
    {
        $rules = [
            'tagar' => 'required|max:20',
            'gambar' => 'image|file|max:1024',
            'isi' => 'required'
        ];

        $validatedData = $request->validate($rules);

        if ($request->file('gambar')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validatedData['gambar'] = $request->file('gambar')->store('gambar');
        }
        // Kalo ada request gambar, kalo ada request gambar hidden yang lama, hapus, lalu masukkan gambar baru

        $validatedData['user_id'] = auth()->user()->id;
        $validatedData['tagar'] = Str::limit(strip_tags($request->tagar), 30);
        $validatedData['isi'] = preg_replace('#</?div.*?>#is', '', $request->isi);

        Quottime::where('id', $quottime->id)->update($validatedData);

        if ($quottime->user->id !== auth()->user()->id) {
            abort(403);
        }

        return redirect('/mypost/quottime');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Quottime  $quottime
     * @return \Illuminate\Http\Response
     */
    public function destroy(Quottime $quottime)
    {
        if ($quottime->gambar) {
            Storage::delete($quottime->gambar);
        }
        // Kalo ada file gambar, maka hapus

        Quottime::destroy($quottime->id);
        return redirect('/mypost/quottime');
    }
}
