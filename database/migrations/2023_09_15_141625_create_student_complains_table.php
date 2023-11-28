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
        Schema::create('student_complains', function (Blueprint $table) {
            $table->id();
            $table->string('lecturer_id')->nullable();
            $table->string('admin_id')->nullable();
            $table->string('student_id')->nullable();
            $table->string('title');
            $table->text('description');
            $table->text('image')->nullable();
            $table->tinyInteger('status')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('student_complains');
    }
};
