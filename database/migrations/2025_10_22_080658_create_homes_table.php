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
        
        Schema::create('homes', function (Blueprint $table) {
            $table->id();
            $table->text('impact')->nullable();
            $table->string('title')->nullable();
            $table->string('img')->nullable();
            $table->string('advertis_title')->nullable();
            $table->string('awart')->nullable();
            $table->string('total_crickter')->nullable();
            $table->timestamps();
        });


    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('homes');
    }
};
