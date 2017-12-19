<?php

namespace App\Http\Controllers\Backend\Ctdb\Company;

use CountryState;
use App\Models\Ctdb\Company;
use App\Http\Controllers\Controller;
use App\Events\Backend\Ctdb\Company\CompanyDeleted;
use App\Models\Ctdb\Type;
use App\Models\Ctdb\Venue;
use App\Repositories\Backend\Ctdb\CompanyRepository;
use App\Http\Requests\Backend\Ctdb\Company\StoreCompanyRequest;
use App\Http\Requests\Backend\Ctdb\Company\ManageCompanyRequest;
use App\Http\Requests\Backend\Ctdb\Company\UpdateCompanyRequest;

/**
 * Class CompanyController.
 */
class CompanyController extends Controller
{
    /**
     * @var CompanyRepository
     */
    protected $companyRepository;

    /**
     * CompanyController constructor.
     *
     * @param CompanyRepository $companyRepository
     */
    public function __construct(CompanyRepository $companyRepository)
    {
        $this->companyRepository = $companyRepository;
    }

    /**
     * @param ManageCompanyRequest $request
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index(ManageCompanyRequest $request)
    {
        return view('backend.ctdb.company.index')
            ->withCompanies($this->companyRepository->getPaginated(3, 'name', 'asc'));
    }

    /**
     * @param ManageCompanyRequest    $request
     *
     * @return mixed
     */
    public function create(ManageCompanyRequest $request)
    {
        $types = Type::orderBy('name')->get();
        $venues = Venue::orderBy('name')->get();
        $states = CountryState::getStates('US');

        return view('backend.ctdb.company.create',compact('types','venues', 'states'));
    }

    /**
     * @param StoreCompanyRequest $request
     *
     * @return mixed
     */
    public function store(StoreCompanyRequest $request)
    {
        $this->companyRepository->create($request->only(
            'name',
            'address1',
            'address2',
            'city',
            'state',
            'zip',
            'contact',
            'phone',
            'email',
            'description',
            'weblink',
            'facebooklink',
            'twitterlink',
            'youtubelink',
            'instagramlink',
            'type',
            'primaryvenue',
            'user_id'
        ));

        return redirect()->route('admin.ctdb.company.index')->withFlashSuccess(__('alerts.backend.companies.created'));
    }

    /**
     * @param Company              $company
     * @param ManageCompanyRequest $request
     *
     * @return mixed
     */
    public function show(Company $company, ManageCompanyRequest $request)
    {
        return view('backend.ctdb.company.show')
            ->withCompany($company);
    }

    /**
     * @param Company                 $company
     * @param ManageCompanyRequest    $request
     *
     * @return mixed
     */
    public function edit(Company $company, ManageCompanyRequest $request)
    {
        $types = Type::orderBy('name')->get();
        $venues = Venue::orderBy('name')->get();
        $states = CountryState::getStates('US');

        return view('backend.ctdb.company.edit',compact('types','venues', 'states', 'company'));
    }

    /**
     * @param Company              $company
     * @param UpdateCompanyRequest $request
     *
     * @return mixed
     */
    public function update(Company $company, UpdateCompanyRequest $request)
    {
        $this->companyRepository->update($company, $request->only(
            'name',
            'address1',
            'address2',
            'city',
            'state',
            'zip',
            'contact',
            'phone',
            'email',
            'description',
            'weblink',
            'facebooklink',
            'twitterlink',
            'youtubelink',
            'instagramlink',
            'type_id',
            'venue_id',
            'user_id'
        ));

        return redirect()->route('admin.ctdb.company.index')->withFlashSuccess(__('alerts.backend.companies.updated'));
    }

    /**
     * @param Company              $company
     * @param ManageCompanyRequest $request
     *
     * @return mixed
     */
    public function destroy(Company $company, ManageCompanyRequest $request)
    {
        $this->companyRepository->deleteById($company->id);

        event(new CompanyDeleted($company));

        return redirect()->route('admin.ctdb.company.index')->withFlashSuccess(__('alerts.backend.companies.deleted'));
    }
}
