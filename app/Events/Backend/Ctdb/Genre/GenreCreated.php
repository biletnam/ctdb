<?php

namespace App\Events\Backend\Ctdb\Genre;

use Illuminate\Queue\SerializesModels;

/**
 * Class GenreCreated.
 */
class GenreCreated
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
