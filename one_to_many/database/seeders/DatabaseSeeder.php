<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Merk;
use App\Models\Produk;
use Faker\Factory as Faker;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        Merk::create([
           'nama' => 'Indofood',
        ]);

        Merk::create([
           'nama' => 'ABC',
        ]);
        Merk::create([
           'nama' => 'Siantar',
        ]);
        Merk::create([
           'nama' => 'Garudafood',
        ]);
        Merk::create([
           'nama' => 'Belibis',
        ]);
        Merk::create([
           'nama' => 'Del Monte',
        ]);
        Merk::create([
           'nama' => 'Sasa',
        ]);

        Produk::create([
            'kode_produk'=> '08654',
            'nama'=> 'Indomie Goreng Rasa Original',
            'harga'=> 3000,
            'merk_id'=>'1',
        ]);
        Produk::create([
            'kode_produk'=> '08655',
            'nama'=> 'Indomie Goreng Rasa Rendang',
            'harga'=> 3000,
            'merk_id'=>'1',
        ]);
        Produk::create([
            'kode_produk'=> '04534',
            'nama'=> 'Mie Sedap Original',
            'harga'=> 2800,
            'merk_id'=>'2',
        ]);
        Produk::create([
            'kode_produk'=> '04535',
            'nama'=> 'Mie Sedap Ayam Bawang',
            'harga'=> 3000,
            'merk_id'=>'2',
        ]);
        Produk::create([
            'kode_produk'=> '06545',
            'nama'=> 'Go! Potato',
            'harga'=> 1000,
            'merk_id'=>'3',
        ]);
        Produk::create([
            'kode_produk'=> '07545',
            'nama'=> 'Garuda Rosta 250gr',
            'harga'=> 5400,
            'merk_id'=>'4',
        ]);
        Produk::create([
            'kode_produk'=> '09525',
            'nama'=> 'Saus Pedas Dua Belibis 500ml',
            'harga'=> 18000,
            'merk_id'=>'5',
        ]);
        Produk::create([
            'kode_produk'=> '09535',
            'nama'=> 'Saus Tomat Dua Belibis 500ml',
            'harga'=> 16500,
            'merk_id'=>'5',
        ]);
        Produk::create([
            'kode_produk'=> '05436',
            'nama'=> 'Saus Spaghetti Del Monte 250ml',
            'harga'=> 8900,
            'merk_id'=>'6',
        ]);
        Produk::create([
            'kode_produk'=> '02436',
            'nama'=> 'Saus Extrapedas Sasa 500ml',
            'harga'=> 17000,
            'merk_id'=>'7',
        ]);
    }
}
