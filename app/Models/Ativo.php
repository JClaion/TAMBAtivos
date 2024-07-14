<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ativo extends Model
{
    use HasFactory;

    protected $fillable = [

        'name_asset',
        'type',
        'serial_number',
        'description',
        'validity',
        'condition',
        'tb_item_id_fk',
        'tb_local_id_fk'
        
    ];

    
    // $name_asset = $request->name_asset;
    //     $type = $request->type;
    //     $serial_number = $request->serial_number;
    //     $description = $request->description;
    //     $validity = $request->validity;
    //     $condition = $request->condition;
    //     $tb_item_id_fk = $request->tb_item_id_fk;
    //     $tb_local_id_fk = $request->tb_local_id_fk;
    
    // $validatedData = $request->validate([
    //     'name' => 'required|string|max:255',
    //     'description' => 'required|string',
    //     'empresa_id' => 'required|exists:empresas,id', // Verifica se o empresa_id existe na tabela empresas
    // ]);


    public function local()
    {
        return $this->belongsTo(Localizacao::class, 'tb_local_id_fk');
    }
    public function item(){
        return $this->belongsTo(Item::class, 'tb_item_id_fk');
    }
}
