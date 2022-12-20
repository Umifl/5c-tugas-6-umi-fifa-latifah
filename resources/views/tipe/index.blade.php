@extends('layouts.app');
@section('title','THRIFT')
@section('content')
<div class="row">
    <div class="col-md-12 mb-5">
        <h1 style="font-size: 70px;text-align:center">Thrifting</h1>
    </div>
</div>
<div class="row">
    @foreach ($all_produk as $item)    
    <div class="col-md-6">
        <a href="{{route('produks.index',$item->id)}}" style="text-decoration: none;text-transform:uppercase;">
            <div class="card bg-dark p-4 mb-4 text-light shadow">
                <div class="card-body">
                    <div class="d-flex-justify-content-center">
                        <div class="row">
                            <div class="col-md-8 d-flex justify-content-start">
                                <h2>{{ $item->nama }}</h2>
                            </div>
                            <div class="col-md-4 d-flex justify-content-end">
                                    @if ($item->produks_count == 0)
                                    <h5 style="text-align: end">Tidak Ada Produk</h5>
                                    @else
                                    <h5 style="text-align: end"><span>{{ $item->produks_count }}</span> Produk tersedia</h5>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        @endforeach
    </div>
    <div class="row">
        <div class="d-flex justify-content-center">
            <div class="buton mb-3">
                <a href="{{ route('types.create') }}" class="btn btn-success shadow" style="font-size: 24px">INPUT TIPE</a>
                <a href="{{ route('types.createproduct') }}" class="btn btn-danger shadow" style="font-size: 24px">INPUT PRODUK</a>
            </div>
        </div>
    </div>
    @endsection
    