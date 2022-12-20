<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use App\Models\Type;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index($id){
        $type = Type::find($id);
        $produk = Produk::where('type_id', $id)->get();
        return view('produk.index',compact('produk','type'));
    }

    public function edit(Produk $produk,$id){
        $produk = Produk::find($id);
        return view('produk.edit',compact('produk'));
    }
    
    public function updateproduct(Request $request,$id){
        $produk = Produk::find($id);
        $produk->update($request->all());
        return redirect()->route('types.index')->with('success', 'Produk Berhasil Diubah');
    }

    public function destroy($id){
        $produk = Produk::findOrFail($id);
        $produk->delete();
        return redirect()->route('types.index')->with('success', 'Produk Berhasil Dihapus');
    }
}
