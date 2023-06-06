<?php

namespace App\Http\Controllers;

use App\Http\Requests\BestValueRequest;
use App\Http\Requests\UpdateBestValueRequest;
use App\Models\BestValue;
use App\Models\BestValueTranslation;
use Illuminate\Support\Facades\Storage;
use Image;

class BestValueController extends Controller
{
    private   $_path = 'app/public/uploads/bestvalue/';
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $bestvalues = BestValue::all();
        return view('back.bestvalues.index', ['bestvalues' => $bestvalues]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('back.bestvalues.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(BestValueRequest $request)
    {
        $request->validated();
        $image = $request->file('itemIcon');
        $filename =  time() . '.' . $image->getClientOriginalExtension();
        Image::make($image)->save(storage_path($this->_path . $filename));
        BestValue::create([
            'item_icon' => $filename,
            'description' => $request->description
        ]);
        return redirect()->route('bestvalue.index')->with('success', 'Best value created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
        $bestvalue = BestValue::where('id', $id)->first();
        $bestvaluetrans = BestValueTranslation::where('best_value_id', $id)->get()->toArray();
        return view('back.bestvalues.show', compact('bestvalue', 'bestvaluetrans'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $id)
    {

        $bestValue = BestValue::where('id', $id)->first();
        return view('back.bestvalues.edit', ['bestValue' => $bestValue]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBestValueRequest $request, int $id)
    {
        $request->validated();
        $findSolution =  BestValue::where('id', $id)->first();
        if ($request->file('itemIcon')) {
            $image = $request->file('itemIcon');
            Image::make($image)->save(storage_path($this->_path . $findSolution->item_icon));
        }
        $findSolution->description = $request->description;
        $findSolution->save();
        return redirect()->route('bestvalue.index')->with('success', 'Record updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {

        $findBestValue = BestValue::where('id', $id)->first();;
        if (Storage::exists('')) {
            Storage::delete($this->_path . $findBestValue->item_icon);
        }
        $findBestValue->delete();
        return redirect()->route('bestvalue.index')->with('success', 'Record deleted successfully.');
    }
}
