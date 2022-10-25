<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proposals', function (Blueprint $table) {
            $table->id();
            $table->string('uuid')->nullable()->index();
            $table->string('title');
            $table->text('description');
            $table->string('demurrage');
            $table->integer('payment_option_id')->nullable();
            $table->integer('organization_id')->unsigned()->nullable();
            $table->integer('user_id')->unsigned()->nullable();
            $table->integer('to_organization_id')->unsigned()->index();
            $table->integer('to_user_id')->unsigned();
            $table->integer('stage_id')->unsigned();
            $table->integer('category_id')->unsigned()->index();
            $table->integer('status_id')->unsigned()->nullable();
            $table->smallInteger('deals_image_id')->nullable()->unsigned();
            $table->date('expiry_date')->nullable()->index();
            $table->timestamps();
            
            /*
            $table->foreign('organization_id')->references('id')->on('organizations');
		    $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('to_organization_id')->references('id')->on('organizations');
		    $table->foreign('to_user_id')->references('id')->on('users');
		    $table->foreign('stage_id')->references('id')->on('options');
		    $table->foreign('status_id')->references('id')->on('options');
            $table->foreign('category_id')->references('id')->on('categories');
            */
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('proposals');
    }
};
