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
        Schema::create('student', function (Blueprint $table) {
            //$table->id('student_id');
            $table->string('name');
            $table->text('address');
            $table->string('student_mobile');
            $table->string('parent_mobile');
            $table->string('email')->primary();
            $table->date('dob');
            $table->string('birthplace');
            $table->string('category');
            $table->string('gender');
            $table->string('nationality');
            $table->string('college');
            $table->string('course');
            $table->float('cgpa');
            $table->integer('otp');

            $table->string('password');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('student');
    }
};
