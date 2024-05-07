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
        Schema::create('carros', function (Blueprint $table) {
            $table->id();
            $table->string('modelo',150)->nullable(false);
            $table->string('ano',10)->nullable(false);
            $table->string('marca',150)->nullable(false);
            $table->string('cor',150)->nullable(false);
            $table->string('peso',150)->nullable(false);
            $table->string('potencia',150)->nullable(false);
            $table->string('descricao',1050)->nullable(false);
            $table->decimal('preco')->nullable(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('carros');
    }
};
