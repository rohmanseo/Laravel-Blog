<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class produkController extends Controller
{
    function index(){
        return view('produk');
    }
    function tambah(){
        return view('tambahproduk');
    }
}
