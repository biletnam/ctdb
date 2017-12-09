<?php

namespace App\Events\Backend\Ctdb\Licensor;

use Illuminate\Queue\SerializesModels;

/**
 * Class LicensorUpdated.
 */
class LicensorUpdated
{
    use SerializesModels;

    /**
     * @var
     */
    public $licensor;

    /**
     * @param $licensor
     */
    public function __construct($licensor)
    {
        $this->licensor = $licensor;
    }
}
