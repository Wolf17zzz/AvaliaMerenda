<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    
    public function up(): void
    {
        Schema::create('escolas', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->string('endereco');
            $table->string('telefone', 14);
            $table->string('email');
         
            $table->timestamps();
        });
    }


    public function down(): void
    {
        Schema::dropIfExists('escolas');
    }
};