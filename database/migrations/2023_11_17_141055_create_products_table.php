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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->foreignId('seller_id');
            $table->foreignId('category_id');
            $table->string('productName');
            $table->string('slug')->unique();
            $table->double('price', 12, 2);
            $table->string('image')->default('noImage.png');
            $table->text('description')->default('');
            $table->text('notes')->default('');
            $table->integer('quantity');
            $table->float('rating')->default(0);
            $table->timestamp('published_at')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
