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
        Schema::create('power_service_translations', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('power_service_id')->unsigned();
            $table->string('title',length: 100);
            $table->text('description');
            $table->string('locale','2')->index();
            $table->unique(['power_service_id', 'locale']);
            $table->foreign('power_service_id')->references('id')->on('power_services')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('power_service_translations');
    }
};
