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
            $table->unsignedBigInteger('parameter_id')->nullable()->index();
            $table->foreign('parameter_id')->references('id')->on('parameters')->onDelete('cascade');

            $table->unsignedBigInteger('country_id')->nullable()->index();
            $table->foreign('country_id')->references('id')->on('countries');
        });

        Schema::table('photos', function (Blueprint $table) {
            $table->unsignedBigInteger('bridge_id')->nullable()->index();
            $table->foreign('bridge_id')->references('id')->on('bridges');
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
            $table->dropForeign(['parameter_id', 'country_id']);
            $table->dropColumn(['parameter_id', 'country_id']);
        });

        Schema::table('relationship', function (Blueprint $table) {
            $table->dropForeign('bridge_id');
            $table->dropColumn('bridge_id');
        });
    }
}
