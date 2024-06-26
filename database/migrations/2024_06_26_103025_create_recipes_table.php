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
        Schema::create('recipes', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('description');
            $table->enum('difficulty',['easy','medium','hard']);
            $table->enum('category',
            ['appetizer','main course','side dish','dessert','salad','soup','beverage','snack'
            ]);
            $table->enum('restrictions',
            ['vegan','vegetarian','gluten-free'
            ])->nullable();
            $table->text('instructions');
            $table->integer('prep_time');
            $table->integer('cooking_time');
            $table->integer('total_time');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('recipes');
    }
};
