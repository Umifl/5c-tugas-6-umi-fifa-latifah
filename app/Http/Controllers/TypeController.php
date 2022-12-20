<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Tipe;
use Illuminate\Http\Request;

class TypeController extends Controller
{
    public function index(){
        $type = Type::all();
        $all_produk = Type::withCount('products')->get();
        return view('tipe.index', compact('tipe','all_produk'));
    }

    public function create(){
        return view('tipe.create');
    }

    public function createproduct(){
        $type = Type::get();
        return view('product.create',compact('tipe'));
    }

    public function store(Request $request){
        Type::create($request->all());
        return redirect()->route('tipes.index')->with('success', 'Tipe Berhasil Ditambahkan');
    }

    public function storeproduct(Request $request){
        Produk::create($request->all());
        return redirect()->route('tipes.index')->with('success', 'Produk Berhasil Ditambahkan');
    }
}
