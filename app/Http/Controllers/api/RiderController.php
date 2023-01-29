<?php

namespace App\Http\Controllers\api;

use App\Models\Rider;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RiderController extends Controller
{
    public function index()
    {
        $data = array();
        $riders = Rider::all();
        foreach ($riders as $rider) {
            $data[]=[
                'id'=>$rider->id,
                'team_id'=>$rider->team_id,
                'name'=>$rider->name,
                'number'=>$rider->number,
                'team_name'=>$rider->team->name,
                'img_flag'=>$rider->img_flag,
                'img_rider'=>$rider->img_rider,
                'icon_rider'=>$rider->icon_rider,
                'main_color'=>$rider->team->main_color
            ];
        }

        return response()->json(['Riders'=>$data]);
    }

    public function details($id)
    {
        $rider = Rider::whereId($id)->first();
        if ($rider) {
            return response()->json([
                'success' => true,
                'message' => 'Detail Rider!',
                'data'    => $rider
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
