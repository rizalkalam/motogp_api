<?php

namespace App\Http\Controllers\admin;

use App\Models\Rider;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CircuitController extends Controller
{
    public function index(Rider $rider)
    {
        return view('circuit.all_circuit', [
            
        ]);
    }
}
