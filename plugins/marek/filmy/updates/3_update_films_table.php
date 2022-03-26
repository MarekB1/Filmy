<?php namespace Marek\Filmy\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class UpdateFilmsTable1 extends Migration
{
    public function up()
    {
        Schema::table('marek_filmy_films', function (Blueprint $table) {
            $table->unsignedBigInteger('poster_id')->index();
        });
    }

    public function down()
    {
        Schema::table('marek_filmy_films', function (Blueprint $table) {
            $table->dropColumn('poster_id');
        });
    }
}
