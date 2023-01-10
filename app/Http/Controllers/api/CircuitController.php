<?php

namespace App\Http\Controllers\api;

use App\Models\Circuit;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CircuitController extends Controller
{
    public function index()
    {
        $data = Circuit::all();

        return response()->json(['Circuits'=>$data]);
    }
}
