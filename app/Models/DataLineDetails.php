<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Filiale;
use App\Models\Dataline;

class DataLineDetails extends Model
{
    use HasFactory;

    protected $fillable = [
        'status', 'user_id', 'filiale_id',  'data_month'
    ];


    public function Filiale()
    {
        return $this->belongsTo(Filiale::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }


    public function data_Line()
    {

        return $this->belongsTo(Dataline::class);
    }
}
