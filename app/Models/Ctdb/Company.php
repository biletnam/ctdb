<?php

namespace App\Models\Ctdb;

use Illuminate\Database\Eloquent\Model;
use App\Models\Ctdb\Traits\Attribute\CompanyAttribute;
use App\Models\Ctdb\Traits\Method\CompanyMethod;
use App\Models\Ctdb\Traits\Relationship\CompanyRelationship;
use Kyslik\ColumnSortable\Sortable;

class Company extends Model
{
    use CompanyAttribute,
        CompanyMethod,
        CompanyRelationship,
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
        'type_id',
        'venue_id',
        'user_id'
    ];
}
