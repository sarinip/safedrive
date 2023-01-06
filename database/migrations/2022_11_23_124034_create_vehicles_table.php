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
        Schema::create('vehicles', function (Blueprint $table) {
            $table->id();
//            $table->unsignedBigInteger('instructor_id')->nullable();
            $table->string('reg_no');
            $table->string('owner_name');
            $table->date('reg_date');
            $table->string('class');
            $table->string('model');
            $table->string('insurance_up_to');
            $table->timestamps();
//            $table->foreign('instructor_id')->references('id')->on('vehicles');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */

    public function down()
    {
        Schema::dropIfExists('vehicles');
    }
};
