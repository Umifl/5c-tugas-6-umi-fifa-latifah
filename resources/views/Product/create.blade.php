@extends('layouts.app')
@section('title','Input Produk')
@section('content')
<h1 class="mb-3 pt-4">Produk Baru</h1>
<form action="{{ route('types.storeproduct') }}" method="POST">
    @csrf
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Tipe</label>
      <select class="form-select" aria-label="Default select example" name="type_id">
          @foreach ($type as $item)
          <option value="{{ $item->id }}">{{ $item->nama }}</option>
          @endforeach
        </select>
    </div>
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Kode Produk</label>
      <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Ex : BJ000" aria-describedby="emailHelp" name="kode_produk">
    </div>
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Nama Produk</label>
      <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="nama">
    </div>
    <div class="form-floating mb-3">
        <select name="ukuran" id="ukuran" class="form-select">
            <option value="36" >36</option>
            <option value="37" >37</option>
            <option value="38" >38</option>
            <option value="39" >39</option>
        </select>
        <label for="produk">Ukuran</label>
    </div>    
    <div class="input-group mb-3">
        <span class="input-group-text">Rp.</span>
        <div class="form-floating">
        <input type="text" name="harga" id="harga" class="form-control">
        <label for="harga">Harga</label>
        </div>
    </div>
    <button type="submit" class="btn btn-primary">INPUT PRODUK BARU</button>
  </form>
@endsection