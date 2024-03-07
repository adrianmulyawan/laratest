@extends('layouts.main-layout')
@section('title', 'Test Coding')

@section('content')
    <div class="container mt-5">
        <h1 class="text-center">Tabel List Barang</h1>

        <div class="card p-2 my-2">
            <div class="table table-responsive table-bordered">
                <table class="table table-responsive table-bordered">
                    <thead>
                        <th class="text-center align-middle">No</th>
                        <th class="text-center align-middle">Jenis Kertas</th>
                        <th class="text-center align-middle">Tanggal Masuk</th>
                        <th class="text-center align-middle">Merk</th>
                        <th class="text-center align-middle">Harga</th>
                    </thead>
                    <tbody>
                        @php
                            $number = 0;
                        @endphp
                        @foreach ($products as $product)
                            <tr>
                                <td class="text-center align-middle">{{ $number += 1 }}</td>
                                <td class="text-center align-middle">{{ $product->paper->nama_barang }}</td>
                                <td class="text-center align-middle">{{ $product->paper->tanggal_masuk }}</td>
                                <td class="text-center align-middle">{{ $product->merk }}</td>
                                <td class="text-center align-middle">{{ $product->harga }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
