<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Town extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function department(): BelongsTo {

        return $this->belongsTo(Department::class);

    }

    public function cp(): BelongsTo {

        return $this->belongsTo(Cp::class);

    }
    public function addresses(): HasMany {
        return $this->hasMany(Address::class);
    }

}
