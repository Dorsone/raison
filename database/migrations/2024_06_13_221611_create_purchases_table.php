<?php

use App\Enums\CurrencyEnum;
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
        Schema::create('purchases', function (Blueprint $table) {
            $table->id();
            $table->foreignId('shop_id')
                ->constrained('shops')
                ->cascadeOnDelete()
                ->cascadeOnUpdate();
            $table->decimal('price', 32, 4);
            $table->enum('currency', CurrencyEnum::values());
            $table->string('document_url');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('purchases');
    }
};
