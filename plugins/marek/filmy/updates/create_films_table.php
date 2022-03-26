<?php namespace Marek\Filmy\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreateFilmsTable extends Migration
{
    public function up()
    {
        Schema::create('marek_filmy_films', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name');
            $table->string('genre');
            $table->string('director');
            $table->integer('release');
            $table->integer('rating');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('marek_filmy_films');
    }
}
