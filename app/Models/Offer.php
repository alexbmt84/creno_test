<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Offer extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function product(): BelongsTo {

        return $this->belongsTo(Product::class);

    }

     public function category(): BelongsTo {

        return $this->belongsTo(Category::class);

    }

    public function histories(): HasMany {
        return $this->hasMany(History::class);
    }

}
