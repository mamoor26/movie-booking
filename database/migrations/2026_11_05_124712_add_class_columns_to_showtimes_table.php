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
        // Add 3 class price columns to showtimes table
        // (Gold, Platinum, Box) as per Aptech project requirement
        Schema::table('showtimes', function (Blueprint $table) {
            $table->decimal('gold_price', 10, 2)->nullable()->after('ticket_price');
            $table->decimal('platinum_price', 10, 2)->nullable()->after('gold_price');
            $table->decimal('box_price', 10, 2)->nullable()->after('platinum_price');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('showtimes', function (Blueprint $table) {
            $table->dropColumn(['gold_price', 'platinum_price', 'box_price']);
        });
    }
};