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
        Schema::create('instructors', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->string('fname')->nullable();
            $table->string('lname')->nullable();
            $table->date('dob');
            $table->string('nic')->unique();
            $table->string('addressNo');
            $table->string('address1')->nullable();
            $table->string('address2')->nullable();
            $table->string('city');
            $table->string('postcode')->nullable();
            $table->string('telephone');
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('instructors');
    }
};
