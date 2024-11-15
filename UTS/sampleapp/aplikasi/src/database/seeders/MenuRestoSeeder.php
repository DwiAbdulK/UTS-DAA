<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\MenuResto;

class MenuRestoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data =[
            ['Menu'=> 'Mie', 'Kategori'=>'Makanan', 'Keterangan' => 'Mie Goreng', 'Harga'=> 10000, 'Ketersediaan' => 'Habis'],
            ['Menu'=> 'Mie', 'Kategori'=>'Makanan', 'Keterangan' => 'Mie Kuah', 'Harga'=> 9000, 'Ketersediaan' => 'Ada'],
            ['Menu'=> 'Es', 'Kategori'=>'Minuman', 'Keterangan' => 'Es Teh', 'Harga'=> 5000, 'Ketersediaan' => 'Ada'],
            ['Menu'=> 'Kopi', 'Kategori'=>'Minuman', 'Keterangan' => 'Kopi Hitam', 'Harga'=> 7000, 'Ketersediaan' => 'Ada'],
            ['Menu'=> 'Susu', 'Kategori'=>'Minuman', 'Keterangan' => 'Susu Jahe', 'Harga'=> 6000, 'Ketersediaan' => 'Habis']
        ];


        foreach ($data as $dataresto) {
            MenuResto::firstOrCreate($dataresto);
        }
    }
}