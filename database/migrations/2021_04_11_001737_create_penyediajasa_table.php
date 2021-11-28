<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePenyediajasaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penyediajasa', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('profesi_id')->nullable();
            $table->string('nama_lengkap');
            $table->text('alamat');
            $table->char('nomor_telepon');
            $table->char('file');
            $table->string('keterangan');
            $table->timestamps();

            $table->foreign('profesi_id')
            ->references('id')
            ->on('profesi')
            ->onDelete('cascade')
            ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('penyediajasa');
  
    }
}
