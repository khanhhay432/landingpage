<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('services', function (Blueprint $table){
            $table->id('service_id');
            $table->foreignId('category_id')->nullable()->constrained('categories','category_id')->nullOnDelete();
            $table->foreignId('user_id')->nullable()->constrained('users','user_id')->nullOnDelete();
            $table->string('title',200);
            $table->string('slug',200)->unique();
            $table->text('short_description')->nullable();
            $table->longText('content')->nullable();
            $table->decimal('price',10,2)->nullable();
            $table->string('location',255)->nullable();
            $table->string('phone_number',20)->nullable();
            $table->enum('status',['active','inactive'])->default('active');
            $table->string('thumbnail',255)->nullable();
            $table->timestamps();
        });
    }
    public function down(){ Schema::dropIfExists('services'); }
};
