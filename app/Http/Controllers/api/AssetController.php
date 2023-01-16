<?php

namespace App\Http\Controllers\api;

use App\Models\Asset;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AssetController extends Controller
{
    public function index()
    {
        $data = array();
        $assets = Asset::all();
        foreach ($assets as $item) {
            $data[]=[
                'id'=>$item->id,
                'asset'=>$item->asset,
            ];
        }

        return response()->json(['Assets'=>$data]);
    }
}
