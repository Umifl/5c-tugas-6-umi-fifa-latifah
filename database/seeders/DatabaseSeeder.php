<?php

namespace Database\Seeders;

use App\Models\product;
use App\Models\tipe;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Type::create([
            'nama' => 'Sepatu kulit',
        ]);
 
        Type::create([
            'nama' => 'Sepatu Kanvas',
        ]);
        Type::create([
            'nama' => 'High Hils 3cm',
        ]);
        Type::create([
            'nama' => 'Pantopel',
        ]);
        Type::create([
            'nama' => 'Sendal hak tahu',
        ]);
 
        Produk::create([
             'kode_produk'=> 'SK001',
             'nama'=> 'Gio Cardin',
             'ukuran'=> '38',
             'harga'=> 120000,
             'type_id'=>'1',
        ]);
        Produk::create([
             'kode_produk'=> 'SK002',
             'nama'=> 'Vans',
             'ukuran'=> '39',
             'harga'=> 250000,
             'type_id'=>'1',
        ]);
        Produk::create([
             'kode_produk'=> 'SK003',
             'nama'=> 'Zara',
             'ukuran'=> '39',
             'harga'=> 200000,
             'type_id'=>'2',
        ]);
        Produk::create([
             'kode_produk'=> 'SK004',
             'nama'=> 'Zapato',
             'ukuran'=> '37',
             'harga'=> 130000,
             'type_id'=>'2',
        ]);
        Produk::create([
             'kode_produk'=> 'SK005',
             'nama'=> 'Zara',
             'ukuran'=> '38',
             'harga'=> 250000,
             'type_id'=>'3',
        ]);
        Produk::create([
             'kode_produk'=> 'SK006',
             'nama'=> 'Vans',
             'ukuran'=> '36',
             'harga'=> 200000,
             'type_id'=>'4',
        ]);
        Produk::create([
             'kode_produk'=> 'SK007',
             'nama'=> 'Gio Cardin',
             'ukuran'=> '37',
             'harga'=> 120000,
             'type_id'=>'5',
        ]);
    }
    
}
