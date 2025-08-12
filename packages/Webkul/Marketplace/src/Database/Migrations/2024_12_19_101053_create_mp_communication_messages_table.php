<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Webkul\Marketplace\Enums\SenderType;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('mp_communication_messages', function (Blueprint $table) {
            $table->id();
            $table->foreignId('mp_communication_id')->constrained()->onDelete('cascade');
            $table->enum('sender_type', SenderType::values());
            $table->text('text');
            $table->string('attachment')->nullable();
            $table->string('attachment_name')->nullable();
            $table->string('attachment_type')->nullable();
            $table->boolean('is_read')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mp_communication_messages');
    }
};
