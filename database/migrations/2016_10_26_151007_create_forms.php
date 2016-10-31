<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateForms extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cms_forms', function (Blueprint $table) {
            $table->increments('id');
			$table->unsignedInteger('pagina_id');
            $table->foreign('pagina_id')
              ->references('id')->on('cms_paginas')
              ->onDelete('no action');
            $table->string('titulo', 255)->nullable();
            $table->string('classe', 255)->nullable();
            $table->string('origem', 255);
            $table->string('tipo', 45);
            $table->integer('ordem');
            $table->string('ativo', 45);
            $table->string('lixeira', 45)->nullable();
            $table->unsignedInteger('agent_id')->nullable();
            $table->foreign('agent_id')
              ->references('id')->on('cms_users')
              ->onDelete('no action')->nullable();
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
        //
    }
}
