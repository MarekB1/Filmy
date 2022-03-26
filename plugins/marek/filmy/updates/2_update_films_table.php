<?php namespace Marek\Filmy\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class UpdateFilmsTable1 extends Migration
{
    public function up()
    {
        Schema::table('marek_filmy_films', function (Blueprint $table) {
            $table->unsignedBigInteger('director_id')->index();
            $table->unsignedBigInteger('genres_id')->index();
            $table->unsignedBigInteger('rating_id')->index();
            $table->unsignedBigInteger('release_id')->index();
        });
    }

    public function down()
    {
        Schema::table('marek_filmy_films', function (Blueprint $table) {
            $table->dropColumn('director_id');
            $table->dropColumn('genres_id');
            $table->dropColumn('rating_id');
            $table->dropColumn('release_id');
        });
    }
}
