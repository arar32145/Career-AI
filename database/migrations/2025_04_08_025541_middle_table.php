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
        Schema::create("middleTable", function (Blueprint $table) {
            $table->id();
            $table->foreignId("riasec_id")->constrained("riasec");
            $table->foreignId("course_id")->constrained("courses");
            $table->foreignId("question_id")->constrained("questions");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists("middleTable");
    }
};
