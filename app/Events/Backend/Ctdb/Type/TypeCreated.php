<?php

namespace App\Events\Backend\Ctdb\Type;

use Illuminate\Queue\SerializesModels;

/**
 * Class TypeCreated.
 */
class TypeCreated
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
