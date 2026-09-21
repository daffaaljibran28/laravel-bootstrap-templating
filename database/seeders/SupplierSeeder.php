<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SupplierSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('suppliers')->insert([
            [
                'name' => 'PT Indofood Sukses Makmur Tbk',
                'phone' => '0 800 1122 888',
                'address' => 'Jakarta, Indonesia',
            ],
            [
                'name' => 'PT Mayora Indah Tbk',
                'phone' => '+62 (21) 806 377 04',
                'address' => 'Gedung Mayora, Jl. Tomang Raya Kav 21–23, Jakarta Barat',
            ],
            [
                'name' => 'PT Unilever Indonesia Tbk',
                'phone' => '+62 21 8082 7000',
                'address' => 'Grha Unilever, Green Office Park Kav. 3, Jl. BSD Boulevard Barat, BSD City, Tangerang 15345, Indonesia',
            ],
        ]);
    }
}