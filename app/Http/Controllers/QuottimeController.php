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
            // 'latest' => Quottime::latest()
        ]);
    }

    public function quotes()
    {
        $data = Quottime::latest();

        if (request('cari')) {
            $data = User::firstWhe
            re('nama', request('nama'));
        }

        return view('quotes', [
            // 'data' =>  Quottime::latest()->filter()->get()
            'data' =>  Quottime::latest()->get()
        ]);
    }
}
