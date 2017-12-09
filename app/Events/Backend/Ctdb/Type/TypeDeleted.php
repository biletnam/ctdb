<?php

namespace App\Events\Backend\Ctdb\Type;

use Illuminate\Queue\SerializesModels;

/**
 * Class TypeDeleted.
 */
class TypeDeleted
{
    use SerializesModels;

    /**
     * @var
     */
    public $type;

    /**
     * @param $type
     */
    public function __construct($type)
    {
        $this->type = $type;
    }
}
