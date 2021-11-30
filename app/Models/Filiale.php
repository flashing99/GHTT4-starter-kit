<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Filiale extends Model
{
    use HasFactory;
    protected $fillable = [
        'filiale_name',
    ];


    public function users()
    {
        return  $this->hasMany(User::class);
    }
}