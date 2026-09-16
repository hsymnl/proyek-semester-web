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
    Schema::create('perkembangan_gizi', function (Blueprint $table) {
        $table->id();
        $table->foreignId('anak_id')->constrained('anak')->onDelete('cascade');
        $table->date('tanggal_pemeriksaan');
        $table->decimal('berat_badan', 5, 2);
        $table->decimal('tinggi_badan', 5, 2);
        $table->decimal('lingkar_lengan', 5, 2)->nullable();
        $table->decimal('lingkar_kepala', 5, 2)->nullable();
        $table->string('status_gizi')->nullable();
        $table->text('catatan')->nullable();
        $table->timestamps();
    });
}
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('perkembangan_gizis');
    }
};
