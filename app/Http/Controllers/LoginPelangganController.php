<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class LoginPelangganController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('auth.login');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
    
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
    
            // Dapatkan user yang login
            $user = Auth::user();
    
            // Cek apakah data customer sudah ada untuk user ini
            $existingCustomer = DB::table('customer')->where('user_id', $user->id)->first();
    
            if (!$existingCustomer) {
                // Jika belum ada, insert data ke tabel customer
                DB::table('customer')->insert([
                    'user_id'      => $user->id,
                    'google_id'    => 1,
                    'google_token' => 1,
                    'alamat'       => null,
                    'pos'          => null,
                    'created_at'   => now(),
                    'updated_at'   => now(),
                ]);
            }
    
            return redirect()->intended('/beranda')->with('success', 'Login berhasil, selamat datang!');
        }
    
        return back()->with('error', 'Email atau password salah!')->withInput();
}

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/')->with('success', 'Logout successful. See you next time!');
    }

}