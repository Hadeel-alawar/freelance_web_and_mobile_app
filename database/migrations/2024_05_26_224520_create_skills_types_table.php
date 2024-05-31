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
        Schema::create('skills_types', function (Blueprint $table) {
            $table->id();
            $table->foreignId("skill_id")->references("id")->on("skills")->onDelete("cascade");
            $table->foreignId("type_id")->references("id")->on("types")->onDelete("cascade");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('skills_types');
    }
};
