<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubmodulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('submodules', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->notnull();
            $table->integer('icon_id')->notnull()->default(0);
            $table->integer('module_id')->notnull()->default(0);
            $table->integer('author')->notnull();
            $table->bool('optional')->notnull()->default(0);
            $table->datetime('deleted_at');
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
        Schema::drop('submodules');
    }
}
