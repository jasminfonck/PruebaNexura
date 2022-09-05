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
        Schema::create('empleados', function (Blueprint $table) {
            $table->integer('id')->autoIncrement()->nullable(false);
            $table->string('nombre')->nullable(false);
            $table->string('email')->unique()->nullable(false);
            $table->enum('sexo', ['F', 'M'])->nullable(false);
            $table->integer('area_id')->nullable(false);
            $table->boolean('boletin')->nullable(false);
            $table->text('descripcion')->nullable(false);
            $table->foreign('area_id')->references('id')->on('areas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('empleados');
    }
};
