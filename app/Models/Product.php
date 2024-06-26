<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Product extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function entity(): BelongsTo {

        return $this->belongsTo(Entity::class);

    }

    public function level1(): BelongsTo {

        return $this->belongsTo(Level1::class);

    }

    public function level2(): BelongsTo {

        return $this->belongsTo(Level2::class);

    }

    public function tva(): BelongsTo {

        return $this->belongsTo(Tva::class);

    }

    public function offers(): HasMany {
        return $this->hasMany(Offer::class);
    }

    public function certifications(): BelongsTo {
        return $this->belongsTo(Certification::class);
    }

}
