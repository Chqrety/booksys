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
        Schema::create('borrowings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('book_id')->constrained()->onDelete('cascade'); // Foreign key ke buku
            $table->foreignId('user_id')->constrained()->onDelete('cascade'); // Foreign key ke user
            $table->date('borrowed_at'); // Tanggal peminjaman
            $table->date('due_date')->default(now()->addDays(7)); // Tanggal pengembalian
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('borrowings');
    }
};
