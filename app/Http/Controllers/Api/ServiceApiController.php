<?php
namespace App\Http\Controllers\Api;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Service;
use Illuminate\Support\Str;

class ServiceApiController extends Controller
{
    public function index(Request $req)
    {
        $perPage = $req->get('per_page', 10);
        $services = Service::where('is_published', true)->orderBy('created_at','desc')->paginate($perPage);
        return response()->json($services);
    }

    public function store(Request $req)
    {
        $data = $req->validate([
            'title'=>'required|string|max:255',
            'excerpt'=>'nullable|string',
            'content'=>'nullable|string',
            'image'=>'nullable|url',
            'price'=>'nullable|numeric',
            'is_published'=>'nullable|boolean'
        ]);

        $data['slug'] = Str::slug($data['title']).'-'.Str::random(5);
        $service = Service::create($data);
        return response()->json($service,201);
    }

    public function show(Service $service)
    {
        return response()->json($service);
    }

    public function update(Request $req, Service $service)
    {
        $data = $req->validate([
            'title'=>'sometimes|required|string|max:255',
            'excerpt'=>'nullable|string',
            'content'=>'nullable|string',
            'image'=>'nullable|url',
            'price'=>'nullable|numeric',
            'is_published'=>'nullable|boolean'
        ]);

        if(isset($data['title'])) $data['slug'] = Str::slug($data['title']).'-'.Str::random(5);

        $service->update($data);
        return response()->json($service);
    }

    public function destroy(Service $service)
    {
        $service->delete();
        return response()->json(['message'=>'Deleted']);
    }
}
