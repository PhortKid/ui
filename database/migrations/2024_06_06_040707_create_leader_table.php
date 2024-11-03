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
        Schema::create('leader', function (Blueprint $table) {
            $table->id();
            $table->string('fullname');
            $table->enum('level',['cit','dit_1','dit_2']);
            $table->enum('category',['president','vice_president','project_manager','assistant_project_manager','secretary','sports','accountant']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('leader');
    }
};
