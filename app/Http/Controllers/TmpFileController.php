<?php

namespace App\Http\Controllers;

use App\Models\TemporaryFile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TmpFileController extends Controller
{
    public function uploadTmpFile(Request $request)
    {
        $image = $request->hasFile('itemIcon') ? $request->file('itemIcon') : ($request->hasFile('aboutHome') ? $request->file('aboutHome') : ($request->hasFile('aboutPage') ? $request->file('aboutPage') : null));
        if ($image != null) {
            $file_name = $image->getClientOriginalName();
            $folder = uniqid('a2ba6121cf23c80', true);
            $image->storeAs('uploads/tmp/' . $folder, $file_name);
            TemporaryFile::create([
                'folder' => $folder,
                'file' => $file_name
            ]);
            return $folder;
        } else {
            return null;
        }
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
