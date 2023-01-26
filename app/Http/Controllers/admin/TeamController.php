<?php

namespace App\Http\Controllers\admin;

use App\Models\Team;
use App\Models\Rider;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TeamController extends Controller
{
    public function index(Team $team)
    {
        return view('team.all_team',[
            'teams'=>Team::all(),
            'data'=>$team,
            'rider'=>Rider::all()
        ]);
    }
    
    public function show(Team $team)
    {
        return view('team.detail_team',[
            'team'=>$team,
            'rider'=>Rider::all()
        ]);
    }

    public function store(Request $request)
    {
        $data = Team::create($request->all());
        if ($request->hasFile('img_bike')) {
            $request->file('img_bike')->move('images/', $request->file('img_bike')->getClientOriginalName());
            $data->img_bike = $request->file('img_bike')->getClientOriginalName();
            $data->save();

            return redirect('/dashboard/teams')->with('success', 'Team has been added !');
        }
    }

    public function update(Request $request, Team $team)
    {
        $validateData = $request->validate([
            // 'rider_id'=>'required',
            'name'=>'required',
            'bike'=>'required',
            'img_bike'=>'required',
            'main_color'=>'required'
        ]);

        if ($request->file('img_bike')) {
            $request->file('img_bike')->move('images/', $request->file('img_bike')->getClientOriginalName());
            $validateData['img_bike'] = $request->file('img_bike')->getClientOriginalName();
        }

        Team::where('id', $team->id)->update($validateData);
        return redirect('/dashboard/teams')->with('success', 'Team has been updated !');
    }

    public function destroy(Team $team)
    {
        Team::destroy($team->id);
        return redirect('/dashboard/teams')->with('success', 'Team has been deleted !');
    }
}
