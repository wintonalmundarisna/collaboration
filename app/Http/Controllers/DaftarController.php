<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class DaftarController extends Controller
{
    public function index() {
        return view('daftar');
    }

    public function daftar(Request $request) {
        $validatedData = $request->validate([
            'nama'      => 'required|min:3|max:255',
            'email'     => 'required|email:dns|unique:users',
            'password'  => 'required|min:3|max:255'
        ]);

        $validatedData['password'] = Hash::make($validatedData['password']);

        User::create($validatedData);

        return redirect('/login')->with(['success' => 'Pendaftaran berhasil, silahkan login!']);
    }
}
