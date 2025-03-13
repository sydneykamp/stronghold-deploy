<?php

use App\Models\memorial;
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
        Schema::create('memorial_images', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Memorial::class)->constrained()->onDelete('cascade');
            $table->string('filename');
            $table->string('description');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('memorial_images');
    }
};
