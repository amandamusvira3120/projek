@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <a href="{{ url('home') }}" class="btn btn-primary">Kembali</a>
            <div class="card">
                <div class="card-header">
                    <h4>{{ $barang->nama_barang }}</h4>
                </div>
                <div class="col-md-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                          <li class="breadcrumb-item"><a href="{{ url('home') }}">Home</a></li>
                          <li class="breadcrumb-item active" aria-current="page">{{ $barang->nama_barang }}</li>
                        </ol>
                      </nav>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                        <img src="{{ url('uploads') }}/{{ $barang->gambar }}" width="300" alt="">
                        </div>
                            <div class="col-md-6 mt-4">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <td>Harga</td>
                                        <td>:</td>
                                        <td>{{ number_format($barang->harga) }}</td>
                                    </tr>
                                    <tr>
                                        <td>Stok</td>
                                        <td>:</td>
                                        <td>{{ number_format($barang->stok) }}</td>
                                    </tr>
                                    <tr>
                                        <td>Keterangan</td>
                                        <td>:</td>
                                        <td>{{ $barang->keterangan }}</td>
                                    </tr>
                                   
                                        <tr>
                                            <td>Jumlah Pesan</td>
                                            <td>:</td>
                                            <td>
                                                <form action="post" method="{{ url('pesan') }}/{{ $barang->id }}">
                                                @csrf
                                                <input type="text" name="jumlah_pesan" class="form-control"
                                                required="">
                                                <button type="submit" class="btn btn-primary mt-2">Masukkan Keranjang</button>
                                                </td>
                                    </form>
                                </tbody>
                            </table>
                        </div>
                    </div>      
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
