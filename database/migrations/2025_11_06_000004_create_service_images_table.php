<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('service_images', function (Blueprint $table){
            $table->id('image_id');
            $table->foreignId('service_id')->constrained('services','service_id')->cascadeOnDelete();
            $table->string('image_url',255);
            $table->string('caption',255)->nullable();
        });
    }
    public function down(){ Schema::dropIfExists('service_images'); }
};
