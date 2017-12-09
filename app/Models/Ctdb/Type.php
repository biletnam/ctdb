<?php

namespace App\Models\Ctdb;

use Illuminate\Database\Eloquent\Model;
use App\Models\Ctdb\Traits\Attribute\TypeAttribute;
use Kyslik\ColumnSortable\Sortable;


class Type extends Model
{
    use TypeAttribute,
        Sortable;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */



    public $sortable = ['id',
        'name'
    ];


    protected $fillable = [
        'name',
        'user_id',
    ];
}
