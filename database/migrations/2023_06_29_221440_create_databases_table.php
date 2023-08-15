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
        Schema::create('databases', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->boolean('estado')->default(false);
            $table->ipAddress('servidor');
            $table->enum('gestor', ['PostgreSql', 'MySql', 'mariaDb', 'SqlServer', 'SqlInformix']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('databases');
    }
};
