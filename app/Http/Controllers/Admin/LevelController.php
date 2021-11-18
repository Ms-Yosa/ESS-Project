<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\CreateLevelRequest;
use App\Http\Requests\UpdateLevelRequest;
use App\Repositories\LevelRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class LevelController extends AppBaseController
{
    /** @var  LevelRepository */
    private $levelRepository;

    public function __construct(LevelRepository $levelRepo)
    {
        $this->levelRepository = $levelRepo;
    }

    /**
     * Display a listing of the Level.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $levels = $this->levelRepository->all();

        return view('admin.class-management.levels.index')
            ->with('levels', $levels);
    }


    /**
     * Store a newly created Level in storage.
     *
     * @param CreateLevelRequest $request
     *
     * @return Response
     */
    public function store(CreateLevelRequest $request)
    {
        $input = $request->all();

        $level = $this->levelRepository->create($input);

        Flash::success('Level saved successfully.');

        return redirect(route('admin.levels'));
    }


    /**
     * Show the form for editing the specified Level.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $level = $this->levelRepository->find($id);

        if (empty($level)) {
            Flash::error('Level not found');

            return redirect(route('admin.levels'));
        }

        return view('admin.class-management.levels.edit')->with('level', $level);
    }

    /**
     * Update the specified Level in storage.
     *
     * @param int $id
     * @param UpdateLevelRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateLevelRequest $request)
    {
        $level = $this->levelRepository->find($id);

        if (empty($level)) {
            Flash::error('Level not found');

            return redirect(route('admin.levels'));
        }

        $level = $this->levelRepository->update($request->all(), $id);

        Flash::success('Level updated successfully.');

        return redirect(route('admin.levels'));
    }

    /**
     * Remove the specified Level from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $level = $this->levelRepository->find($id);

        if (empty($level)) {
            Flash::error('Level not found');

            return redirect(route('admin.levels'));
        }

        $this->levelRepository->delete($id);

        Flash::success('Level deleted successfully.');

        return redirect(route('admin.levels'));
    }
}
