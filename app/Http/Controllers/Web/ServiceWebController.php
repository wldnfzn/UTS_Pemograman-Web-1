<?php
namespace App\Http\Controllers\Web;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Service;

class ServiceWebController extends Controller
{
    public function index(Request $req)
    {
        $services = Service::where('is_published', true)->orderBy('created_at','desc')->paginate(6);
        return view('pages.services.index', compact('services'));
    }

    public function show($slug)
    {
        $service = Service::where('slug', $slug)->firstOrFail();
        return view('pages.services.show', compact('service'));
    }
}
