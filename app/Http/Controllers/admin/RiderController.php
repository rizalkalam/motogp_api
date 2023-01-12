<?php

namespace App\Http\Controllers\admin;

use App\Models\Team;
use App\Models\Rider;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RiderController extends Controller
{
    public function index(Rider $rider)
    {
        return view('post.riders', [
            'riders'=>Rider::all(),
            'data'=>$rider,
            'team'=>Team::all()
        ]);
    }

    public function show(Rider $rider)
    {
        return view('post.detail_rider',[
            'rider'=>$rider,
            'team'=>Team::all()
        ]);
    }

    public function store(Request $request)
    {
        $validateData = $request->validate([
            'team_id'=>'required',
            'name'=>'required',
            'number'=>'required',
            'nationality'=>'required',
            'img_rider'=>'required',
            'icon_rider'=>'required',
        ]);

        // if ($request->file('image')) {
        //     $validateData['image'] = $request->file('image')->store('post-images');
        // }

        Rider::create($validateData);
        return redirect('/dashboard/riders')->with('success', 'Rider has been added !');
    }

    public function update(Request $request, Rider $rider)
    {
        $validateData = $request->validate([
            'team_id'=>'required',
            'name'=>'required',
            'number'=>'required',
            'nationality'=>'required',
            'img_rider'=>'required',
            'icon_rider'=>'required',
        ]);

        //  if ($request->file('image')) {
        //     $validateData['image'] = $request->file('image')->store('post-images');
        // }

        Rider::where('id',$rider->id)->update($validateData);
        return redirect('/dashboard/riders')->with('success', 'Rider has been updated !');
    }

    public function destroy(Rider $rider)
    {
        Rider::destroy($rider->id);
        return redirect('/dashboard/riders')->with('success', 'Rider has been deleted !');
    }
}
