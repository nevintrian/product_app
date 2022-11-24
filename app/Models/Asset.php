<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Asset extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function product(): BelongsToMany
    {
        return $this->belongsToMany(Product::class, 'product_assets');
    }

    public function category(): HasOne
    {
        return $this->hasOne(Category::class);
    }
}
