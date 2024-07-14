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
        Schema::create('items', function (Blueprint $table) {
            $table->id();
            $table->string('name')->default('Nome item qualquer'); 
            $table->string('serial_number')->default('Numero serial item qualquer'); 
            $table->enum('condition', ['new', 'used', 'damaged']); 
            $table->string('item_type')->default('Tipo de item qualquer'); 
            $table->string('inventory_code')->nullable(); 
            $table->date('acquisition_date')->nullable(); 
            $table->unsignedBigInteger('category_id')->default(000000); 
            $table->timestamps(); 
            $table->foreign('category_id')->references('id')->on('categorias')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('items');
    }
};
