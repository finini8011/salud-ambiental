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
        Schema::create('submenu2s', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('link_interno');
            $table->string('link_externo');
            $table->unsignedBigInteger('submenu_id');
            $table->foreign('submenu_id')->references('id')->on('submenus')
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
        Schema::dropIfExists('submenu2s');
    }
};
