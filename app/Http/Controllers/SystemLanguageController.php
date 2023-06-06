<?php

namespace App\Http\Controllers;

use App\Models\SystemLanguage;
use App\Http\Requests\StoreSystemLanguageRequest;
use App\Http\Requests\UpdateSystemLanguageRequest;

class SystemLanguageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $languages = SystemLanguage::all();
        return view('back.languages.index', compact('languages'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('back.languages.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreSystemLanguageRequest $request)
    {
        $request->validated();
        SystemLanguage::create($request->only('locale', 'status', 'language'));
        return redirect()->route('system_languages.index')->with('success', 'Record created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(SystemLanguage $systemLanguage)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(SystemLanguage $systemLanguage)
    {
        return view('back.languages.edit', compact("systemLanguage"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSystemLanguageRequest $request, SystemLanguage $systemLanguage)
    {
        $request->validated();
        $findLanguage = SystemLanguage::findOrFail($systemLanguage->id);
        $findLanguage->update($request->only(['language', 'status']));
        return redirect()->route('system_languages.index')->with('success', 'Record updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $findLanguage = SystemLanguage::findOrFail($id);
        $findLanguage->delete();
        return redirect()->route('system_languages.index')->with('success', 'Record deleted successfully.');
    }
}
