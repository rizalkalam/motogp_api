<?php

namespace App\Http\Controllers\api;

use App\Models\Team;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TeamController extends Controller
{
    public function index()
    {
        // $data = Team::all();
        $data = array();
        $teams = Team::all();
        foreach ($teams as $team) {
            $data[]=[
                'id'=>$team->id,
                'name'=>$team->name,
                'bike'=>$team->bike,
                'img_bike'=>$team->img_bike,
                'main_color'=>$team->main_color
            ];
        }

        return response()->json(['Teams'=>$data]);
    }

    public function details($id)
    {
        $team = Team::whereId($id)->first();
        if ($team) {
            return response()->json([
                'success' => true,
                'message' => 'Detail Team!',
                'data'    => $team
            ], 200);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Team Tidak Ditemukan!',
                'data'    => ''
            ], 401);
        }
    }
}
