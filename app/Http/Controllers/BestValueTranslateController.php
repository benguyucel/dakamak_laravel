<?php

namespace App\Http\Controllers;

use App\Http\Requests\BestValueTranslationRequest;
use App\Models\BestValueTranslation;
use App\Models\SystemLanguage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class BestValueTranslateController extends Controller
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
    public function store(BestValueTranslationRequest $request)
    {
        $request->validated();
        $bestvalue_id = Crypt::decrypt($request->bestvalue_id);
        $languages = SystemLanguage::all()->toArray();
        $data = array_map(function ($title, $text, $locale) use ($bestvalue_id) {
            return [
                'title' => $title,
                'text' => $text,
                'locale' => $locale['locale'],
                'best_value_id' => $bestvalue_id,
            ];
        }, $request->title, $request->text, $languages);
        BestValueTranslation::upsert($data, ['locale', 'best_value_id']);
        return redirect()->route('bestvalue.show', $bestvalue_id)->with('success', 'Record updated successfully.');
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
