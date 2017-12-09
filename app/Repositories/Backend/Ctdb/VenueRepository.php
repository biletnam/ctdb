<?php

namespace App\Repositories\Backend\Ctdb;

use App\Models\Ctdb\Venue;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\LengthAwarePaginator;
use App\Exceptions\GeneralException;
use App\Repositories\BaseRepository;
use App\Events\Backend\Ctdb\Venue\VenueCreated;
use App\Events\Backend\Ctdb\Venue\VenueUpdated;

/**
 * Class VenueRepository.
 */
class VenueRepository extends BaseRepository
{
    /**
     * @return string
     */
    public function model()
    {
        return Venue::class;
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
     * @return Venue
     * @throws GeneralException
     */
    public function create(array $data) : Venue
    {
        // Make sure it doesn't already exist
        if ($this->venueExists($data['name'])) {
            throw new GeneralException('A venue already exists with the name '.$data['name']);
        }

        return DB::transaction(function () use ($data) {
            $venue = parent::create([
                'name'          => $data['name'],
                'address1'      => $data['address1'],
                'address2'      => $data['address2'],
                'city'          => $data['city'],
                'state'         => $data['state'],
                'zip'           => $data['zip'],
                'contact'       => $data['contact'],
                'phone'         => $data['phone'],
                'email'         => $data['email'],
                'description'   => $data['description'],
                'weblink'       => $data['weblink'],
                'facebooklink'  => $data['facebooklink'],
                'twitterlink'   => $data['twitterlink'],
                'youtubelink'   => $data['youtubelink'],
                'instagramlink' => $data['instagramlink'],
                'user_id'       => $data['user_id']
            ]);

            if ($venue) {
                event(new VenueCreated($venue));
                return $venue;
            }

            throw new GeneralException(trans('exceptions.backend.access.venue.create_error'));
        });
    }

    /**
     * @param Venue  $venue
     * @param array $data
     *
     * @return mixed
     * @throws GeneralException
     */
    public function update(Venue $venue, array $data)
    {

        // If the name is changing make sure it doesn't already exist
        if ($venue->name != $data['name']) {
            if ($this->venueExists($data['name'])) {
                throw new GeneralException('A venue already exists with the name '.$data['name']);
            }
        }

        return DB::transaction(function () use ($venue, $data) {
            if ($venue->update([
                'name'          => $data['name'],
                'address1'      => $data['address1'],
                'address2'      => $data['address2'],
                'city'          => $data['city'],
                'state'         => $data['state'],
                'zip'           => $data['zip'],
                'contact'       => $data['contact'],
                'phone'         => $data['phone'],
                'email'         => $data['email'],
                'description'   => $data['description'],
                'weblink'       => $data['weblink'],
                'facebooklink'  => $data['facebooklink'],
                'twitterlink'   => $data['twitterlink'],
                'youtubelink'   => $data['youtubelink'],
                'instagramlink' => $data['instagramlink'],
                'user_id'       => $data['user_id']
            ])) {
                event(new VenueUpdated($venue));

                return $venue;
            }

            throw new GeneralException(trans('exceptions.backend.access.venues.update_error'));
        });
    }

    /**
     * @param $name
     *
     * @return bool
     */
    protected function venueExists($name)
    {
        return $this->model
                ->where('name', $name)
                ->count() > 0;
    }
}
