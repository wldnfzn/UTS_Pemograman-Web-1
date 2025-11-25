<?php
namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;
use App\Mail\ContactReceived;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;

class ContactApiController extends Controller
{
    public function store(Request $req)
    {
        $data = $req->validate([
            'name'=>'required|string|max:255',
            'email'=>'required|email',
            'phone'=>'nullable|string',
            'message'=>'required|string'
        ]);

        $contact = Contact::create($data);

        try {
            Mail::to(config('mail.from.address'))->send(new ContactReceived($contact));
        } catch(\Exception $e){
            Log::error('Mail send failed: '.$e->getMessage());
        }

        return response()->json(['message'=>'Thank you, we received your message.'],201);
    }
}
