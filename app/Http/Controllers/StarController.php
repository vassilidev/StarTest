<?php

namespace App\Http\Controllers;

use App\Models\Star;
use App\Http\Requests\StoreStarRequest;
use App\Http\Requests\UpdateStarRequest;
use App\Services\StarService;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Gate;
use Inertia\Inertia;
use Inertia\Response;

class StarController extends Controller
{
    /**
     * @var StarService
     */
    public StarService $starService;

    /**
     * @param StarService $starService
     */
    public function __construct(StarService $starService)
    {
        $this->starService = $starService;

        $this->authorizeResource(Star::class);
    }

    /**
     * Display a listing of the star.
     *
     * @return Response
     */
    public function index(): Response
    {
        return Inertia::render('Stars/StarIndex', [
            'stars' => $this->starService->index(),
            'can'   => [
                'create' => Gate::check('create', Star::class),
            ],
        ]);
    }

    /**
     * Show the form for creating a new star.
     *
     * @return Response
     */
    public function create(): Response
    {
        return Inertia::render('Stars/StarCreate', [
            'can' => [
                'viewAny' => Gate::check('viewAny', Star::class),
            ],
        ]);
    }

    /**
     * Store a newly created star in storage.
     *
     * @param StoreStarRequest $request
     *
     * @return RedirectResponse
     */
    public function store(StoreStarRequest $request): RedirectResponse
    {
        Star::query()->create($request->validated());

        flash(__('Star successfully created !'));

        return to_route('stars.index');
    }

    /**
     * Show the form for editing the specified star.
     *
     * @param Star $star
     *
     * @return Response
     */
    public function edit(Star $star): Response
    {
        return Inertia::render('Stars/StarEdit', [
            'star' => $star,
            'can'  => [
                'viewAny' => Gate::check('viewAny', Star::class),
            ],
        ]);
    }

    /**
     * Update the specified star in storage.
     *
     * @param UpdateStarRequest $request
     * @param Star              $star
     *
     * @return RedirectResponse
     */
    public function update(UpdateStarRequest $request, Star $star): RedirectResponse
    {
        $star->update($request->validated());

        flash(__('Star successfully updated !'));

        return to_route('stars.index');
    }

    /**
     * Remove the specified star from storage.
     *
     * @param Star $star
     *
     * @return RedirectResponse
     */
    public function destroy(Star $star): RedirectResponse
    {
        $star->delete();

        flash(__('Star successfully deleted !'));

        return to_route('stars.index');
    }
}
