<?php

namespace App\Http\Controllers\Backend\Ctdb\Licensor;

use App\Models\Ctdb\Licensor;
use App\Http\Controllers\Controller;
use App\Events\Backend\Ctdb\Licensor\LicensorDeleted;
use App\Repositories\Backend\Ctdb\LicensorRepository;
use App\Http\Requests\Backend\Ctdb\Licensor\StoreLicensorRequest;
use App\Http\Requests\Backend\Ctdb\Licensor\ManageLicensorRequest;
use App\Http\Requests\Backend\Ctdb\Licensor\UpdateLicensorRequest;

/**
 * Class LicensorController.
 */
class LicensorController extends Controller
{
    /**
     * @var LicensorRepository
     */
    protected $licensorRepository;

    /**
     * LicensorController constructor.
     *
     * @param LicensorRepository $licensorRepository
     */
    public function __construct(LicensorRepository $licensorRepository)
    {
        $this->licensorRepository = $licensorRepository;
    }

    /**
     * @param ManageLicensorRequest $request
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index(ManageLicensorRequest $request)
    {
        return view('backend.ctdb.licensor.index')
            ->withLicensors($this->licensorRepository->getPaginated(3, 'name', 'asc'));
    }

    /**
     * @param ManageLicensorRequest    $request
     *
     * @return mixed
     */
    public function create(ManageLicensorRequest $request)
    {
        return view('backend.ctdb.licensor.create');
    }

    /**
     * @param StoreLicensorRequest $request
     *
     * @return mixed
     */
    public function store(StoreLicensorRequest $request)
    {
        $this->licensorRepository->create($request->only(
            'name',
            'weblink',
            'user_id'
        ));

        return redirect()->route('admin.ctdb.licensor.index')->withFlashSuccess(__('alerts.backend.licensors.created'));
    }

    /**
     * @param Licensor              $licensor
     * @param ManageLicensorRequest $request
     *
     * @return mixed
     */
    public function show(Licensor $licensor, ManageLicensorRequest $request)
    {
        return view('backend.ctdb.licensor.show')
            ->withLicensor($licensor);
    }

    /**
     * @param Licensor                 $licensor
     * @param ManageLicensorRequest    $request
     *
     * @return mixed
     */
    public function edit(Licensor $licensor, ManageLicensorRequest $request)
    {
        return view('backend.ctdb.licensor.edit')
            ->withLicensor($licensor);
    }

    /**
     * @param Licensor              $licensor
     * @param UpdateLicensorRequest $request
     *
     * @return mixed
     */
    public function update(Licensor $licensor, UpdateLicensorRequest $request)
    {
        $this->licensorRepository->update($licensor, $request->only(
            'name',
            'weblink',
            'user_id'
        ));

        return redirect()->route('admin.ctdb.licensor.index')->withFlashSuccess(__('alerts.backend.licensors.updated'));
    }

    /**
     * @param Licensor              $licensor
     * @param ManageLicensorRequest $request
     *
     * @return mixed
     */
    public function destroy(Licensor $licensor, ManageLicensorRequest $request)
    {
        $this->licensorRepository->deleteById($licensor->id);

        event(new LicensorDeleted($licensor));

        return redirect()->route('admin.ctdb.licensor.index')->withFlashSuccess(__('alerts.backend.licensors.deleted'));
    }
}
