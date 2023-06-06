<?php

namespace App\Http\Controllers;

use App\Models\SiteSetting;
use Illuminate\Http\Request;

class MaintainController extends Controller
{
    public function index()
    {
        $status = SiteSetting::where('id', 1)->select('status')->first();
        return view('back.maintain')->with('status', $status);
    }
    public function store(Request $request)
    {
        $status = isset($request->status) ? 1 : 0;
        SiteSetting::upsert([
            'status' => $status,
            'id'=>1
        ], ['id']);
        return redirect()->route('maintain.create')->with('success', 'Record updated successfully.');
    }
}
