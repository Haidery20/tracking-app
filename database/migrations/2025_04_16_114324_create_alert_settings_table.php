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
        Schema::create('alert_settings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->foreignId('device_id')->constrained('devices')->onDelete('cascade');
            $table->string('name');
            $table->string('type'); // e.g., 'geofence', 'speed', 'battery'
            $table->json('settings'); // JSON field for specific alert settings
            $table->boolean('is_active')->default(true);
            $table->text('notification_message');
            $table->boolean('email_notification')->default(true);
            $table->boolean('sms_notification')->default(false);
            $table->string('notification_sound')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('alert_settings');
    }
};
