<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\CreateSubjectRequest;
use App\Http\Requests\UpdateSubjectRequest;
use App\Repositories\SubjectRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use App\Models\SubArea;
use App\Models\Subject;
use App\Models\Classes;
use Flash;
use Response;

class SubjectController extends AppBaseController
{
    /** @var  SubjectRepository */
    private $subjectRepository;

    public function __construct(SubjectRepository $subjectRepo)
    {
        $this->subjectRepository = $subjectRepo;
    }

    /**
     * Display a listing of the Subject.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $subjects = $this->subjectRepository->all();
        $subArea = SubArea::with('class','subjects')->get();
        $class = Classes::all();
        //dd($subArea->toArray());

        return view('admin.class-management.subjects.index', compact('subArea','class'))
            ->with('subjects', $subjects);
    }

    /**
     * Store a newly created Subject in storage.
     *
     * @param CreateSubjectRequest $request
     *
     * @return Response
     */
    public function store(CreateSubjectRequest $request)
    {
        $input = $request->all();

        $subject = $this->subjectRepository->create($input);

        Flash::success('Subject saved successfully.');

        return redirect(route('admin.subjects'));
    }

    /**
     * Show the form for editing the specified Subject.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $subject = $this->subjectRepository->find($id);

        if (empty($subject)) {
            Flash::error('Subject not found');

            return redirect(route('admin.subjects'));
        }

        return view('admin.class-management.subjects.subject-edit')->with('subject', $subject);
    }

    /**
     * Update the specified Subject in storage.
     *
     * @param int $id
     * @param UpdateSubjectRequest $request
     *
     * @return Response
     */
    public function update($id, Request $request)
    {
        $subject = Subject::find($id);
        if (empty($subject)) {
            Flash::error('Subject not found');

            return redirect(route('admin.subjects'));
        }

        if($request->subArea_id){
            $subject->subArea_id = $request->subArea_id;
        }
        if($request->status){
            $subject->status = $request->status;
        }

        $subject->subject_name = $request->subject_name;
        $subject->subject_code = $request->subject_code;
        $subject->description = $request->description;


        $subject -> save();
        Flash::success('Subject updated successfully.');

        return redirect(route('admin.subjects'));
    }

    /**
     * Remove the specified Subject from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $subject = Subject::find($id);
        //dd($subject->toArray());

        $subject -> delete();

        Flash::success('Subject deleted successfully.');

        return redirect(route('admin.subjects'));
    }
}
