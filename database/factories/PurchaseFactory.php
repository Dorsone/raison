<?php

namespace Database\Factories;

use App\Enums\CurrencyEnum;
use App\Models\Purchase;
use App\Models\Shop;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Purchase>
 */
class PurchaseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        /** @var Shop $shop */
        $shop = Shop::query()->inRandomOrder()->first();

        return [
            'shop_id' => $shop->id,
            'price' => $this->faker->randomFloat(2, 10, 100),
            'currency' => $this->faker->randomElement(CurrencyEnum::values()),
            'document_url' => $this->faker->imageUrl(),
        ];
    }
}
