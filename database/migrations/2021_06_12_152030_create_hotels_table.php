<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHotelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hotels', function (Blueprint $table) {
            $table->id();
            $table->enum('size',['S', 'M' , 'L']);
            $table->date('start_date');
            $table->date('end_date');
            $table->integer('total_day');
            $table->enum('status', ['belum diproses', 'dalam kandang', 'selesai']);
            $table->enum('hotel_status', ['hotel', 'rawat inap']);
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
        Schema::dropIfExists('hotels');
    }
}
