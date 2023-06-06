<?php

namespace App\Http\Controllers;

use App\Http\Requests\LogoRequest;
use App\Models\SiteSetting;
use Image;

class LogoController extends Controller
{
    public function create()
    {
        return view('back.sitesettings.logo.create');
    }
    public function store(LogoRequest $request)
    {
        $request->validated();
        $path = 'app/public/uploads/';
        $image = $request->file('logo');
        $filename =  'dakamak_logo.' . $image->getClientOriginalExtension();
        Image::make($image)->resize(170, 50, function ($constraint) {
            $constraint->upsize();
        })->save(storage_path($path . $filename));
        SiteSetting::upsert([
            'logo' => $filename,
            'id' => 1
        ], ['id']);
        return redirect()->route('logo.create')->with('success', 'Logo created successfully');
    }
}
