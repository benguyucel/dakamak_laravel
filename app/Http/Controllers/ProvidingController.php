<?php

namespace App\Http\Controllers;

use App\Models\ProvidingSolition;
use App\Models\TemporaryFile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;


class ProvidingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $providingSolitions = ProvidingSolition::all();
        return view('back.providingsolitions.index', ['providingSolutions' => $providingSolitions]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('back.providingsolitions.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'description' => 'required',
            'itemIcon' => 'required'
        ]);

        $tmp_file = TemporaryFile::where('folder', $request->itemIcon)->first();

        if ($validator->fails() && $tmp_file) {
            Storage::deleteDirectory('uploads/tmp/' . $tmp_file->folder);
            $tmp_file->delete();
            return redirect()->route('providingsolitions.create')->withErrors($validator)->withInput();
        } else if ($validator->fails()) {
            return redirect()->route('providingsolitions.create')->withErrors($validator)->withInput();
        }
        if ($tmp_file) {
            Storage::copy('uploads/tmp/' . $tmp_file->folder . '/' . $tmp_file->file, 'uploads/' . $tmp_file->folder . '/' . $tmp_file->file);
            ProvidingSolition::create([
                'description' => $request->description,
                'item_icon' => $tmp_file->folder . '/' . $tmp_file->file
            ]);
            Storage::deleteDirectory('uploads/tmp/' . $tmp_file->folder);
            $tmp_file->delete();
            return redirect()->route('providingsolitions.index');
        }
        return redirect()->route('providingsolitions.index');
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
    public function edit(int $id)
    {
        $findSolution = ProvidingSolition::find($id)->get();
        return view('back.providingsolitions.edit', ['providingSolution' => $findSolution]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $findSolution = ProvidingSolition::find($id);
        $validator = Validator::make($request->all(), [
            'itemIcon' => 'nullable',
            'description' => 'required'
        ]);
        if ($validator->fails()) {
            return redirect()->route('providingsolitions.edit', $id)->withErrors($validator)->withInput();
        }
        if ($request->itemIcon) {
            $tmp_file = TemporaryFile::where('folder', $request->itemIcon)->first();
            Storage::copy('uploads/tmp/' . $tmp_file->folder . '/' . $tmp_file->file, 'uploads/' . $tmp_file->folder . '/' . $tmp_file->file);
            Storage::deleteDirectory('uploads/' . get_filename($findSolution->item_icon));
            $findSolution->item_icon = $tmp_file->folder . '/' . $tmp_file->file;
        }
        $findSolution->description = $request->description;
        $tmp_file->delete();
        $findSolution->save();
        return redirect()->route('providingsolitions.index')->with('success', 'Record updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        $findSolution = ProvidingSolition::find($id);
        if ($findSolution) {
            Storage::deleteDirectory('uploads/' . get_filename($findSolution->item_icon));
            $findSolution->delete();
        }
        return redirect()->route('providingsolitions.index')->with('success', 'Record deleted successfully.');
    }




    public function uploadTmpFile(Request $request)
    {
        if ($request->hasFile('itemIcon')) {
            $image =  $request->file('itemIcon');
            $file_name = $image->getClientOriginalName();
            $folder = uniqid('item_icon', true);
            $image->storeAs('uploads/tmp/' . $folder, $file_name);
            TemporaryFile::create([
                'folder' => $folder,
                'file' => $file_name
            ]);
            return $folder;
        }
        return "";
    }

    public function deleteTmpFile()
    {
        $tmp_file = TemporaryFile::where('folder', request()->getContent())->first();
        if ($tmp_file) {
            Storage::deleteDirectory('uploads/tmp/' . $tmp_file->folder);
            $tmp_file->delete();
            return response();
        }
    }
}
