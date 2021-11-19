<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFieldToGroomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('grooms', function (Blueprint $table) {
            $table->enum('type', ['Kucing', 'Anjing']);
            $table->enum('status', ['belum diproses', 'diproses', 'selesai']);

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('grooms', function (Blueprint $table) {
            //
        });
    }
}
