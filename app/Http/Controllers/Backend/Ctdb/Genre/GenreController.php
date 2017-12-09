<?php

namespace App\Http\Controllers\Backend\Ctdb\Genre;

use App\Models\Ctdb\Genre;
use App\Http\Controllers\Controller;
use App\Events\Backend\Ctdb\Genre\GenreDeleted;
use App\Repositories\Backend\Ctdb\GenreRepository;
use App\Http\Requests\Backend\Ctdb\Genre\StoreGenreRequest;
use App\Http\Requests\Backend\Ctdb\Genre\ManageGenreRequest;
use App\Http\Requests\Backend\Ctdb\Genre\UpdateGenreRequest;

/**
 * Class GenreController.
 */
class GenreController extends Controller
{
    /**
     * @var GenreRepository
     */
    protected $genreRepository;

    /**
     * GenreController constructor.
     *
     * @param GenreRepository $genreRepository
     */
    public function __construct(GenreRepository $genreRepository)
    {
        $this->genreRepository = $genreRepository;
    }

    /**
     * @param ManageGenreRequest $request
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index(ManageGenreRequest $request)
    {
        return view('backend.ctdb.genre.index')
            ->withGenres($this->genreRepository->getPaginated(3, 'name', 'asc'));
    }

    /**
     * @param ManageGenreRequest    $request
     *
     * @return mixed
     */
    public function create(ManageGenreRequest $request)
    {
        return view('backend.ctdb.genre.create');
    }

    /**
     * @param StoreGenreRequest $request
     *
     * @return mixed
     */
    public function store(StoreGenreRequest $request)
    {
        $this->genreRepository->create($request->only(
            'name',
            'user_id'
        ));

        return redirect()->route('admin.ctdb.genre.index')->withFlashSuccess(__('alerts.backend.genres.created'));
    }

    /**
     * @param Genre              $genre
     * @param ManageGenreRequest $request
     *
     * @return mixed
     */
    public function show(Genre $genre, ManageGenreRequest $request)
    {
        return view('backend.ctdb.genre.show')
            ->withGenre($genre);
    }

    /**
     * @param Genre                 $genre
     * @param ManageGenreRequest    $request
     *
     * @return mixed
     */
    public function edit(Genre $genre, ManageGenreRequest $request)
    {
        return view('backend.ctdb.genre.edit')
            ->withGenre($genre);
    }

    /**
     * @param Genre              $genre
     * @param UpdateGenreRequest $request
     *
     * @return mixed
     */
    public function update(Genre $genre, UpdateGenreRequest $request)
    {
        $this->genreRepository->update($genre, $request->only(
            'name',
            'user_id'
        ));

        return redirect()->route('admin.ctdb.genre.index')->withFlashSuccess(__('alerts.backend.genres.updated'));
    }

    /**
     * @param Genre              $genre
     * @param ManageGenreRequest $request
     *
     * @return mixed
     */
    public function destroy(Genre $genre, ManageGenreRequest $request)
    {
        $this->genreRepository->deleteById($genre->id);

        event(new GenreDeleted($genre));

        return redirect()->route('admin.ctdb.genre.index')->withFlashSuccess(__('alerts.backend.genres.deleted'));
    }
}
