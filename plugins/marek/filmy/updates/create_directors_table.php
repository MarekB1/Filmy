<?php namespace Marek\Filmy\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreateDirectorsTable extends Migration
{
    public function up()
    {
        Schema::create('marek_filmy_directors', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name');
            $table->string('last_name');
            $table->integer('year_of_birth');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('marek_filmy_directors');
    }
}
