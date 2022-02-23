<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Badge;
use App\Models\User;
use Flash;
use Response;
use Brian2694\Toastr\Facades\Toastr;

class BadgeController extends Controller
{
    public function index()
    {
        $badges = Badge::all();
        //dd($feedback->toArray());
        return view('admin.class-management.badges.index')->with('badges', $badges);
    }

    public function store(Request $request)
    {
        $image_name = time() . '-' . $request->name . '.' . $request->image->extension();

        $request->image->move(public_path('images-upload'), $image_name);
        $badge = new Badge();
        $badge->name = $request->input('name');
        $badge->description = $request->input('description');
        $badge->badge_image_path = $image_name;
        $save = $badge->save();

        // return redirect(route('admin.badge'));

        $save = $badge->save();

            if( $save ){
                Toastr::success('Add Badge Successfully','Success');
                return redirect(route('admin.badge'));
                // return redirect()->route('admin.admin-tab')->with('success','Update Information Successfully');
            }else{
                Toastr::error('Something went wrong, failed to update', 'Error');
                return redirect()->back();
                // return redirect()->back()->with('fail','Something went wrong, failed to update');
        }


    }

    public function edit($id){
        $badge = Badge::find($id);
        return view('admin.class-management.badges.edit')->with('badge', $badge);
    }

    public function update(Request $request,$id){
        $badge = Badge::find($id);

        $badge->name = $request->name;
        // $badge->save();

        $save = $badge->save();

            if( $save ){
                Toastr::success('Update Badge Successfully','Success');
                return redirect(route('admin.badge'));
                // return redirect()->route('admin.admin-tab')->with('success','Update Information Successfully');
            }else{
                Toastr::error('Something went wrong, failed to update', 'Error');
                return redirect()->back();
                // return redirect()->back()->with('fail','Something went wrong, failed to update');
        }

        // return redirect(route('admin.badge'));

    }

    public function destroy($id)
    {
        $badge = Badge::find($id);
        $delete = $badge -> delete();

        if( $delete ){
            Toastr::success('Delete Badge Successfully','Success');
            return redirect(route('admin.badge'));
            // return redirect()->route('admin.admin-tab')->with('success','Update Information Successfully');
        }else{
            Toastr::error('Something went wrong, failed to update', 'Error');
            return redirect()->back();
            // return redirect()->back()->with('fail','Something went wrong, failed to update');
    }

        // return redirect(route('admin.badge'));
    }
}

