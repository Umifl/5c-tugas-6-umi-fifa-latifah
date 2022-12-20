@extends('layouts.app')
@section('title','Edit Produk Gudangku')
@section('content')
<h1 class="mb-3">Produk Edit</h1>
<form action="{{ route('produks.updateproduct',$produk->id) }}" method="POST">
  @method('put')
    @csrf 
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="type_id" value="{{ $produk->type_id }}" hidden>
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Kode Produk</label>
      <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="kode_produk" value="{{ $produk->kode_produk }}">
    </div>
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Nama Produk</label>
      <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="nama" value="{{ $produk->nama }}">
    </div>
    <div class="form-floating mb-3">
        <select name="ukuran" id="ukuran" class="form-select">
            <option value="S" {{ old('ukuran') ?? $produk->ukuran == "36" ? "selected" : "" }}>36</option>
            <option value="S" {{ old('ukuran') ?? $produk->ukuran == "37" ? "selected" : "" }}>37</option>
            <option value="L" {{ old('ukuran')?? $produk->ukuran == "38" ? "selected" : "" }}>38</option>
            <option value="XL" {{ old('ukuran')?? $produk->ukuran == "39" ? "selected" : "" }}>39</option>
        </select>
        <label for="ukuran">Ukuran</label>
    </div>   
    <div class="input-group mb-3">
        <span class="input-group-text">Rp.</span>
        <div class="form-floating">
        <input type="text" name="harga" id="harga" class="form-control" 
        value="{{ old('harga') ?? $produk->harga }}">
        <label for="harga">Harga</label>
        </div>
    </div>
    <button type="submit" class="btn btn-primary">INPUT PRODUK BARU</button>
  </form>
@endsection