<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTowersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('towers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->unique();
            $table->decimal('long1', 10, 7);
            $table->decimal('lat1', 10, 7);
            $table->decimal('long2', 10, 7);
            $table->decimal('lat2', 10, 7);
            $table->decimal('long3', 10, 7);
            $table->decimal('lat3', 10, 7);
            $table->decimal('long4', 10, 7);
            $table->decimal('lat4', 10, 7);
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
         Schema::dropIfExists('towers');
    }
}
