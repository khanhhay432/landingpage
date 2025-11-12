<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('posts', function (Blueprint $table){
            $table->id('post_id');
            $table->foreignId('category_id')->nullable()->constrained('categories','category_id')->nullOnDelete();
            $table->foreignId('user_id')->nullable()->constrained('users','user_id')->nullOnDelete();
            $table->string('title',200);
            $table->string('slug',200)->unique();
            $table->longText('content')->nullable();
            $table->string('thumbnail',255)->nullable();
            $table->integer('views')->default(0);
            $table->enum('status',['published','draft'])->default('published');
            $table->timestamps();
        });
    }
    public function down(){ Schema::dropIfExists('posts'); }
};
