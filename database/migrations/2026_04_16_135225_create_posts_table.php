<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations. // php artisan migrate
     */
    public function up(): void
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('title', 255);
            $table->string('tags', 255)->nullable();
            $table->unsignedBigInteger('author_id');
            $table->integer('estimation_read_minutes')->unsigned();
            $table->string('thumbnail_url', 255);
            $table->text('body');
            $table->timestamp('published_at')->nullable();

            $table->timestamps();

            $table->foreign('author_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations. // php artisan migrate:rollback
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
