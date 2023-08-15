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
        Schema::create('informacions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->string('link');
            $table->enum('estado', ['produccion', 'preproduccion', 'desarrollo', 'proyecto'])->default('produccion');
            $table->enum('lenguaje', ['Php', 'Java', '4Gl', '.NET', 'VB.NET', 'Back & Front']);
            $table->enum('db', ['PostgreSql', 'MySql', 'mariaDb', 'SqlServer', 'SqlInformix']);
            $table->ipAddress('servidor');
            $table->string('version');
            $table->date('fecha_instalacion');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('informacions');
    }
};
