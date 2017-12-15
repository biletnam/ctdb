<?php

namespace App\Http\Controllers\Backend\Ctdb\Venue;

use CountryState;
use App\Models\Ctdb\Venue;
use App\Http\Controllers\Controller;
use App\Events\Backend\Ctdb\Venue\VenueDeleted;
use App\Repositories\Backend\Ctdb\VenueRepository;
use App\Http\Requests\Backend\Ctdb\Venue\StoreVenueRequest;
use App\Http\Requests\Backend\Ctdb\Venue\ManageVenueRequest;
use App\Http\Requests\Backend\Ctdb\Venue\UpdateVenueRequest;

/**
 * Class VenueController.
 */
class VenueController extends Controller
{
    /**
     * @var VenueRepository
     */
    protected $venueRepository;

    /**
     * VenueController constructor.
     *
     * @param VenueRepository $venueRepository
     */
    public function __construct(VenueRepository $venueRepository)
    {
        $this->venueRepository = $venueRepository;
    }

    /**
     * @param ManageVenueRequest $request
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index(ManageVenueRequest $request)
    {
        return view('backend.ctdb.venue.index')
            ->withVenues($this->venueRepository->getPaginated(3, 'name', 'asc'));
    }

    /**
     * @param ManageVenueRequest    $request
     *
     * @return mixed
     */
    public function create(ManageVenueRequest $request)
    {
        $states = CountryState::getStates('US');
        return view('backend.ctdb.venue.create', compact('states'));
    }

    /**
     * @param StoreVenueRequest $request
     *
     * @return mixed
     */
    public function store(StoreVenueRequest $request)
    {
        $this->venueRepository->create($request->only(
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
            'user_id'
        ));

        return redirect()->route('admin.ctdb.venue.index')->withFlashSuccess(__('alerts.backend.venues.created'));
    }

    /**
     * @param Venue              $venue
     * @param ManageVenueRequest $request
     *
     * @return mixed
     */
    public function show(Venue $venue, ManageVenueRequest $request)
    {
        return view('backend.ctdb.venue.show')
            ->withVenue($venue);
    }

    /**
     * @param Venue                 $venue
     * @param ManageVenueRequest    $request
     *
     * @return mixed
     */
    public function edit(Venue $venue, ManageVenueRequest $request)
    {
        return view('backend.ctdb.venue.edit')
            ->withVenue($venue);
    }

    /**
     * @param Venue              $venue
     * @param UpdateVenueRequest $request
     *
     * @return mixed
     */
    public function update(Venue $venue, UpdateVenueRequest $request)
    {
        $this->venueRepository->update($venue, $request->only(
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
            'user_id'
        ));

        return redirect()->route('admin.ctdb.venue.index')->withFlashSuccess(__('alerts.backend.venues.updated'));
    }

    /**
     * @param Venue              $venue
     * @param ManageVenueRequest $request
     *
     * @return mixed
     */
    public function destroy(Venue $venue, ManageVenueRequest $request)
    {
        $this->venueRepository->deleteById($venue->id);

        event(new VenueDeleted($venue));

        return redirect()->route('admin.ctdb.venue.index')->withFlashSuccess(__('alerts.backend.venues.deleted'));
    }
}
