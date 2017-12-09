<?php

namespace App\Events\Backend\Ctdb\Genre;

use Illuminate\Queue\SerializesModels;

/**
 * Class GenreDeleted.
 */
class GenreDeleted
{
    use SerializesModels;

    /**
     * @var
     */
    public $genre;

    /**
     * @param $genre
     */
    public function __construct($genre)
    {
        $this->genre = $genre;
    }
}
