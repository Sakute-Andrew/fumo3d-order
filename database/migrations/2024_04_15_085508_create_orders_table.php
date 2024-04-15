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
        Schema::create('orders', function (Blueprint $table) {
            $table->uuid('order_id')->primary();
            $table->bigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('first_name', 254);
            $table->string('last_name', 254);
            $table->string('address', 254);
            $table->string('phone_number', 50)->nullable();
            $table->string('order_name', 254);
            $table->string('order_description', 254);
            $table->integer('order_price');
            $table->bigInteger('material_id')->unsigned();
            $table->foreign('material_id')->references('material_id')->on('materials')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
