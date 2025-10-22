<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug')->unique();
            $table->text('shortDesc');
            $table->text('desc');
            $table->text('descOne')->nullable();
            $table->text('descTwo')->nullable();
            $table->text('descThree')->nullable();
            $table->text('factTitle')->nullable();
            $table->string('factOne')->nullable();
            $table->string('factTwo')->nullable();
            $table->string('factThree')->nullable();
            $table->string('factFour')->nullable();
            $table->string('thumbnail')->nullable();
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
        Schema::dropIfExists('services');
    }
}
