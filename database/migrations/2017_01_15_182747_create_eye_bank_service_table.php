<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEyeBankServiceTable extends Migration
{
    public function up()
    {
        Schema::create('eye_bank_service', function (Blueprint $table) {
            $table->increments('id');
            $table->string('eye_bank_service_title')->nullable();
            $table->string('b_eye_bank_service_title')->nullable();
            $table->longText('eye_bank_service_description')->nullable();
            $table->longText('b_eye_bank_service_description')->nullable();
            $table->Integer('eye_bank_id')->unsigned();
            $table->Integer('service_id')->unsigned();
            $table->Integer('subservice_id')->unsigned();
            $table->timestamps();
            $table->foreign('eye_bank_id')->references('id')->on('eye_bank')->onDelete('CASCADE')->onUpdate('CASCADE');
            $table->foreign('service_id')->references('id')->on('service')->onDelete('CASCADE')->onUpdate('CASCADE');
            $table->foreign('subservice_id')->references('id')->on('subservice')->onDelete('CASCADE')->onUpdate('CASCADE');
        });
    }

    
    public function down()
    {
       Schema::dropIfExists('eye_bank_service');
    }
}
