<?php

namespace App\Http\Controllers\Backend\Ctdb\Type;

use App\Models\Ctdb\Type;
use App\Http\Controllers\Controller;
use App\Events\Backend\Ctdb\Type\TypeDeleted;
use App\Repositories\Backend\Ctdb\TypeRepository;
use App\Http\Requests\Backend\Ctdb\Type\StoreTypeRequest;
use App\Http\Requests\Backend\Ctdb\Type\ManageTypeRequest;
use App\Http\Requests\Backend\Ctdb\Type\UpdateTypeRequest;

/**
 * Class TypeController.
 */
class TypeController extends Controller
{
    /**
     * @var TypeRepository
     */
    protected $typeRepository;

    /**
     * TypeController constructor.
     *
     * @param TypeRepository $typeRepository
     */
    public function __construct(TypeRepository $typeRepository)
    {
        $this->typeRepository = $typeRepository;
    }

    /**
     * @param ManageTypeRequest $request
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index(ManageTypeRequest $request)
    {
        return view('backend.ctdb.type.index')
            ->withTypes($this->typeRepository->getPaginated(3, 'name', 'asc'));
    }

    /**
     * @param ManageTypeRequest    $request
     *
     * @return mixed
     */
    public function create(ManageTypeRequest $request)
    {
        return view('backend.ctdb.type.create');
    }

    /**
     * @param StoreTypeRequest $request
     *
     * @return mixed
     */
    public function store(StoreTypeRequest $request)
    {
        $this->typeRepository->create($request->only(
            'name',
            'user_id'
        ));

        return redirect()->route('admin.ctdb.type.index')->withFlashSuccess(__('alerts.backend.types.created'));
    }

    /**
     * @param Type              $type
     * @param ManageTypeRequest $request
     *
     * @return mixed
     */
    public function show(Type $type, ManageTypeRequest $request)
    {
        return view('backend.ctdb.type.show')
            ->withType($type);
    }

    /**
     * @param Type                 $type
     * @param ManageTypeRequest    $request
     *
     * @return mixed
     */
    public function edit(Type $type, ManageTypeRequest $request)
    {
        return view('backend.ctdb.type.edit')
            ->withType($type);
    }

    /**
     * @param Type              $type
     * @param UpdateTypeRequest $request
     *
     * @return mixed
     */
    public function update(Type $type, UpdateTypeRequest $request)
    {
        $this->typeRepository->update($type, $request->only(
            'name',
            'user_id'
        ));

        return redirect()->route('admin.ctdb.type.index')->withFlashSuccess(__('alerts.backend.types.updated'));
    }

    /**
     * @param Type              $type
     * @param ManageTypeRequest $request
     *
     * @return mixed
     */
    public function destroy(Type $type, ManageTypeRequest $request)
    {
        $this->typeRepository->deleteById($type->id);

        event(new TypeDeleted($type));

        return redirect()->route('admin.ctdb.type.index')->withFlashSuccess(__('alerts.backend.types.deleted'));
    }
}
