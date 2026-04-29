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
         Schema::create('blog_generations', function (Blueprint $table) {
            $table->id();

            $table->foreignId('user_id')
                ->constrained()
                ->onDelete('cascade');
                $table->string('topic');
                $table->text('keywords');
                $table->string('tone');
                $table->string('audience');
                $table->longText('generated_titles')->nullable();
                $table->text('meta_description')->nullable();
                $table->string('status')->default('completed');
                $table->integer('tokens_used')
                    ->nullable();
                $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blog_generations');
    }
};
