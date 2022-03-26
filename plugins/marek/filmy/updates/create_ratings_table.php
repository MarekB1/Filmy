<?php namespace Marek\Filmy\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreateRatingsTable extends Migration
{
    public function up()
    {
        Schema::create('marek_filmy_ratings', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('rating');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('marek_filmy_ratings');
    }
}
