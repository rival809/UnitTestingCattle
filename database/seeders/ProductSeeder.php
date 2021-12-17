<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'nama'=> 'Daging Sapi Sirloin',
            'harga'=> '120000',
            'berat'=> '1',
            'kategori_id'=> '1',
            'gambar'=> 'dagingsapisirloin.png',
        ]);

        DB::table('products')->insert([
            'nama'=> 'Daging Sapi Tenderloin',
            'harga'=> '110000',
            'berat'=> '1',
            'kategori_id'=> '1',
            'gambar'=> 'dagingsapitenderloin.png',
        ]);

        DB::table('products')->insert([
            'nama'=> 'Daging Sapi Cincang',
            'harga'=> '100000',
            'berat'=> '1',
            'kategori_id'=> '1',
            'gambar'=> 'dagingsapicincang.png',
        ]);

        DB::table('products')->insert([
            'nama'=> 'Daging Kambing Cincang',
            'harga'=> '120000',
            'berat'=> '1',
            'kategori_id'=> '2',
            'gambar'=> 'dagingkambingcincang.png',
        ]);

        DB::table('products')->insert([
            'nama'=> 'Daging Kambing Iga',
            'harga'=> '120000',
            'berat'=> '1',
            'kategori_id'=> '2',
            'gambar'=> 'dagingkambingiga.png',
        ]);

        DB::table('products')->insert([
            'nama'=> 'Daging Ayam Cincang',
            'harga'=> '25000',            
            'berat'=> '1',
            'kategori_id'=> '3',
            'gambar'=> 'dagingayamcincang.png',
        ]);

        DB::table('products')->insert([
            'nama'=> 'Daging Ayam Paha',
            'harga'=> '25000',
            'berat'=> '1',
            'kategori_id'=> '3',
            'gambar'=> 'dagingayampaha.png',
        ]);

        DB::table('products')->insert([
            'nama'=> 'Daging Ayam Dada',
            'harga'=> '30000',
            'berat'=> '1',
            'kategori_id'=> '3',
            'gambar'=> 'dagingayamdada.png',
        ]);

        DB::table('products')->insert([
            'nama'=> 'Telur Ayam Kampung',
            'harga'=> '20000',
            'berat'=> '1',
            'kategori_id'=> '4',
            'gambar'=> 'telurayamkampung.png',
        ]);

        DB::table('products')->insert([
            'nama'=> 'Telur Ayam Negeri',
            'harga'=> '22000',
            'berat'=> '1',
            'kategori_id'=> '4',
            'gambar'=> 'telurayamnegeri.png',
        ]);

        DB::table('products')->insert([
            'nama'=> 'Telur bebek',
            'harga'=> '25000',
            'berat'=> '1',
            'kategori_id'=> '5',
            'gambar'=> 'telurbebek.png',
        ]);

        DB::table('products')->insert([
            'nama'=> 'Telur asin',
            'harga'=> '40000',
            'berat'=> '1',
            'kategori_id'=> '5',
            'gambar'=> 'telurasin.png',
        ]);

        DB::table('products')->insert([
            'nama'=> 'Whole Milk',
            'harga'=> '25000',
            'berat'=> '1',
            'kategori_id'=> '6',
            'gambar'=> 'wholemilk.png',
        ]);

        DB::table('products')->insert([
            'nama'=> 'Low-fat Milk',
            'harga'=> '30000',
            'berat'=> '1',
            'kategori_id'=> '6',
            'gambar'=> 'lowfatmilk.png',
        ]);
    }
}
