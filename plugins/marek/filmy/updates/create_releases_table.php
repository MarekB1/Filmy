<?php namespace Marek\Filmy\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreateReleasesTable extends Migration
{
    public function up()
    {
        Schema::create('marek_filmy_releases', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('release');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('marek_filmy_releases');
    }
}
