<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class QuottimeController extends Controller
{
    public function index()
    {
        return view('quottime', [
            'user' => User::all()
        ]);
    }
}
