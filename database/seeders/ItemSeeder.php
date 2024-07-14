<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Item;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        

        Item::insert([
            
            ['name' => 'PC da Xuxa',
            'serial_number' => '123444555666-BENGAS',
            'condition' => 'used',
            'item_type' => 'eletronico',
            'inventory_code' => '6969696969696969',
            'acquisition_date' => '2024-12-02',
            'category_id' => 1,
    
            ],
            ['name' => 'Mesa de madeira',
            'serial_number' => '32432432424-BENGAS',
            'condition' => 'used',
            'item_type' => 'movel',
            'inventory_code' => '9383882822212133',
            'acquisition_date' => '2022-12-22',
            'category_id' => 3,
    
            ],
            ['name' => 'Cabo Azul',
            'serial_number' => '655447672223-BENGAS',
            'condition' => 'new',
            'item_type' => 'cabo',
            'inventory_code' => '9929228328382382',
            'acquisition_date' => '2024-06-12',
            'category_id' => 2,
    
            ],       
        ]);



        


    }


}

// id	bigint UN AI PK
// 	name	varchar(255)
// 	serial_number	varchar(255)
// 	condition	enum('new','used','damaged')
// 	item_type	varchar(255)
// 	inventory_code	varchar(255)
// 	acquisition_date	date
// 	category_id	bigint UN