<?php

namespace App\Models\Ctdb;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Ctdb\Traits\Attribute\LicensorAttribute;
use Kyslik\ColumnSortable\Sortable;


class Licensor extends Model
{
    use LicensorAttribute,
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
        'weblink',
        'user_id',
    ];
}
