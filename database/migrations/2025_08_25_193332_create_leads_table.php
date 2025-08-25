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
     Schema::create('leads', function (Blueprint $table) {
    $table->id();
    $table->string('first_name');
    $table->string('email');
   
$table->json('Services_Name__c')->nullable();

    $table->string('products')->nullable();
    $table->string('asin_url')->nullable();
    $table->string('phone');
    $table->string('budget')->nullable();
    $table->text('additional_comments')->nullable();
    $table->timestamps();
});

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('leads');
    }
};
