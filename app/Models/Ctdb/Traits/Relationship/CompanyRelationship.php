<?php

namespace App\Models\Ctdb\Traits\Relationship;
use App\Models\Auth\User;
use App\Models\Ctdb\Type;
use App\Models\Ctdb\Venue;


/**
 * Class CompanyRelationship.
 */
trait CompanyRelationship
{
    /**
     * @return mixed
     */
    public function venue()
    {
        return $this->hasOne(Venue::class);
    }

    /**
     * @return mixed
     */
    public function type()
    {
        return $this->hasOne(Type::class);
    }

    /**
     * @return mixed
     */
    public function user()
    {
        return $this->hasOne(User::class);
    }

}
