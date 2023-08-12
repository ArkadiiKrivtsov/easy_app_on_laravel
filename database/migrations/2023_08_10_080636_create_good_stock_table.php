<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('good_stock', function (Blueprint $table) {
            $table->bigInteger('good_id')->unsigned()->index();
            $table->bigInteger('stock_id')->unsigned()->index();

            $table->foreign('good_id')->references('id')->on('goods')->onDelete('cascade');
            $table->foreign('stock_id')->references('id')->on('stocks')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('good_stock');
    }
};
