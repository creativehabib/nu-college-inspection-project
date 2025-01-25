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
        Schema::create('nu_colleges', function (Blueprint $table) {
            $table->id();
            $table->string('college_name');
            $table->string('college_code')->unique();
            $table->string('address')->nullable();
            $table->string('phone')->nullable();
            $table->string('college_email')->nullable();
            $table->string('website')->nullable();
            $table->string('type')->nullable();
            $table->string('established')->nullable();
            $table->string('area')->nullable();
            $table->text('about')->nullable();
            $table->string('logo')->nullable();
            $table->string('cover')->nullable();
            $table->boolean('status')->default(1)->comment('1=active, 0=inactive');
            $table->foreignId('division_id')->nullable()->constrained('divisions')->onDelete('cascade');
            $table->foreignId('district_id')->nullable()->constrained('districts')->onDelete('cascade');
            $table->foreignId('upazila_id')->nullable()->constrained('upazilas')->onDelete('cascade');
            $table->foreignId('union_id')->nullable()->constrained('unions')->onDelete('cascade');
            $table->foreignId('post_code_id')->nullable()->constrained('post_codes')->onDelete('cascade');
            $table->foreignId('subject_id')->nullable()->constrained('nu_subjects')->onDelete('cascade');
            $table->foreignId('course_id')->nullable()->constrained('nu_courses')->onDelete('cascade');
            $table->foreignId('program_id')->nullable()->constrained('nu_programs')->onDelete('cascade');
            $table->foreignId('user_id')->nullable()->constrained('users')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nu_colleges');
    }
};
