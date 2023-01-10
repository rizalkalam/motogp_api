<?php

namespace App\Http\Controllers\api;

use App\Models\Team;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TeamController extends Controller
{
    public function index()
    {
        $data = Team::all();

        return response()->json(['Teams'=>$data]);
    }
}
