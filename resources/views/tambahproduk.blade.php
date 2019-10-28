@extends('layouts.master')

@section('title','Halaman Homepage')

@section('content')
<div class="container">
    <h1>Tambah</h1>
    <form action="produk" method="POST">
        <div class="form-group">
            <label>Kategori</label>
            <select class="form-control" name="id_kategori">
                        <option value="1">
                            Makanan
                        </option>

            </select>
        </div>
        <div class="form-group">
            <label>Produk</label>
            <input type="text" name="nama" class="form-control" placeholder="Enter Produk">
        </div>
        <div class="form-group">
            <label>Harga</label>
            <input type="number" name="harga" class="form-control" placeholder="Enter Harga">
        </div>
    </form>
    <a href="produk"><input type="submit" class="btn btn-primary" name="submit" value="Simpan"></a>
</div>
@endsection