<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('usage', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->integer('page_views')->default(0);
            $table->integer('api_calls')->default(0);
            $table->integer('storage_usage')->default(0)->comment('in bytes');
            $table->integer('bandwidth_usage')->default(0)->comment('in bytes');
            $table->timestamps();
            $table->timestamp('last_updated')->nullable();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('usage');
    }
};
