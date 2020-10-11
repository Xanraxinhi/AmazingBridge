<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangeSomeProperties extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('photos', function (Blueprint $table) {
            $table->renameColumn('path', 'name');
        });

        Schema::table('parameters', function (Blueprint $table) {
            $table->renameColumn('hight', 'height');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('photos', function (Blueprint $table) {
            $table->renameColumn('name', 'path');
        });

        Schema::table('parameters', function (Blueprint $table) {
            $table->renameColumn('height', 'hight');
        });
    }
}
