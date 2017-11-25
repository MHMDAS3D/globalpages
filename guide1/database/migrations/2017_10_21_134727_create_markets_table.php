<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMarketsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('markets', function (Blueprint $table) {
            $table->increments('id');
            $table->text('img_link')->nullable();
            $table->text('cover_img')->nullable();
            $table->string('name')->nullable();
            $table->text('desc')->nullable();
            $table->text('address')->nullable();
            $table->text('phone')->nullable();
            $table->text('phone2')->nullable();
            $table->text('phone3')->nullable();
            $table->text('website')->nullable();
            $table->text('email')->nullable();
            $table->text('FB')->nullable();
            $table->text('twitter')->nullable();
            $table->text('youtube')->nullable();
            $table->text('skype')->nullable();
            $table->text('instagram')->nullable();
            $table->text('lat')->nullable();
            $table->text('lang')->nullable();
            $table->integer('category_id');


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
        Schema::dropIfExists('markets');
    }
}
