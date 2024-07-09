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
        Schema::create('tbl_item', function (Blueprint $table) {
            $table->id();
            $table->string('name'); 
            $table->string('serial_number'); 
            $table->enum('condition', ['new', 'used', 'damaged']); 
            $table->string('item_type'); 
            $table->string('inventory_code')->nullable(); 
            $table->date('acquisition_date')->nullable(); 
            $table->unsignedBigInteger('category_id'); 
            $table->timestamps(); 

            $table->foreign('category_id')->references('id')->on('tbl_categoria')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_item');
    }
};
