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
      Schema::create('bookings', function (Blueprint $table) {
    $table->id();

    $table->foreignId('user_id')->constrained('users')->cascadeOnDelete();

    $table->foreignId('movie_id')->constrained('movies')->cascadeOnDelete();

    $table->foreignId('showtime_id')->constrained('showtimes')->cascadeOnDelete();

    $table->json('seats');

    $table->integer('total_tickets');

    $table->decimal('total_price', 10, 2);

    $table->string('status')->default('Pending');

    $table->timestamps();
});
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bookings');
    }
};
