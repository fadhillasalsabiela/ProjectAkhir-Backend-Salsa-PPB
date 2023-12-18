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
        Schema::create('gunungs', function (Blueprint $table) {
            $table->id();
            $table->string("nama_gunung");
            $table->unsignedBigInteger('id_kategori');
            $table->string("gambar")->nullable();
            $table->text("deskripsi");
            $table->string("imgmaps")->nullable();
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
        Schema::dropIfExists('gunungs');
    }
};
