@extends('layouts.master')

@section('title','Halaman Homepage')

@section('content')
<div class="container">
    <h1>Read</h1> 
    <a href="#" class="btn btn-success">Home</a>
    <a href="tambah" class="btn btn-primary">tambah</a>
    <table class="table table-bordered table-hover">
        <thead>
        <tr class="text-center">
            <th scope="col">ID</th>
            <th scope="col">Kategori</th>
            <th scope="col">Produk</th>
            <th scope="col">Harga</th>
            <th scope="col" colspan="2">Action</th>
        </tr>
        </thead>
        <tbody>

        <tr>
                    <th scope="row">1</th>
                    <td>Minuman</td>
                    <td>Cola</td>
                    <td>20000</td>
                    <td width="1"><a href="#" class="btn btn-success">Edit</a>
                    </td>
                    <td width="1"><a href="#"
                                     class="btn btn-danger">Delete</a></td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Makanan</td>
                    <td>Donat</td>
                    <td>15000</td>
                    <td width="1"><a href="#" class="btn btn-success">Edit</a>
                    </td>
                    <td width="1"><a href="#"
                                     class="btn btn-danger">Delete</a></td>
                </tr>
        </tbody>
    </table>
</div>
@endsection