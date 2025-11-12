<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('categories', function (Blueprint $table){
            $table->id('category_id');
            $table->string('name',100);
            $table->string('slug',150)->unique()->nullable();
            $table->text('description')->nullable();
            $table->enum('type',['service','post'])->default('service');
            $table->timestamps();
        });
    }
    public function down(){ Schema::dropIfExists('categories'); }
};
