<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('service_reviews', function (Blueprint $table){
            $table->id('review_id');
            $table->foreignId('service_id')->constrained('services','service_id')->cascadeOnDelete();
            $table->string('name',100)->nullable();
            $table->tinyInteger('rating')->unsigned()->default(5);
            $table->text('comment')->nullable();
            $table->timestamp('created_at')->useCurrent();
        });
    }
    public function down(){ Schema::dropIfExists('service_reviews'); }
};
