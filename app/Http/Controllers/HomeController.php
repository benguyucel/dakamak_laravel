<?php

namespace App\Http\Controllers;

use App\Models\BestValue;
use App\Models\OurService;
use App\Models\ProvidingSolition;
use App\Models\StaticContent;
use Illuminate\View\View;

class HomeController extends Controller
{
    public function Index(): View
    {
        $staticContent = StaticContent::get();

        return view('front.home', ["staticContent" => $staticContent]);
    }
    public function About(): View
    {
        $bestvalues = BestValue::get();
        return view('front.about',compact('bestvalues'));
    }
    public function Contact(): View
    {
        return view('front.contact');
    }
}
