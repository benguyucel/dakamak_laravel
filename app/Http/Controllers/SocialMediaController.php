<?php

namespace App\Http\Controllers;

use App\Models\SocialMedia;
use App\Http\Requests\StoreSocialMediaRequest;
use App\Http\Requests\UpdateSocialMediaRequest;

class SocialMediaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $socialMediaLinks   = SocialMedia::all();
        return view('back.sitesettings.socialmedia.index', compact('socialMediaLinks'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('back.sitesettings.socialmedia.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(UpdateSocialMediaRequest $request)
    {

        $request->validated();
        $request["name"] = strtolower($request['name']);
        $request["link"] = strtolower($request['link']);
        $request["status"] = isset($request['status']) ? true : false;
        SocialMedia::create($request->except('_token'));
        return redirect()->route('socialmedia.create')->with('success', 'Record deleted successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(SocialMedia $socialMedia)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $id)
    {
        $socialMedia = SocialMedia::where('id', $id)->get()->first();
        return view('back.sitesettings.socialmedia.edit', compact('socialMedia'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSocialMediaRequest $request, SocialMedia $socialMedia)
    {
        $request->validated();
        $request["name"] = strtolower($request['name']);
        $request["link"] = strtolower($request['link']);
        $request["status"] = isset($request['status']) ? true : false;
        SocialMedia::upsert([$request->except('_token', '_method')], ['id']);
        return redirect()->route('socialmedia.index')->with('success', 'Record updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        SocialMedia::destroy($id);
        return redirect()->route('socialmedia.index')->with('success', 'Record deleted successfully.');
    }
}
