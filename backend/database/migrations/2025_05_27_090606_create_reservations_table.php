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
        Schema::create('reservations', function (Blueprint $table) {
            $table->id();
            $table->date('date');
            $table->time('heure');
            $table->integer('duree');
            $table->decimal('montant', 8, 2);
            $table->dateTime('date_paiement')->nullable();
            $table->dateTime('date_annulation')->nullable();
            $table->enum('status', ['confirmee', 'en_attente', 'annulee'])->default('en_attente');
            $table->foreignId('utilisateur_id')->constrained();
            $table->foreignId('local_id')->constrained();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservations');
    }
};
