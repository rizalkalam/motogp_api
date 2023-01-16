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
                'icon_rider'=>$rider->icon_rider
            ];
        }

        return response()->json(['Riders'=>$data]);
    }
}
