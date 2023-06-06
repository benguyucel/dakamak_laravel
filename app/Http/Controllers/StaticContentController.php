<?php

namespace App\Http\Controllers;

use App\Http\Requests\StaticContentTranslateRequest;
use App\Http\Requests\TaglineImageRequest;
use App\Models\StaticContent;
use App\Models\StaticContentTranslation;
use App\Models\SystemLanguage;
use App\Models\TemporaryFile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class StaticContentController extends Controller
{

    private $_path = 'app/public/uploads/';

    public function Tagline()
    {

        $taglineContent  = StaticContent::where('id', 1)->get()->toArray();
        $taglineContent = $taglineContent[0]['translations'];
        return view('back.staticcontents.tagline', compact('taglineContent'));
    }

    public function TaglinePost(Request $request)
    {
        $languages = SystemLanguage::all()->toArray();
        $data = array_map(function ($bottom_tagline_text, $locale) {
            return [
                'bottom_tagline_text' => $bottom_tagline_text,
                'locale' => $locale['locale'],
                'static_content_id' => 1,
            ];
        }, $request->bottom_tagline_text, $languages);
        StaticContentTranslation::upsert($data, ['locale', 'static_content_id']);
        return redirect()->route('staticcontent.tagline.index')->with('success', 'Record updated successfully.');
    }
    public function TaglineImage()
    {
        return view('back.staticcontents.taglineimage');
    }

    public function TaglineImagePost(TaglineImageRequest $request)
    {
        $request->validated();
        if ($request->file('tagline_image')) {
            $find_hero = StaticContent::where('id', 1)->select('tagline_image')->first();
            $image = $request->file('tagline_image');
            $filename = !$find_hero->tagline_image ? 'tagline_image' . time() . '.' . $image->getClientOriginalExtension() : $find_hero->tagline_image;
            //505x476
            Image::make($image)->fit(505, 476, function ($constraint) {
                $constraint->upsize();
            })->save(storage_path($this->_path . $filename));
            StaticContent::upsert([
                'tagline_image' => $filename,
                'id' => 1
            ], ['id']);
            return redirect()->route('staticcontent.taglineimage.index')->with('success', 'Tagline image created Successfully');
        }
        return redirect()->route('staticcontent.taglineimage.index');
    }








    public function AboutImage(Request $request)
    {
        return view('back.staticcontents.about_image');
    }
    public function AboutImagePost(Request $request)
    {
        $aboutHome = $request->aboutHome;
        $aboutPage = $request->aboutPage;
        $tmp_home = TemporaryFile::where('folder', $aboutHome)->first();
        $tmp_page = TemporaryFile::where('folder', $aboutPage)->first();
        $oldImages = StaticContent::where('id', 1)->first();

        $data = ['id' => 1];
        if ($tmp_home) {
            $data['about_us_home_image'] = $tmp_home->folder . '/' . $tmp_home->file;
            Storage::copy('uploads/tmp/' . $tmp_home->folder . '/' . $tmp_home->file, 'uploads/' . $tmp_home->folder . '/' . $tmp_home->file);
            if (@$oldImages->about_us_home_image) {
                Storage::deleteDirectory('uploads/' . get_filename($oldImages->about_us_home_image));
            }
            Storage::deleteDirectory('uploads/tmp/' . $tmp_home->folder);
            $tmp_home->delete();
        }
        if ($tmp_page) {
            $data['about_us_page_image'] = $tmp_page->folder . '/' . $tmp_page->file;
            Storage::copy('uploads/tmp/' . $tmp_page->folder . '/' . $tmp_page->file, 'uploads/' . $tmp_page->folder . '/' . $tmp_page->file);
            if (@$oldImages->about_us_page_image) {
                Storage::deleteDirectory('uploads/' . get_filename($oldImages->about_us_page_image));
            }
            Storage::deleteDirectory('uploads/tmp/' . $tmp_page->folder);
            $tmp_page->delete();
        }
        StaticContent::upsert($data, ['id']);
        return redirect()->back()->with('success', 'Updated Successfully');
    }
    public function AboutContent()
    {
        $aboutContent  = StaticContent::where('id', 1)->get()->toArray();
        $aboutContent = $aboutContent[0]['translations'];
        return view('back.staticcontents.about_content', compact('aboutContent'));
    }
    public function AboutContentPost(StaticContentTranslateRequest $request)
    {
        $languages = SystemLanguage::all()->toArray();
        $data = array_map(function ($title, $about, $hero, $locale) {
            return [
                'about_us_title' => $title,
                'about_us_content_text' => $about,
                'hero_text' => $hero,
                'locale' => $locale['locale'],
                'static_content_id' => 1,
            ];
        }, $request->title, $request->about, $request->hero, $languages);
        StaticContentTranslation::upsert($data, ['locale', 'static_content_id']);
        return redirect()->route('staticcontent.about_content.index')->with('success', 'Record deleted successfully.');
    }
}
