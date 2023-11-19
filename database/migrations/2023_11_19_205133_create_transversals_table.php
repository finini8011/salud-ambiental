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
        Schema::create('transversals', function (Blueprint $table) {
            $table->id();
            $table->string('titulo')->nullable();
            $table->string('link_interno')->unique();
            $table->string('logo_boton')->nullable();
            $table->string('logo_titulo')->nullable();
            $table->string('banner')->nullable();
            $table->string('link_banner')->nullable();
            $table->string('cuerpo', 5000)->nullable();
            $table->boolean('activo');
            $table->unsignedBigInteger('menu_id');
            $table->foreign('menu_id')->references('id')->on('menus')
                ->onDelete('cascade')
                ->onUpdate('cascade');
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
        Schema::dropIfExists('transversals');
    }
};
