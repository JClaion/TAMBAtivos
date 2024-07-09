<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('tbl_relatorio', function (Blueprint $table) {
            $table->id();
            $table->date("date");
            $table->unsignedBigInteger("tbl_asset_idtb_fk");
            $table->foreign('tbl_asset_idtb_fk')->references('id')->on('tbl_ativos')->onDelete('cascade');
            $table->unsignedBigInteger("tbl_user_idtb_fk");
            $table->foreign('tbl_user_idtb_fk')->references('id')->on('users')->onDelete('cascade');
            $table->timestamps();
        });
    }

    //tbl_Ativo_idtb_Ativo
    //tbl_Usuario_idtbl_usuario

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_relatorio');
    }
};
 