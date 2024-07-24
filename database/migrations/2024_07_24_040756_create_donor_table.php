<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDonorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('donor', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name')->nullable()->default("Dhiraj");
            $table->integer('price')->nullable()->default("0");
            $table->tinyinteger('status')->default("0");
            $table->string('Address')->nullable()->default("Birgunj");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('donor');
    }
}
