<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Quotes;
use League\CommonMark\Extension\SmartPunct\Quote;

class QuottimeController extends Controller
{
    public function index()
    {
        return view('quottime', [
            'user' => User::all()
        ]);
    }
}
