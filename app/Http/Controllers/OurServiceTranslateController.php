<?php

namespace App\Http\Controllers;

use App\Http\Requests\OurServiceTranslationRequest;
use App\Models\OurServiceTranslation;
use App\Models\SystemLanguage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class OurServiceTranslateController extends Controller
{
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
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(OurServiceTranslationRequest $request)
    {
        $request->validated();
        $ourservice_id = Crypt::decrypt($request->ourservice_id);
        $languages = SystemLanguage::all()->toArray();
        $data = array_map(function ($title, $text, $locale) use ($ourservice_id) {
            return [
                'title' => $title,
                'text' => $text,
                'locale' => $locale['locale'],
                'our_service_id' => $ourservice_id,
            ];
        }, $request->title, $request->text, $languages);
        OurServiceTranslation::upsert($data, ['locale', 'our_service_id']);
        return redirect()->route('ourservice.show', $ourservice_id)->with('success', 'Record updated successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(OurServiceTranslation $ourServiceTranslation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(OurServiceTranslation $ourServiceTranslation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, OurServiceTranslation $ourServiceTranslation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(OurServiceTranslation $ourServiceTranslation)
    {
        //
    }
}
