<?php

namespace App\Models\Ctdb;

use Illuminate\Database\Eloquent\Model;
use App\Models\Ctdb\Traits\Attribute\VenueAttribute;
use App\Models\Ctdb\Traits\Method\VenueMethod;
use Kyslik\ColumnSortable\Sortable;


class Venue extends Model
{
    use VenueAttribute,
        VenueMethod,
        Sortable;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public $sortable = ['id',
        'name',
        'city',
        'zip'
    ];

    protected $fillable = [
        'name',
        'address1',
        'address2',
        'city',
        'state',
        'zip',
        'contact',
        'phone',
        'email',
        'description',
        'weblink',
        'facebooklink',
        'twitterlink',
        'youtubelink',
        'instagramlink',
        'user_id'
    ];
}
