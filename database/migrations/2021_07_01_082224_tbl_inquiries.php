<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TblInquiries extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_inquiries', function (Blueprint $table) {
            $table->increments('id_inquiries', 20)->primary();
            $table->string('nama_inq', 30);
            $table->string('position_inq', 30);
            $table->string('company_inq', 30);
            $table->string('adress_inq', 30);
            $table->string('phone_inq', 30);
            $table->string('email_inq', 30);
            $table->string('id_kategori', 20);

            $table->index('id_kategori')
                ->references('id_kategori')
                ->on('tbl_kategori')
                ->onUpdate('cascade');

            $table->string('product_inq', 30);
            $table->string('message_inq', 200);
            $table->datetime('tanggal_masuk')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_inquiries');
    }
}
