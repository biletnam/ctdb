<?php

namespace App\Repositories\Backend\Ctdb;

use App\Models\Ctdb\Genre;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\LengthAwarePaginator;
use App\Exceptions\GeneralException;
use App\Repositories\BaseRepository;
use App\Events\Backend\Ctdb\Genre\GenreCreated;
use App\Events\Backend\Ctdb\Genre\GenreUpdated;

/**
 * Class GenreRepository.
 */
class GenreRepository extends BaseRepository
{
    /**
     * @return string
     */
    public function model()
    {
        return Genre::class;
    }


    /**
     * @param int    $paged
     * @param string $orderBy
     * @param string $sort
     *
     * @return mixed
     */
    public function getPaginated($paged = 25, $orderBy = 'created_at', $sort = 'desc') : LengthAwarePaginator
    {
        return $this->model
            ->sortable()
            ->orderBy($orderBy, $sort)
            ->paginate($paged);
    }


    /**
     * @param array $data
     *
     * @return Genre
     * @throws GeneralException
     */
    public function create(array $data) : Genre
    {
        // Make sure it doesn't already exist
        if ($this->genreExists($data['name'])) {
            throw new GeneralException('A genre already exists with the name '.$data['name']);
        }

        return DB::transaction(function () use ($data) {
            $genre = parent::create([
                'name'    => $data['name'],
                'user_id' => $data['user_id']
            ]);

            if ($genre) {
                event(new GenreCreated($genre));
                return $genre;
            }

            throw new GeneralException(trans('exceptions.backend.access.genre.create_error'));
        });
    }

    /**
     * @param Genre  $genre
     * @param array $data
     *
     * @return mixed
     * @throws GeneralException
     */
    public function update(Genre $genre, array $data)
    {

        // If the name is changing make sure it doesn't already exist
        if ($genre->name != $data['name']) {
            if ($this->genreExists($data['name'])) {
                throw new GeneralException('A genre already exists with the name '.$data['name']);
            }
        }

        return DB::transaction(function () use ($genre, $data) {
            if ($genre->update([
                'name'    => $data['name'],
                'user_id' => $data['user_id']
            ])) {
                event(new GenreUpdated($genre));

                return $genre;
            }

            throw new GeneralException(trans('exceptions.backend.access.genres.update_error'));
        });
    }

    /**
     * @param $name
     *
     * @return bool
     */
    protected function genreExists($name)
    {
        return $this->model
                ->where('name', $name)
                ->count() > 0;
    }
}
