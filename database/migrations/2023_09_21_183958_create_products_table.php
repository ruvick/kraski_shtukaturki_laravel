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
            $table->timestamps();
            $table->string('sku')->unique();
            $table->string('title');
            $table->string('slug');
            $table->string('img')->nullable();
            $table->text('description')->nullable();
            $table->double('price', 10, 2);
            $table->double('old_price', 10, 2)->default(0);
            $table->integer('sales_count')->default(0);

            $table->boolean("hit")->nullable();
            $table->boolean("new")->nullable();

            $table->json('advantages')->nullable();
            $table->json('props')->nullable();
            $table->string('volume', 20);
            $table->text('short_description')->nullable();
            $table->string('tm', 50)->nullable();
            $table->string('color_name', 500)->nullable();
            $table->string('color_img', 500)->nullable();
            $table->string('series', 200)->nullable();


            $table->string('seo_title')->nullable();
            $table->text('seo_description')->nullable();
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
