<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateParametersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parameters', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->float('length')->nullable();
            $table->float('width')->nullable();
            $table->float('hight')->nullable();
            $table->integer('pier')->nullable();
            $table->string('type')->nullable();
            $table->integer('builded')->nullable();
            $table->tinyInteger('beautiful')->default(0);
            $table->tinyInteger('strange')->default(0);
            $table->tinyInteger('famous')->default(0);
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
        Schema::dropIfExists('parameters');
    }
}
