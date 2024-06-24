<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('faculty', function (Blueprint $table) {
            $table->string('name');
            $table->text('address');
            $table->string('mobile');
           
            $table->string('email')->primary();
            $table->date('dob');
            $table->string('birthplace');
            $table->string('category');
            $table->string('gender');
            $table->string('nationality');
            $table->string('course');
            $table->string('password');
            $table->integer('otp');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('faculty');
    }
};
