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
}
