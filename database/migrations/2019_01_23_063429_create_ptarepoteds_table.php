<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePtarepotedsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ptarepoteds', function (Blueprint $table) {
            $table->increments('id');
            
            $table->integer('admin_id')->nullable(true);
            $table->integer('retailer_id');
            $table->integer('pta_id');
            $table->integer('mobile_id');
            $table->integer('status')->default(false);
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
        Schema::dropIfExists('ptarepoteds');
    }
}
