<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Znck\Eloquent\Traits\BelongsToThrough;

class TrainingPost extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia, BelongsToThrough;

    protected $guarded = [];

    // Types.
    public const TRINEE = '1';
    public const HOC = '2';


    /** Mutations */

    public function getTypeNameAttribute()
    {
        return [
            static::TRINEE => 'طلب تدريب',
            static::HOC    => 'فرصة تدريب'
        ][$this->type];
    }

    /** Relations */

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function specialization(): BelongsTo
    {
        return $this->belongsTo(Specialization::class);
    }
    
    public function reports(): MorphMany
    {
        return $this->morphMany(Report::class , 'reportable');
    }

    public function registerMediaConversions(Media $media = null): void
    {
        $this->addMediaConversion('thumb')
            ->width(150)
            ->height(150);
    }
}
