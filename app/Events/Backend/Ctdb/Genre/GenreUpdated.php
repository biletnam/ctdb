<?php

namespace App\Events\Backend\Ctdb\Genre;

use Illuminate\Queue\SerializesModels;

/**
 * Class GenreUpdated.
 */
class GenreUpdated
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
