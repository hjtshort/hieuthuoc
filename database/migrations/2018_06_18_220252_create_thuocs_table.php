<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateThuocsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('thuocs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('tenthuoc');
            $table->unsignedInteger('soluong');
            $table->double('giasi');
            $table->double('giale');
            $table->unsignedInteger('soke');
            $table->date('ngayhethan');
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
        Schema::dropIfExists('thuocs');
    }
}
