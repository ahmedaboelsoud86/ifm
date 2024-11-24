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
        Schema::create('facility_translations', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('facility_id')->unsigned();
            $table->string('title',length: 50);
            $table->text('description');
            $table->string('locale','2')->index();
            $table->unique(['facility_id', 'locale']);
            $table->foreign('facility_id')->references('id')->on('facilities')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('facility_translations');
    }
};
