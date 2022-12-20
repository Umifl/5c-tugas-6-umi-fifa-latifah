@extends('layouts.app')
@section('title','Daftar Produk Gudangku')
@section('content')
    <div class="row d-flex justify-content-center mt-5">
        <div class="col-md-8">
            <h1>Produk <span style="text-transform: uppercase">{{ $type->nama }}</span></h1>
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Kode Produk</th>
                    <th scope="col">Nama Produk</th>
                    <th scope="col">Ukuran</th>
                    <th scope="col">Harga</th>
                    <th scope="col">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                    @php
                        $no = 1;
                    @endphp
                    @foreach ($produk as $item)
                    <tr>
                        <th scope="row">{{ $no++ }}</th>
                        <td>{{ $item->kode_produk }}</td>
                        <td>{{ $item->nama }}</td>
                        <td>{{ $item->ukuran }}</td>
                        <td>{{ $item->harga }}</td>
                        <td>
                            <form action="{{ route('produks.destroy',$item->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <a href="{{ route('produks.edit',$item->id) }}" class="btn btn-primary">UBAH</a>
                                <button type="submit" class="btn btn-danger">HAPUS</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
              </table>
        </div>
    </div>
@endsection