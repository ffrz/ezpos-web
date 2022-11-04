<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = date('Y-m-d');
        DB::table('products')->insert([
            'name' => 'Produk 1',
            'uom' => 'bh',
            'description' => 'Tentang Produk 1',
            'created_at' => $now,
            'updated_at' => $now,
        ]);
        DB::table('products')->insert([
            'name' => 'Produk 2',
            'uom' => 'bh',
            'description' => 'Tentang Produk 2',
            'created_at' => $now,
            'updated_at' => $now,
        ]);
    }
}
