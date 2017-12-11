<?php

namespace App\Repositories\Backend\Ctdb;

use App\Models\Ctdb\Company;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\LengthAwarePaginator;
use App\Exceptions\GeneralException;
use App\Repositories\BaseRepository;
use App\Events\Backend\Ctdb\Company\CompanyCreated;
use App\Events\Backend\Ctdb\Company\CompanyUpdated;

/**
 * Class CompanyRepository.
 */
class CompanyRepository extends BaseRepository
{
    /**
     * @return string
     */
    public function model()
    {
        return Company::class;
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
     * @return Company
     * @throws GeneralException
     */
    public function create(array $data) : Company
    {
        // Make sure it doesn't already exist
        if ($this->companyExists($data['name'])) {
            throw new GeneralException('A company already exists with the name '.$data['name']);
        }

        return DB::transaction(function () use ($data) {
            $company = parent::create([
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
                'type_id'       => $data['type'],
                'venue_id'       => $data['primaryvenue'],
                'user_id'       => $data['user_id']
            ]);

            if ($company) {
                event(new CompanyCreated($company));
                return $company;
            }

            throw new GeneralException(trans('exceptions.backend.access.company.create_error'));
        });
    }

    /**
     * @param Company  $company
     * @param array $data
     *
     * @return mixed
     * @throws GeneralException
     */
    public function update(Company $company, array $data)
    {

        // If the name is changing make sure it doesn't already exist
        if ($company->name != $data['name']) {
            if ($this->companyExists($data['name'])) {
                throw new GeneralException('A company already exists with the name '.$data['name']);
            }
        }

        return DB::transaction(function () use ($company, $data) {
            if ($company->update([
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
                'type_id'       => $data['type'],
                'venue_id'       => $data['primaryvenue'],
                'user_id'       => $data['user_id']
            ])) {
                event(new CompanyUpdated($company));

                return $company;
            }

            throw new GeneralException(trans('exceptions.backend.access.companys.update_error'));
        });
    }

    /**
     * @param $name
     *
     * @return bool
     */
    protected function companyExists($name)
    {
        return $this->model
                ->where('name', $name)
                ->count() > 0;
    }
}
