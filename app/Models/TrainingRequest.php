<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\MorphTo;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class TrainingRequest extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia;


    public static function booted()
    {
        static::updated(function (TrainingRequest $trainingRequest) {
            if ($trainingRequest->status) {
                Alert::create([
                    'user_id'   => $trainingRequest->user_id,
                    'content'   => 'تم قبولك في التدريب في المؤمسسة ' . optional(user()->company)->name
                ]);
            }
        });
    }

    /** Relations */

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function requestable(): MorphTo
    {
        return $this->morphTo('requestable');
    }

    public function company(): BelongsTo
    {
        return $this->belongsTo(Company::class);
    }

    public function registerMediaConversions(Media $media = null): void
    {
        $this->addMediaConversion('thumb')
            ->width(150)
            ->height(150);
    }
}
