<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
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

    /**
     * Building one to many relationship.
     */
    public function education()
    {
        return $this->hasMany(Education::class, 'userID');
    }

    /**
     * Building one to many relationship.
     */
    public function work()
    {
        return $this->hasMany(Work::class, 'userID');
    }

    /**
     * Building one to many relationship.
     */
    public function Achievement()
    {
        return $this->hasMany(Achievements::class, 'userID');
    }

    /**
     * Building one to many relationship.
     */
    public function skills()
    {
        return $this->hasMany(Skills::class, 'userID');
    }

    /**
     * Building one to many relationship.
     */
    public function publications()
    {
        return $this->hasMany(Publications::class, 'userID');
    }
}
