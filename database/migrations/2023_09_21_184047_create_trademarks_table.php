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
        Schema::create('trademarks', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->string("name", 200)->comment("Имя торговой марки");
            $table->string("slug", 200)->comment("Slug торговой марки");
            $table->string("img", 300)->comment("Логотип торговой марки");

            $table->text('description')->comment('Описание');

            $table->string('title_seo', 100)->comment('SEO заголовок');
            $table->string('description_seo', 300)->comment('SEO описание');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trademarks');
    }
};
