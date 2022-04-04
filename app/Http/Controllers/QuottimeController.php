<?php

namespace App\Http\Controllers;

use App\Models\Quottime;
use App\Models\User;

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

}
