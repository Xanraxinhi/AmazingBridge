<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRelationship extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('bridges', function (Blueprint $table) {
            $table->foreign('country_id')->references('id')->on('countries');
        });

        Schema::table('photos', function (Blueprint $table) {
            $table->unsignedBigInteger('bridge_id')->nullable()->index();
            $table->foreign('bridge_id')->references('id')->on('bridges')->onDelete('cascade');
        });

        Schema::table('parameters', function (Blueprint $table) {
            $table->unsignedBigInteger('bridge_id')->nullable()->index();
            $table->foreign('bridge_id')->references('id')->on('bridges')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('bridges', function (Blueprint $table) {
            $table->dropForeign('country_id');
            $table->dropColumn('country_id');
        });

        Schema::table('parameters', function (Blueprint $table) {
            $table->dropForeign('bridge_id');
            $table->dropColumn('bridge_id');
        });

        Schema::table('photos', function (Blueprint $table) {
            $table->dropForeign('bridge_id');
            $table->dropColumn('bridge_id');
        });
    }
}
