<?php

namespace App\Repositories\Backend\Ctdb;

use App\Models\Ctdb\Type;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\LengthAwarePaginator;
use App\Exceptions\GeneralException;
use App\Repositories\BaseRepository;
use App\Events\Backend\Ctdb\Type\TypeCreated;
use App\Events\Backend\Ctdb\Type\TypeUpdated;

/**
 * Class TypeRepository.
 */
class TypeRepository extends BaseRepository
{
    /**
     * @return string
     */
    public function model()
    {
        return Type::class;
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
     * @return Type
     * @throws GeneralException
     */
    public function create(array $data) : Type
    {
        // Make sure it doesn't already exist
        if ($this->typeExists($data['name'])) {
            throw new GeneralException('A type already exists with the name '.$data['name']);
        }

        return DB::transaction(function () use ($data) {
            $type = parent::create([
                'name'    => $data['name'],
                'user_id' => $data['user_id']
            ]);

            if ($type) {
                event(new TypeCreated($type));
                return $type;
            }

            throw new GeneralException(trans('exceptions.backend.access.type.create_error'));
        });
    }

    /**
     * @param Type  $type
     * @param array $data
     *
     * @return mixed
     * @throws GeneralException
     */
    public function update(Type $type, array $data)
    {

        // If the name is changing make sure it doesn't already exist
        if ($type->name != $data['name']) {
            if ($this->typeExists($data['name'])) {
                throw new GeneralException('A type already exists with the name '.$data['name']);
            }
        }

        return DB::transaction(function () use ($type, $data) {
            if ($type->update([
                'name'    => $data['name'],
                'user_id' => $data['user_id']
            ])) {
                event(new TypeUpdated($type));

                return $type;
            }

            throw new GeneralException(trans('exceptions.backend.access.types.update_error'));
        });
    }

    /**
     * @param $name
     *
     * @return bool
     */
    protected function typeExists($name)
    {
        return $this->model
                ->where('name', $name)
                ->count() > 0;
    }
}
