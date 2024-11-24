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
        Schema::create('category_service_translations', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('category_service_id')->unsigned();
            $table->string('title',length: 100);
            $table->string('locale','2')->index();
            $table->unique(['category_service_id', 'locale']);
            $table->foreign('category_service_id')->references('id')->on('category_services')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('category_services_translations');
    }
};
