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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->date('birthDate');
            $table->string('username')->unique();
            $table->string('photo')->default("img/pp-default.png");
            $table->string('email')->unique();
            $table->string('phone_number')->unique();
            $table->string('gender');
            $table->string('street');
            $table->string('city');
            $table->string('state');
            $table->string('postal_code');
            $table->string('role')->default("user");
            $table->timestamp('email_verified_at')->nullable();
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
        Schema::dropIfExists('users');
    }
};
