<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Localizacao extends Model
{
    use HasFactory;

    public function blockSector()
    {
        return $this->belongsTo(BlocoSetor::class, 'tb_blocksector_idtb_blocksector');
    }
}
