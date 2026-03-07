<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['barang_id' => 1, 'barang_kode' => 'B001', 'barang_nama' => 'Bakso', 'harga_beli' => 8000, 'harga_jual' => 10000, 'kategori_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['barang_id' => 2, 'barang_kode' => 'B002', 'barang_nama' => 'Nasi Goreng', 'harga_beli' => 12000, 'harga_jual' => 15000, 'kategori_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['barang_id' => 3, 'barang_kode' => 'B003', 'barang_nama' => 'Es Teh', 'harga_beli' => 3000, 'harga_jual' => 5000, 'kategori_id' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['barang_id' => 4, 'barang_kode' => 'B004', 'barang_nama' => 'Es Jeruk', 'harga_beli' => 3500, 'harga_jual' => 5000, 'kategori_id' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['barang_id' => 5, 'barang_kode' => 'B005', 'barang_nama' => 'Laptop', 'harga_beli' => 4500000, 'harga_jual' => 5000000, 'kategori_id' => 3, 'created_at' => now(), 'updated_at' => now()],
            ['barang_id' => 6, 'barang_kode' => 'B006', 'barang_nama' => 'Handphone', 'harga_beli' => 1700000, 'harga_jual' => 2000000, 'kategori_id' => 3, 'created_at' => now(), 'updated_at' => now()],
            ['barang_id' => 7, 'barang_kode' => 'B007', 'barang_nama' => 'Parfum', 'harga_beli' => 35000, 'harga_jual' => 50000, 'kategori_id' => 4, 'created_at' => now(), 'updated_at' => now()],
            ['barang_id' => 8, 'barang_kode' => 'B008', 'barang_nama' => 'Body Lotion', 'harga_beli' => 15000, 'harga_jual' => 20000, 'kategori_id' => 4, 'created_at' => now(), 'updated_at' => now()],
            ['barang_id' => 9, 'barang_kode' => 'B009', 'barang_nama' => 'Pel', 'harga_beli' => 20000, 'harga_jual' => 30000, 'kategori_id' => 5, 'created_at' => now(), 'updated_at' => now()],
            ['barang_id' => 10, 'barang_kode' => 'B010', 'barang_nama' => 'Ember', 'harga_beli' => 10000, 'harga_jual' => 15000, 'kategori_id' => 5, 'created_at' => now(), 'updated_at' => now()],
            ['barang_id' => 11, 'barang_kode' => 'B011', 'barang_nama' => 'Soto', 'harga_beli' => 8000, 'harga_jual' => 10000, 'kategori_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['barang_id' => 12, 'barang_kode' => 'B012', 'barang_nama' => 'Soda Gembira', 'harga_beli' => 15000, 'harga_jual' => 20000, 'kategori_id' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['barang_id' => 13, 'barang_kode' => 'B013', 'barang_nama' => 'Mouse', 'harga_beli' => 70000, 'harga_jual' => 100000, 'kategori_id' => 3, 'created_at' => now(), 'updated_at' => now()],
            ['barang_id' => 14, 'barang_kode' => 'B014', 'barang_nama' => 'Sunscreen', 'harga_beli' => 20000, 'harga_jual' => 30000, 'kategori_id' => 4, 'created_at' => now(), 'updated_at' => now()],
            ['barang_id' => 15, 'barang_kode' => 'B015', 'barang_nama' => 'Sapu', 'harga_beli' => 18000, 'harga_jual' => 25000, 'kategori_id' => 5, 'created_at' => now(), 'updated_at' => now()],
        ];
        DB::table('m_barang')->insert($data);
    }
}
