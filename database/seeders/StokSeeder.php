<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StokSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['stok_id' => '1', 'barang_id' => '1', 'stok_jumlah' => '10', 'stok_tanggal' => now(), 'user_id' => '1', 'supplier_id' => '1'],
            ['stok_id' => '2', 'barang_id' => '2', 'stok_jumlah' => '10', 'stok_tanggal' => now(), 'user_id' => '1', 'supplier_id' => '2'],
            ['stok_id' => '3', 'barang_id' => '3', 'stok_jumlah' => '10', 'stok_tanggal' => now(), 'user_id' => '1', 'supplier_id' => '3'],
            ['stok_id' => '4', 'barang_id' => '4', 'stok_jumlah' => '10', 'stok_tanggal' => now(), 'user_id' => '1', 'supplier_id' => '1'],
            ['stok_id' => '5', 'barang_id' => '5', 'stok_jumlah' => '10', 'stok_tanggal' => now(), 'user_id' => '1', 'supplier_id' => '2'],
            ['stok_id' => '6', 'barang_id' => '6', 'stok_jumlah' => '10', 'stok_tanggal' => now(), 'user_id' => '2', 'supplier_id' => '3'],
            ['stok_id' => '7', 'barang_id' => '7', 'stok_jumlah' => '10', 'stok_tanggal' => now(), 'user_id' => '2', 'supplier_id' => '2'],
            ['stok_id' => '8', 'barang_id' => '8', 'stok_jumlah' => '10', 'stok_tanggal' => now(), 'user_id' => '2', 'supplier_id' => '3'],
            ['stok_id' => '9', 'barang_id' => '9', 'stok_jumlah' => '10', 'stok_tanggal' => now(), 'user_id' => '2', 'supplier_id' => '1'],
            ['stok_id' => '10', 'barang_id' => '10', 'stok_jumlah' => '10', 'stok_tanggal' => now(), 'user_id' => '2', 'supplier_id' => '3'],
            ['stok_id' => '11', 'barang_id' => '11', 'stok_jumlah' => '10', 'stok_tanggal' => now(), 'user_id' => '3', 'supplier_id' => '2'],
            ['stok_id' => '12', 'barang_id' => '12', 'stok_jumlah' => '10', 'stok_tanggal' => now(), 'user_id' => '3', 'supplier_id' => '1'],
            ['stok_id' => '13', 'barang_id' => '13', 'stok_jumlah' => '10', 'stok_tanggal' => now(), 'user_id' => '3', 'supplier_id' => '2'],
            ['stok_id' => '14', 'barang_id' => '14', 'stok_jumlah' => '10', 'stok_tanggal' => now(), 'user_id' => '3', 'supplier_id' => '1'],
            ['stok_id' => '15', 'barang_id' => '15', 'stok_jumlah' => '10', 'stok_tanggal' => now(), 'user_id' => '3', 'supplier_id' => '3']
        ];
        DB::table('t_stok')->insert($data);
    }
}
