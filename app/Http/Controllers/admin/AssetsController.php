<?php

namespace App\Http\Controllers\admin;

use App\Models\Asset;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AssetsController extends Controller
{
    public function index()
    {
        return view('assets',[
            'assets'=>Asset::all()
        ]);
    }

    public function create(Request $request)
    {
        $data = Asset::create($request->all());
        if ($request->hasFile('asset')) {
            $request->file('asset')->move('images/', $request->file('asset')->getClientOriginalName());
            $data->asset = $request->file('asset')->getClientOriginalName();
            $data->save();
        }

        return redirect('/dashboard/assets')->with('success', 'Asset has been added !');
    }

    public function destroy(Asset $asset)
    {
        Asset::destroy($asset->id);
        return redirect('/dashboard/assets')->with('success', 'Rider has been deleted !');
    }
}
