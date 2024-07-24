<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AlatIotSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('alat_iots')->insert([
            [
                'nama_alat' => 'Dji Agras T20P Standard Combo',
                'harga' => 600000,
                'gambar' => 'penyewaan-gambar2.jpg',
                'atribut' => 'Best Seller',
            ],
            [
                'nama_alat' => 'Dji Agras T20P Standard Combo',
                'harga' => 600000,
                'gambar' => 'penyewaan-gambar2.jpg',
                'atribut' => 'New Arrival',
            ],
            [
                'nama_alat' => 'Dji Agras T20P Standard Combo',
                'harga' => 600000,
                'gambar' => 'penyewaan-gambar2.jpg',
                'atribut' => 'Best Seller',
            ],
        ]);
    }
}
