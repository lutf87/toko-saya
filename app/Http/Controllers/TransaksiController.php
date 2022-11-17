<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    public function index()
    {
        $title = "Transaksi";
        return view('transaksi.index', compact('title'));
    }

    public function create()
    {
        $title = "Transaksi";
        return view('transaksi.create', compact('title'));
    }
}
