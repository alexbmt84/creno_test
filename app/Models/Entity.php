<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Entity extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function products(): HasMany {
        return $this->hasMany(Product::class);
    }

    public function lists(): HasMany {
        return $this->hasMany(Catalog::class);
    }

    public function histories(): HasMany {
        return $this->hasMany(History::class);
    }

    public function addresses(): HasMany {
        return $this->hasMany(Address::class);
    }

}
