<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('paginas_anexas', function (Blueprint $table) {
            $table->id();
            $table->string('link_interno')->unique();
            $table->string('componente1')->nullable();
            $table->string('componente2')->nullable();
            $table->string('componente3')->nullable();
            $table->string('componente4')->nullable();
            $table->string('componente5')->nullable();
            $table->string('componente6', 5000)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('paginas_anexas');
    }
};
