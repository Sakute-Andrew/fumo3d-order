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
        Schema::create('materials', function (Blueprint $table) {
            $table->bigIncrements('material_id');
            $table->string('material_name', 50)->notNull();
            $table->string('material_description', 1000)->notNull();
            $table->string('material_strength', 50)->notNull();
            $table->string('hdt', 50)->notNull();
            $table->string('tensile_elongation', 50)->notNull();
            $table->string('material_photo')->notNull();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('materials');
    }
};
