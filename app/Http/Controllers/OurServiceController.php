<?php

namespace App\Http\Controllers;

use App\Http\Requests\OurServiceRequest;
use App\Http\Requests\UpdateOurServiceRequest;
use App\Models\OurService;
use App\Models\OurServiceTranslation;
use Illuminate\Support\Facades\Storage;
use Image;

class OurServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    private   $_path = 'app/public/uploads/ourservice/';

    public function index()
    {
        $ourServices = OurService::all();
        return view('back.ourservice.index', ['ourServices' => $ourServices]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('back.ourservice.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(OurServiceRequest $request)
    {
        $request->validated();
        $image = $request->file('itemIcon');
        $filename =  time() . '.' . $image->getClientOriginalExtension();
        Image::make($image)->save(storage_path($this->_path . $filename));
        OurService::create([
            'item_icon' => $filename,
            'description' => $request->description
        ]);
        return redirect()->route('ourservice.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
        $ourservice = OurService::where('id', $id)->first();
        $ourservicetrans = OurServiceTranslation::where('our_service_id', $id)->get()->toArray();
        return view('back.ourservice.show', compact('ourservice', 'ourservicetrans'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $id)
    {
        $ourService = OurService::where('id', $id)->first();
        return view('back.ourservice.edit', ['ourService' => $ourService]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateOurServiceRequest $request, int $id)
    {
        $request->validated();
        $findSolution = OurService::where('id', $id)->first();
        if ($request->file('itemIcon')) {
            $image = $request->file('itemIcon');
            Image::make($image)->save(storage_path($this->_path . $findSolution->item_icon));
        }
        $findSolution->description = $request->description;
        $findSolution->save();
        return redirect()->route('ourservice.index')->with('success', 'Record updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        $findSolution = OurService::where('id', $id)->first();
        if (Storage::exists('')) {
            Storage::delete($this->_path . $findSolution->item_icon);
        }
        $findSolution->delete();

        return redirect()->route('ourservice.index')->with('success', 'Record deleted successfully.');
    }
}
