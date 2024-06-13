<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Carbon;

/**
 * @class Shop
 *
 * @property int $id
 * @property string $name
 * @property string $website_url
 * @property Carbon $created_at
 * @property Carbon $updated_at
 *
 * @property Collection<Purchase> $purchases
 */
class Shop extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'website_url'
    ];

    public function purchases(): HasMany
    {
        return $this->hasMany(Purchase::class, 'shop_id', 'id');
    }
}
