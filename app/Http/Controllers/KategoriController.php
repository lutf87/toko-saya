<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KategoriController extends Controller
{
    public function index()
    {
        $title = "kategori Produk";
        return view('kategori.index', compact('title'));
    }

    public function create()
    {
        $title = "Form kategori";
        return view('kategori.create', compact('title'));
    }
}
