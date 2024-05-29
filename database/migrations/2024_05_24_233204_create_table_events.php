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
        Schema::create('events', function (Blueprint $table) {
            $table->smallIncrements('id');
            $table->string('title',140);
            $table->string('producer');
            $table->text('description')->nullable();
            $table->string('location_name',50)->nullable();
            $table->string('location_address',150);
            $table->date('event_date');
            $table->double('price');
            $table->tinyInteger('event_type')->index();
            $table->string('image',255);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('events');
    }
};
