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
        return view('/quotes', [
            'data' =>  Quottime::latest()->filter()->get()
        ]);
    }
}
