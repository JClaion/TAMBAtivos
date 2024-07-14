<?php

namespace Database\Seeders;

use App\Models\Localizacao;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LocalizacaoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        Localizacao::insert([

            [
                'floor' => 'Piso 1',
                'room' => 'Sala A',
                'tb_blocksector_idtb_blocksector' => 1,
            
            ],[
                'floor' => 'Piso 1',
                'room' => 'Sala B',
                'tb_blocksector_idtb_blocksector' => 1,
            
            ],

            [
                'floor' => 'Piso 2',
                'room' => 'Sala C',
                'tb_blocksector_idtb_blocksector' => 2,
            
            ],
            [
                'floor' => 'Piso 3',
                'room' => 'Sala D',
                'tb_blocksector_idtb_blocksector' => 3,
            
            ],
            
            
        ]);
    }
}
