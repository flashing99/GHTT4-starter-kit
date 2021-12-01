<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\AggregateGroup;

class AggregatesItem extends Model
{
    use HasFactory;

    protected $fillable = [
        'item_name', 'status', 'compte_scf', 'aggregates_groups_id',

    ];

    public function aggregate_group()
    {
        return $this->belongsTo(AggregateGroup::class);
    }
}
