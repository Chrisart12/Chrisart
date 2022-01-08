<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacts', function(Blueprint $table) {
        $table->increments('id');
        $table->string('nom', 30);
        $table->string('email', 100);
        $table->string('tel', 30)->nullable();
        $table->string('sujet', 100);
        $table->text('texte');
        $table->timesTamps();

        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('contacts');
    }
}
