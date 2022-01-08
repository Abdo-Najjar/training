<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    public static function booted()
    {
        static::created(function (User $user) {
            if ($user->isHOC()) {
                $user->company()->create([
                    'name'  => $user->name
                ]);
            }
        });
    }

    // User Types.
    public const TRINEE = '1';
    public const HOC = '2';
    public const ADMIN = '3';

    // User Genders.
    public const MALE = '1';
    public const FEMALE = '2';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'type'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    /** Methods */

    public function isTrinee()
    {
        return $this->type == static::TRINEE;
    }

    public function isHOC()
    {
        return $this->type == static::HOC;
    }

    public function isAdmin()
    {
        return $this->type == static::ADMIN;
    }

    /** Relations */

    public function reports(): HasMany
    {
        return $this->hasMany(Report::class);
    }

    public function trainingRequests(): HasMany
    {
        return $this->hasMany(TrainingRequest::class);
    }

    public function company(): HasOne
    {
        return $this->hasOne(Company::class);
    }

    public function specializations(): BelongsToMany
    {
        return $this->belongsToMany(Specialization::class);
    }
}
