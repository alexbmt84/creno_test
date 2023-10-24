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

}
