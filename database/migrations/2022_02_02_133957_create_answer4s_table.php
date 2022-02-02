<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnswer4sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('answer4s', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->BigInteger('user_id')->index();
            $table->BigInteger('question_id')->index();
            $table->BigInteger('answer')->index();
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
        Schema::dropIfExists('answer4s');
    }
}
