<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateVendorNamasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vendor_namas', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('nama_vendor')->nullable();
            $table->string('alamat')->nullable();
            $table->integer('no_telp')->nullable();
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('vendor_namas');
    }
}
