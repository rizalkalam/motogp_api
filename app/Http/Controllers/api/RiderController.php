<?php

namespace App\Http\Controllers\api;

use App\Models\Rider;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RiderController extends Controller
{
    public function index()
    {
        $data = Rider::all();

        return response()->json(['Riders'=>$data]);
    }
}
