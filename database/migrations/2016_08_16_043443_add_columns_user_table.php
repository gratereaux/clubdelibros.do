<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnsUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create(config('books.tables.core.usersdetails'), function (Blueprint $table) {
            $table->increments('id');
            $table->integer('third_id')->unsigned();
            $table->string('cedula');
            $table->integer('country_id');
            $table->string('city');
            $table->string('province');
            $table->string('sector');
            $table->string('address');
            $table->string('instagram');
            $table->string('twitter');
            $table->string('facebook');
            $table->string('image');
            $table->timestamps();

            //Foreign Key's
            $table->foreign('third_id')->references('id')->on(config('books.tables.core.third'))->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop(config('books.tables.core.usersdetails'));
    }
}
