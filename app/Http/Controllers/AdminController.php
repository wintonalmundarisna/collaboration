<?php

namespace App\Http\Controllers;

use App\Models\Quottime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->authorize('admin');
        return view('dashboard.users.index', [
            'data' => Quottime::latest()->get()
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
        // if($quottime->user->id !== auth()->user()->id) {
        //     abort(403);
        // } else {
            
        // }

        return view('dashboard.users.edit', [
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
            'gambar' => 'image|file|max:1024',
            'isi' => 'required'
        ];

        if ($request->tagar != $quottime->tagar) {
            $rules['tagar'] = 'required|max:200|unique:quottimes';
        }
        
        $input = $request->validate($rules);

        $input['user_id'] = auth()->user()->id;
        $input['tagar'] = Str::limit(strip_tags($request->tagar), 200);
        $input['tagar'] = preg_replace('#</?(div|/).*?>#is', '', $request->tagar);
        $input['isi'] = preg_replace('#</?div.*?>#is', '', $request->isi);
        
        if ($image = $request->file('gambar')) {
            if ($request->oldImage) {
                unlink('img/' . $quottime->gambar);
            }

            $fileName = pathinfo($image->getClientOriginalName(), PATHINFO_FILENAME);
            $imageName = $fileName . "-" . time() . "." . $image->getClientOriginalExtension();
            $uploadPath = 'img/';
            $image->move($uploadPath, $imageName);
            $input['gambar'] = $imageName;
        }

        $quottime->update($input);

        if ($quottime->user->id !== auth()->user()->id) {
            abort(403);
        }

        return redirect('/users/quottime');
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
        return redirect('/users/quottime');
    }

    public function quotes()
    {
        $data = Quottime::latest();

        if (request('cari')) {
            $data->where('isi', 'like', '%' . request('cari') . '%')->orWhere('tagar', 'like', '%' . request('cari') . '%');
            // $data->where('isi', 'like', '%' . request('cari') . '%');
            // $data = Quottime::where('nama', request('cari'))->first();
        }

        return view('dashboard.users.index', [
            'data' =>  $data->get()
        ]);
    }
}
