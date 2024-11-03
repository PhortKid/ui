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
        Schema::table('users', function (Blueprint $table) {
           
            $table->string('fistname');
            $table->string('middlename');
            $table->string('lastname');
            $table->string('regno')->unique();
            $table->string('email')->unique();
            $table->string('phonenumber');
            $table->enum('role',['admin','accountant','member']);
            $table->timestamp('email_verified_at')->nullable();
            $table->enum('program',['CIT','DIT','DIT2']);
            $table->enum('gender',['male','female']);
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            //
        });
    }
};
