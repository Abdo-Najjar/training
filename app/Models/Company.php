<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\MorphMany;

class Company extends Model
{
    use HasFactory;

    protected $guarded = [];


    /** Relations */

    public function reports(): MorphMany
    {
        return $this->morphMany(Report::class, 'reportable');
    }

    public function trainingRequests(): MorphMany
    {
        return $this->morphMany(TrainingRequest::class, 'requestable');
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
