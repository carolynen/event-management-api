<?php

use App\Models\User;
use App\Models\Event;
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
        Schema::create('atendees', function (Blueprint $table) {
            $table->id();

            $table->foreignIdFor(User::class); //user who is attending the event
            $table->foreignIdFor(Event::class); //event that the user is attending
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('atendees');
    }
};
