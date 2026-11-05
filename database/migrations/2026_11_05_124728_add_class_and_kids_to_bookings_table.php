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
        // Add class and kids_tickets columns to bookings table
        // class: Gold / Platinum / Box (which class user selected)
        // kids_tickets: how many kids (3-12 years) - they get 50% discount
        Schema::table('bookings', function (Blueprint $table) {
            $table->string('class')->nullable()->after('showtime_id');
            $table->integer('kids_tickets')->default(0)->after('total_tickets');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('bookings', function (Blueprint $table) {
            $table->dropColumn(['class', 'kids_tickets']);
        });
    }
};