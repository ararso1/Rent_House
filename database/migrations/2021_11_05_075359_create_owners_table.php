<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOwnersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('owners', function (Blueprint $table) {
            $table->id();
            $table->string('state');
            $table->string('zone');
            $table->string('district');
            $table->string('city');
            $table->string('sub_city');
            $table->string('contact');
            $table->string('property_type');
            $table->string('house_no')->unique();
            $table->string('price');
            $table->string('rooms');
            $table->string('bed_rooms');
            $table->string('kitchen');
            $table->string('bathrooms');
            $table->string('description');
            $table->string('photo')->nullable();
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
        Schema::dropIfExists('owners');
    }
}
