<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class SpecializationType extends Model
{
    use HasFactory;

    protected $guarded = [];

    /** Relations */

    public function specializations(): HasMany
    {
        return $this->hasMany(Specialization::class);
    }
}
