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
        Schema::create('pdt_masts', function (Blueprint $table) {
            $table->bigIncrements('pid');
            $table->string('email','30')->nullable()->comment('이메일 주소');
            $table->string('order_no','30');
            $table->index(['email','order_no']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pdt_masts');
    }
};
