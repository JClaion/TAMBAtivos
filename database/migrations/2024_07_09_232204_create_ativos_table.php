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
        Schema::create('ativos', function (Blueprint $table) {
            $table->id();
            $table->string('name_asset')->default('Nome do ativo qualquer')->unique();
            $table->string('type')->default('Valor ativo qualquer');
            $table->string('serial_number')->default('Numero serial do ativo qualquer')->unique();
            $table->string('description')->default('Descrição ativo qualquer');
            $table->date('validity')->default('2000-01-01');
            $table->string('condition')->default('Condição qualquer');
            $table->unsignedBigInteger('tb_item_id_fk')->default(000);
            $table->foreign('tb_item_id_fk')->references('id')->on('items')->onDelete('cascade');

            $table->unsignedBigInteger('tb_local_id_fk')->default(0000);
            $table->foreign('tb_local_id_fk')->references('id')->on('localizacaos')->onDelete('cascade');

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
        Schema::dropIfExists('ativos');
    }
};
