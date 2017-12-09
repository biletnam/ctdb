<?php

namespace App\Repositories\Backend\Ctdb;

use App\Models\Ctdb\Licensor;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\LengthAwarePaginator;
use App\Exceptions\GeneralException;
use App\Repositories\BaseRepository;
use App\Events\Backend\Ctdb\Licensor\LicensorCreated;
use App\Events\Backend\Ctdb\Licensor\LicensorUpdated;

/**
 * Class LicensorRepository.
 */
class LicensorRepository extends BaseRepository
{
    /**
     * @return string
     */
    public function model()
    {
        return Licensor::class;
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
     * @return Licensor
     * @throws GeneralException
     */
    public function create(array $data) : Licensor
    {
        // Make sure it doesn't already exist
        if ($this->licensorExists($data['name'])) {
            throw new GeneralException('A licensor already exists with the name '.$data['name']);
        }

        return DB::transaction(function () use ($data) {
            $licensor = parent::create([
                'name'    => $data['name'],
                'weblink' => $data['weblink'],
                'user_id' => $data['user_id']
            ]);

            if ($licensor) {
                event(new LicensorCreated($licensor));
                return $licensor;
            }

            throw new GeneralException(trans('exceptions.backend.access.licensor.create_error'));
        });
    }

    /**
     * @param Licensor  $licensor
     * @param array $data
     *
     * @return mixed
     * @throws GeneralException
     */
    public function update(Licensor $licensor, array $data)
    {

        // If the name is changing make sure it doesn't already exist
        if ($licensor->name != $data['name']) {
            if ($this->licensorExists($data['name'])) {
                throw new GeneralException('A licensor already exists with the name '.$data['name']);
            }
        }

        return DB::transaction(function () use ($licensor, $data) {
            if ($licensor->update([
                'name'    => $data['name'],
                'weblink' => $data['weblink'],
                'user_id' => $data['user_id']
            ])) {
                event(new LicensorUpdated($licensor));

                return $licensor;
            }

            throw new GeneralException(trans('exceptions.backend.access.licensors.update_error'));
        });
    }

    /**
     * @param $name
     *
     * @return bool
     */
    protected function licensorExists($name)
    {
        return $this->model
                ->where('name', $name)
                ->count() > 0;
    }
}
