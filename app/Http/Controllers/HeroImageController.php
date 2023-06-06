<?php

namespace App\Http\Controllers;

use App\Http\Requests\HeroImageRequest;
use App\Models\StaticContent;
use Illuminate\Http\Request;
use Image;



class HeroImageController extends Controller
{
    private $_path = 'app/public/uploads/';
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('back.staticcontents.heroimage.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(HeroImageRequest $request)
    {
        $request->validated();
        if ($request->file('hero_image')) {
            $find_hero = StaticContent::where('id', 1)->select('hero_image')->first();
            $image = $request->file('hero_image');
            $filename = !$find_hero->hero_image ? 'hero_image' . time() . '.' . $image->getClientOriginalExtension() : $find_hero->hero_image;
            //1732x1513
            Image::make($image)->fit(1732, 1513, function ($constraint) {
                $constraint->upsize();
            })->save(storage_path($this->_path . $filename));
            StaticContent::upsert([
                'hero_image' => $filename,
                'id' => 1
            ], ['id']);
            return redirect()->route('heroimage.create')->with('success', 'Hero image created Successfully');
        }
        return redirect()->route('heroimage.create');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
