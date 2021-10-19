<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customer', function (Blueprint $table) {
            $table->increments('id', 20)->primary;
            $table->string('nama_customer', 100);
            $table->string('posisi_pekerjaan', 100);
            $table->string('perusahaan', 100);
            $table->string('alamat', 100);
            $table->string('phone', 100);
            $table->string('email', 100);
            $table->string('produk_name', 100);
            $table->text('message');
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
        Schema::dropIfExists('customer');
    }
}
