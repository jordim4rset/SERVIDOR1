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

    /**
     * rellenamos los datos de la tabla
     */
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name', 50);
            $table->string('brand', 20)->nullable();
            $table->text('description', 15);
            $table->decimal('price', 5, 2);
            $table->integer('stock')->default(0);
            $table->boolean('disponibility')->nullable();
            $table->string('img');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
