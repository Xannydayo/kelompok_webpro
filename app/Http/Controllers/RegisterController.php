<?php

namespace App\Http\Controllers;

use App\Models\optional;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;

class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('auth.register');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
    $request->validate([
        'nama' => 'required|string|max:255',
        'email' => 'required|string|email|max:255|unique:users',
        'password' => 'required|string|min:8|confirmed',
        'hp' => 'required|numeric',
    ]);

    $user = new \App\Models\User();
    $user->nama = $request->input('nama');
    $user->email = $request->input('email');
    $user->password = bcrypt($request->input('password'));
    $user->hp = $request->input('hp');
    $user->save();

    return redirect()->route('login')->with('success', 'Registration successful. Please login.');
    }

    /**
     * Display the specified resource.
     */
    public function show(optional $optional)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, optional $optional)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(optional $optional)
    {
        //
    }
}