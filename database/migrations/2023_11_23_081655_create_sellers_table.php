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
        Schema::create('sellers', function (Blueprint $table) {
            $table->id();
            $table->string('name', 46);
            $table->string('slug', 46)->unique();
            $table->text('bio')->default('');
            $table->string('images')->default('img/default-toko.png');
            $table->string('banner')->default('bannerDefault.png');
            $table->foreignId('seller_category')->default(1);
            $table->string('address');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('phone_number')->unique();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sellers');
    }
};
