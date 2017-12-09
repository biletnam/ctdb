<?php

namespace App\Events\Backend\Ctdb\Venue;

use Illuminate\Queue\SerializesModels;

/**
 * Class VenueDeleted.
 */
class VenueDeleted
{
    use SerializesModels;

    /**
     * @var
     */
    public $venue;

    /**
     * @param $venue
     */
    public function __construct($venue)
    {
        $this->venue = $venue;
    }
}
