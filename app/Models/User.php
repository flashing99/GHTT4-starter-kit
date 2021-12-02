<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

use App\Models\Position;
use App\Models\Filiale;
use App\Models\DataLine;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'position_id',
        'filiale_id',
        'user_code',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];



    /**
     * Get the position associated with the User
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function positions()
    {
        return $this->hasOne(Position::class);
    }
    /**
     * Get the filiale that owns the User
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function filiale()
    {
        return $this->belongsTo(Filiale::class);
    }

    public function data_lines()
    {
        return $this->hasMany(DataLine::class);
    }
}
