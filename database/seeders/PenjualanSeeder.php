<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenjualanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['penjualan_id' => '1', 'penjualan_kode' => 'P001', 'penjualan_tanggal' => '2023-03-03', 'pembeli' => 'Andi', 'user_id' => '1'],
            ['penjualan_id' => '2', 'penjualan_kode' => 'P002', 'penjualan_tanggal' => '2023-03-04', 'pembeli' => 'Budi', 'user_id' => '2'],
            ['penjualan_id' => '3', 'penjualan_kode' => 'P003', 'penjualan_tanggal' => '2023-03-05', 'pembeli' => 'Haidar', 'user_id' => '3'],
            ['penjualan_id' => '4', 'penjualan_kode' => 'P004', 'penjualan_tanggal' => '2023-03-06', 'pembeli' => 'Miu', 'user_id' => '1'],
            ['penjualan_id' => '5', 'penjualan_kode' => 'P005', 'penjualan_tanggal' => '2023-03-07', 'pembeli' => 'Shiva', 'user_id' => '2'],
            ['penjualan_id' => '6', 'penjualan_kode' => 'P006', 'penjualan_tanggal' => '2023-03-08', 'pembeli' => 'Arya', 'user_id' => '3'],
            ['penjualan_id' => '7', 'penjualan_kode' => 'P007', 'penjualan_tanggal' => '2023-03-09', 'pembeli' => 'Naufal', 'user_id' => '1'],
            ['penjualan_id' => '8', 'penjualan_kode' => 'P008', 'penjualan_tanggal' => '2023-03-10', 'pembeli' => 'Rumi', 'user_id' => '2'],
            ['penjualan_id' => '9', 'penjualan_kode' => 'P009', 'penjualan_tanggal' => '2023-03-11', 'pembeli' => 'Fattah', 'user_id' => '3'],
            ['penjualan_id' => '10', 'penjualan_kode' => 'P010', 'penjualan_tanggal' => '2023-03-12', 'pembeli' => 'Rui', 'user_id' => '1'],
        ];
        DB::table('t_penjualan')->insert($data);
    }
}
