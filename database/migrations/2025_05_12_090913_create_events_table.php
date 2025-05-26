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
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->string('event_name', 50);
            $table->string('venue', 100);
            $table->integer('capacity');
            $table->decimal('ticket_price', 10, 0)->nullable(false);
            $table->text('description')->nullable();
            $table->string('contact_info', 100)->nullable();
            $table->timestamp('start_date')->notNull();
            $table->timestamp('end_date')->nullable();
            $table->string('category', 50);
            $table->string('status', 50)->default('Active');
            $table->string('organizer', 100);
            $table->string('image_url', 255);
            $table->integer('tickets_sold')->nullable()->default(0);
            $table->string('currency', 10)->default('USD')->nullable();
            $table->timestamps();
            $table->unsignedBigInteger('created_by')->nullable();
            $table->unsignedBigInteger('updated_by')->nullable();
            $table->boolean('delete_flag')->default(false);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('events');
    }
};
