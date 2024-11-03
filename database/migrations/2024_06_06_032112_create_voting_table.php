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
        Schema::create('voting', function (Blueprint $table) {
            $table->id();
            $table->foreignId('voter_id')->costrained('users');
            $table->foreignId('president_id')->costrained('leader');
            $table->foreignId('vice_president_id')->costrained('leader');
            $table->foreignId('project_manager_id')->costrained('leader');
            $table->foreignId('assistant_project_manager_id')->costrained('leader');
            $table->foreignId('secretary_id')->costrained('leader');
            $table->foreignId('sport_leader_id')->costrained('leader');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('voting');
    }
};
