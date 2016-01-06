<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLicencesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('licences', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('role_id');
            $table->integer('app_id');
            $table->integer('submodule_id');
            $table->bool('create')->notnull()->default(1);
            $table->bool('update')->notnull()->default(1);
            $table->bool('delete')->notnull()->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('licences');
    }
}
