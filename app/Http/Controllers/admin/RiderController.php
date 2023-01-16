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
        return view('rider.all_rider', [
            'riders'=>Rider::all(),
            'data'=>$rider,
            'team'=>Team::all()
        ]);
    }

    public function show(Rider $rider)
    {
        return view('rider.detail_rider',[
            'rider'=>$rider,
            'team'=>Team::all()
        ]);
    }

    public function store(Request $request)
    {
        $data = Rider::create($request->all());
        if ($request->hasFile('img_flag')) {
            $request->file('img_flag')->move('images/', $request->file('img_flag')->getClientOriginalName());
            $data->img_flag = $request->file('img_flag')->getClientOriginalName();
            $data->save();
        }
        if ($request->hasFile('img_rider')) {
            $request->file('img_rider')->move('images/', $request->file('img_rider')->getClientOriginalName());
            $data->img_rider = $request->file('img_rider')->getClientOriginalName();
            $data->save();
        }
        
        // $validateData = $request->validate([
        //     'team_id'=>'required',
        //     'name'=>'required',
        //     'number'=>'required',
        //     'nationality'=>'required',
        //     'img_rider'=>'image|file|max:9024',
        //     'icon_rider'=>'required',
        // ]);

        // if ($request->file('img_rider')) {
        //     $validateData['img_rider'] = $request->file('img_rider')->move(pubic_path('foto'));
        // }
        

        // Rider::create($validateData);
        return redirect('/dashboard/riders')->with('success', 'Rider has been added !');
    }

    public function update(Request $request, Rider $rider)
    {
        $validateData = $request->validate([
            'team_id'=>'required',
            'name'=>'required',
            'number'=>'required',
            // 'nationality'=>'required',
            'img_flag'=>'image|file|max:9024',
            'img_rider'=>'image|file|max:9024',
            'icon_rider'=>'required',
        ]);

        if ($request->file('img_flag')) {
            $request->file('img_flag')->move('images/', $request->file('img_flag')->getClientOriginalName());
            $validateData['img_flag'] =  $request->file('img_flag')->getClientOriginalName();
        }

        if ($request->file('img_rider')) {
            $request->file('img_rider')->move('images/', $request->file('img_rider')->getClientOriginalName());
            $validateData['img_rider'] =  $request->file('img_rider')->getClientOriginalName();
        }

        Rider::where('id',$rider->id)->update($validateData);
        return redirect('/dashboard/riders')->with('success', 'Rider has been updated !');
    }

    public function destroy(Rider $rider)
    {
        Rider::destroy($rider->id);
        return redirect('/dashboard/riders')->with('success', 'Rider has been deleted !');
    }
}
