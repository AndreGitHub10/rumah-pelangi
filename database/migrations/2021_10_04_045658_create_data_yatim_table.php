<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataYatimTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_yatim', function (Blueprint $table) {
            $table->id();
            $table->string('nama_anak');
            $table->string('alamat');
            $table->string('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->string('no_hp')->nullable();
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
        Schema::dropIfExists('data_yatim');
    }
}
