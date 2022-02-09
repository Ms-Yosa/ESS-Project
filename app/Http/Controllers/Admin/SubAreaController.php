<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\CreateSubjectRequest;
use App\Http\Requests\UpdateSubjectRequest;
use App\Repositories\SubjectRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use App\Models\SubArea;
use App\Models\Classes;
use Flash;
use Response;

class SubAreaController extends AppBaseController
{

    //Create new subject area
    public function createArea(Request $request){
        //validate Inputs
        $request->validate([
            'name'=>'required',
            'class_id'=>'required',
        ]);

        //Insert Admin in table
        $subArea = new SubArea();
          $subArea->name = $request->name;
          $subArea->class_id = $request->class_id;
          $save = $subArea->save();

          if( $save ){
            return redirect()->route('admin.class-management.subjects.index')->with('success','New admin has been registered successfully');
        }else{
            return redirect()->back()->with('fail','Something went wrong, failed to register');
    }
    }

    public function edit($id)
    {
        $subArea = SubArea::find($id);
        $class = Classes::all();
        //dd($subArea->toArray());
        if (empty($subArea)) {
            Flash::error('Subject Area not found');

            return redirect(route('admin.subjects'));
        }

        return view('admin.class-management.subjects.subj-area-edit')->with('subArea', $subArea)->with('class', $class);
    }

    public function update(Request $request, $id)
    {
        $subArea = SubArea::find($id);

        $subArea->name = $request->name;

        if($request->class_id){
            $subArea->class_id = $request->class_id;
        }
        $save = $subArea->save();

        if (empty($subArea)) {
            Flash::error('Subject Area not found');

            return redirect(route('admin.subjects'));
        }

        Flash::success('Subject Area updated successfully.');

        return redirect(route('admin.subjects'));
    }

    public function destroy($id)
    {
        $subArea = SubArea::find($id);

        if (empty($subArea)) {
            Flash::error('Area not found');

            return redirect(route('admin.subjects'));
        }

        $subArea -> delete();

        Flash::success('Subject Area deleted successfully.');

        return redirect(route('admin.subjects'));
    }
}
