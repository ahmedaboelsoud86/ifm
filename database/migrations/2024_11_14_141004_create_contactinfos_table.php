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
        Schema::create('contactinfos', function (Blueprint $table) {
            $table->id();
            $table->longText("adress");
            $table->string("statistics", length: 100);
            $table->string("phone",  length: 50);
            $table->string("email", length: 50);
            $table->string("whatsapp", length: 100);
            $table->string("linkedin", length: 100);
            $table->string("youtube", length: 100);
            $table->string("instagram", length: 100);
            $table->string("facebok", length: 100);
            $table->string("twitter", length: 100);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contactinfos');
    }
};
