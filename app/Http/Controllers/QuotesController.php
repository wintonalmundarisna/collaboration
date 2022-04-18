<?php

namespace App\Http\Controllers;

use App\Models\Quottime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
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
            'tagar' => 'required|max:200|unique:quottimes',
            'gambar' => 'image|file|max:1024|unique:quottimes',
            'isi' => 'required|max:500'
        ]);

        $validatedData['user_id'] = auth()->user()->id;
        $validatedData['tagar'] = Str::limit(strip_tags($request->tagar), 200);
        $validatedData['tagar'] = preg_replace('#</?(div|/).*?>#is', '', $request->tagar);
        $validatedData['isi'] = preg_replace('#</?div.*?>#is', '', $request->isi);
        $data = Quottime::create($validatedData);

        if ($request->hasFile('gambar')) {
            $request->file('gambar')->move('img/', $request->file('gambar')->getClientOriginalName());
            $data->gambar = $request->file('gambar')->getClientOriginalName();
            $data->save();
        }

        return redirect('/mypost/quottime');
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
        $request->validate([
            'isi' => 'required'
        ]);

        if ($request->tagar != $quottime->tagar && $request->gambar != $quottime->gambar ) {
            $request['tagar'] = 'required|max:20|unique:quottimes';
            $request['gambar'] = 'image|file|max:1024|unique:quottimes';
        }

        $request['user_id'] = auth()->user()->id;
        $request['tagar'] = Str::limit(strip_tags($request->tagar), 30);
        $request['tagar'] = preg_replace('#</?(div|/).*?>#is', '', $request->tagar);
        $request['isi'] = preg_replace('#</?div.*?>#is', '', $request->isi);
        
        $input = $request->all();

        if ($image = $request->file('gambar')) {

            if ($request->oldImage) {
                unlink('img/' . $quottime->gambar);
            }

            $destinationPath = 'img/';
            // $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $profileImage = $image->getClientOriginalName();
            $image->move($destinationPath, $profileImage);
            $input['gambar'] = "$profileImage";
        }

        
        $quottime->update($input);

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
            unlink('img/' . $quottime->gambar);
        }

        Quottime::destroy($quottime->id);
        return redirect('/mypost/quottime');
    }
}
