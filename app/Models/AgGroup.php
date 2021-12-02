<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\AgItem;

class AgGroup extends Model
{
    use HasFactory;

    protected $fillable = [
        'group_name', 'status'
    ];


    public function ag_items()
    {


        return $this->hesMany(AgItem::class, 'ag_groups_id');
        // dd($g);


    }
}
