<?php

namespace App\Models;

use App\Enums\CurrencyEnum;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Carbon;

/**
 * @class Purchase
 *
 * @property int $id
 * @property int $shop_id
 * @property float $price
 * @property CurrencyEnum $currency
 * @property string $document_url
 * @property Carbon $created_at
 * @property Carbon $updated_at
 *
 * @property Shop $shop
 */
class Purchase extends Model
{
    use HasFactory;

    protected function casts(): array
    {
        return [
            'currency' => CurrencyEnum::class,
            'price' => 'float'
        ];
    }

    protected $fillable = [
        'shop_id',
        'price',
        'currency',
        'document_url'
    ];

    public function shop(): BelongsTo
    {
        return $this->belongsTo(Shop::class, 'id', 'shop_id');
    }
}
