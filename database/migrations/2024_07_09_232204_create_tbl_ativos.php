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
        Schema::create('tbl_ativos', function (Blueprint $table) {
            $table->id();
            $table->string('name_asset')->unique();
            $table->string('type');
            $table->string('serial_number')->unique();
            $table->string('description');
            $table->date('validity');
            $table->string('condition');
            $table->unsignedBigInteger('tb_item_id_fk');
            $table->foreign('tb_item_id_fk')->references('id')->on('tbl_item')->onDelete('cascade');

            $table->unsignedBigInteger('tb_local_id_fk');
            $table->foreign('tb_local_id_fk')->references('id')->on('tbl_localizacao')->onDelete('cascade');

            $table->timestamps();

            /*

            Schema::create('users', function (Blueprint $table) {
                $table->id();
                $table->string('name');
                $table->string('email')->unique();
                $table->timestamp('email_verified_at')->nullable();
                $table->string('password');
                $table->string('cargo');
                $table->rememberToken();
                $table->timestamps();
            });

            */
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_ativos');
    }
};
