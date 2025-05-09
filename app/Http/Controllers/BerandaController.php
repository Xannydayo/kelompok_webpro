<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class BerandaController extends Controller
{
    public function berandaBackend()
    {
        return view('backend.v_beranda.index', [
            'judul' => 'Beranda',
            'sub' => 'Halaman Beranda'
        ]);
    }
    public function index()
    {
        $product = Product::where('status', 1)->orderBy('updated_at', 'desc')->paginate(6);
        // dd($product);
        return view('v_beranda.index', [
            'judul' => 'Halaman Beranda',
            'produk' => $product,
        ]);
    }
}
