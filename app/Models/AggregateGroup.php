<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\AggregatesItem;

class AggregateGroup extends Model
{
    use HasFactory;

    protected $fillable = [
        'group_name', 'status'
    ];


    public function aggregate_group()
    {
        return $this->hesMany(AggregatesItem::class);
    }
}
