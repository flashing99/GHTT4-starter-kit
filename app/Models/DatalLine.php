<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\DataLineDetails;

class Dataline extends Model
{
    use HasFactory;

    protected $fillable = [
        'filiale_name', 'user_id', 'data_month', 'status',
    ];


    public function datas()
    {

        return $this->hasMany(DataLineDetails::class);
    }
}
