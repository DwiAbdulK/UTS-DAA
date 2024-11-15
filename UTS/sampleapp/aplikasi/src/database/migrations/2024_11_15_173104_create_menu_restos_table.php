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
        Schema::create('menu_restos', function (Blueprint $table) {
            $table->id();
            $table->string('Menu');
            $table->string('Kategori');
            $table->string('Keterangan');
            $table->decimal('Harga', 15, 2);
            $table->string('Ketersediaan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('menu_restos');
    }
};
