<?php

namespace App\Models\Ctdb;

use Illuminate\Database\Eloquent\Model;
use App\Models\Ctdb\Traits\Attribute\GenreAttribute;
use Kyslik\ColumnSortable\Sortable;


class Genre extends Model
{
    use GenreAttribute,
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
