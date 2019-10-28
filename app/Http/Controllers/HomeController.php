<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
        $produk = DB::table('produk')->get();

        return view('homepage');
    }
    public function show($id)
    {
        $users = ['rohman','bintang','farel'];
        return view('single',['blog' => $id, 'users'=> $users ]);
    }
}
