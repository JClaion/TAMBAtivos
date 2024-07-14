<?php

namespace Database\Seeders;

use App\Models\BlocoSetor;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BlocoSetorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        BlocoSetor::insert([

            [
             'block_sector' => 'A',
             'quantity_assets' =>'10',
             'sub_equipment' => 'ABC'
            ],
            [
             'block_sector' => 'B',
             'quantity_assets' =>'5',
             'sub_equipment' => 'DEF'

            ],
            [
             'block_sector' => 'C',
             'quantity_assets' =>'8',
             'sub_equipment' => 'GHI'
            ]

        ]);
    }
}
