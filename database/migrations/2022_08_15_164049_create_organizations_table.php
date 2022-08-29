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
        Schema::create('organizations', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('address',600)->nullable();
            $table->string('company_name')->nullable();
            $table->string('trading_address')->nullable();
            $table->string('company_number')->nullable();
            $table->string('authority_of_registration_number')->nullable();
            $table->string('country_of_incorporation')->nullable();
            $table->date('date_of_incorporation')->nullable();
            $table->string('vat_registration_number')->nullable();
            $table->string('LEI_DUNS_number')->nullable();
            $table->bigInteger('company_status_id')->unsigned()->nullable();
            $table->string('company_status_id_other')->nullable();
            $table->string('stock_exchange')->nullable();
            $table->bigInteger('nature_of_the_business_id')->unsigned()->nullable();
            $table->string('nature_of_the_business_id_other')->nullable();
            $table->string('financial_regulatory_authorities')->nullable();
            $table->string('beneficiary_name')->nullable();
            $table->string('beneficiary_iban')->nullable();
            $table->string('bank_name')->nullable();
            $table->string('bank_account_number')->nullable();
            $table->string('bank_address',600)->nullable();
            $table->string('bank_swift_code')->nullable();
            $table->string('currency_of_account')->nullable();
            $table->foreignId('owner_id')
                ->nullable()
                ->references('id')
                ->on('users')
                ->onDelete('SET NULL');
            $table->foreignId('status_id')
                ->nullable()
                ->references('id')
                ->on('options')
                ->onDelete('SET NULL');

            $table->smallInteger('vat_certificate_file_id')
                ->nullable();

            $table->smallInteger('trade_license_file_id')
                ->nullable();

            $table->string('country_code')->nullable();
            $table->string('uuid')->nullable();
             
            $table->timestamps();

            $table->foreign('company_status_id')->references('id')->on('options');
		    $table->foreign('nature_of_the_business_id')->references('id')->on('options');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('organizations');
    }
};
