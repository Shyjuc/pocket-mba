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
            $table->string('uuid')->nullable()->index();
            $table->string('title');
            $table->text('description');
            $table->string('demurrage');
            $table->integer('payment_option_id')->nullable();
            $table->bigInteger('organization_id')->unsigned()->nullable();
            $table->bigInteger('user_id')->unsigned()->nullable();
            $table->bigInteger('to_organization_id')->unsigned();
            $table->bigInteger('to_user_id')->unsigned();
            $table->bigInteger('stage_id')->unsigned();
            $table->bigInteger('status_id')->unsigned()->nullable();
            $table->date('expiry_date');
            $table->timestamps();
            
            $table->foreign('organization_id')->references('id')->on('organizations');
		    $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('to_organization_id')->references('id')->on('organizations');
		    $table->foreign('to_user_id')->references('id')->on('users');
		    $table->foreign('stage_id')->references('id')->on('options');
		    $table->foreign('status_id')->references('id')->on('options');
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
