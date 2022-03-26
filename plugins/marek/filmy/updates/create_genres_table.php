<?php namespace Marek\Filmy\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreateGenresTable extends Migration
{
    public function up()
    {
        Schema::create('marek_filmy_genres', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('genre');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('marek_filmy_genres');
    }
}
