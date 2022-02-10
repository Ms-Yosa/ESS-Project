<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\CreateClassesRequest;
use App\Http\Requests\UpdateClassesRequest;
use App\Repositories\ClassesRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;
use Flash;
use Response;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\QueryException;
use App\Models\Subject;
use App\Models\User;
use App\Models\Classes;
use App\Models\Faculty;

class ClassesController extends AppBaseController
{
    /** @var  ClassesRepository */
    private $classesRepository;

    public function __construct(ClassesRepository $classesRepo)
    {
        $this->classesRepository = $classesRepo;
    }

    /**
     * Display a listing of the Classes.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $classes = Classes::with('getStudents','getInstructor','faculty','getSubjects','getSubArea')->get();
        $faculty = Faculty::all();
        $subject = Subject::all();

        return view('admin.class-management.classes.index', compact('faculty','subject'))->with('classes', $classes);
    }

    /**
     * Show the form for creating a new Classes.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.class-management.classes.index');
    }

    /**
     * Store a newly created Classes in storage.
     *
     * @param CreateClassesRequest $request
     *
     * @return Response
     */
    public function store(CreateClassesRequest $request)
    {
        $input = $request->all();

        $classes = $this->classesRepository->create($input);

        Toastr::success('Class added successfully','Success');

        return redirect(route('admin.classes'));
    }


    /**
     * Show the form for editing the specified Classes.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $classes = $this->classesRepository->find($id);
        $faculty = Faculty::all();
        $subject = Subject::all();

        if (empty($classes)) {
            Toastr::error('Class not found', 'Error');

            return redirect(route('admin.classes'));
        }

        return view('admin.class-management.classes.edit', compact('faculty','subject'))->with('classes', $classes);
    }

    /**
     * Update the specified Classes in storage.
     *
     * @param int $id
     * @param UpdateClassesRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateClassesRequest $request)
    {
        $classes = $this->classesRepository->find($id);

        if (empty($classes)) {
            Toastr::error('Class not found', 'Error');

            return redirect(route('admin.classes'));
        }

        $classes = $this->classesRepository->update($request->all(), $id);

        Toastr::success('Class updated successfully','Success');

        return redirect(route('admin.classes'));
    }

    /**
     * Remove the specified Classes from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $classes = $this->classesRepository->find($id);

        if (empty($classes)) {
            Flash::error('Classes not found');

            return redirect(route('admin.classes'));
        }

        try {
            $this->classesRepository->delete($id);
            Toastr::success('Class deleted successfully','Success');
        } catch (QueryException $e) {
            Toastr::error('Class delete failed. Class is still in use.','Failed');
        }

        return redirect(route('admin.classes'));
    }
}
