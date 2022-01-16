<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Facades\App;

class Report extends Model
{
    use HasFactory;

    protected $guarded = [];

    public static function booted()
    {
        if (!App::runningInConsole()) {
            static::creating(function (Report $report) {
                $report->user_id = user()->id;
            });
        }
    }


    /** Relations */

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function reportable()
    {
        return $this->morphTo();
    }
}
