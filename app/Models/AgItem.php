<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\AgGroup;

class AgItem extends Model
{
    use HasFactory;

    protected $fillable = [
        'item_name', 'status', 'compte_scf', 'ag_groups_id',

    ];

    public function ag_group()
    {
        return $this->belongsTo(AgGroup::class);
    }
}
