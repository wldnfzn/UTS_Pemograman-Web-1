<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Service;

class PageController extends Controller
{
    public function home()
    {
        $featured = Service::where('is_published',true)->take(3)->get();
        return view('pages.home', compact('featured'));
        
        $featured = \App\Models\Service::where('is_published',true)->take(3)->get();
        return view('pages.home', compact('featured'));
    }

    public function about()
    {
        return view('pages.about');
    }
}
