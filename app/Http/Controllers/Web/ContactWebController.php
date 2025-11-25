<?php
namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;
use App\Mail\ContactReceived;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;

class ContactWebController extends Controller
{
    public function show() {
        return view('pages.contact');
    }

    public function submit(Request $req)
    {
        $data = $req->validate([
            'name'=>'required|string|max:255',
            'email'=>'required|email',
            'phone'=>'nullable|string',
            'message'=>'required|string',
        ]);

        $contact = Contact::create($data);

        try {
            Mail::to(config('mail.from.address'))->send(new ContactReceived($contact));
        } catch(\Exception $e){
            Log::error('Mail error: '.$e->getMessage());
        }

        return redirect()->back()->with('success','Pesan Anda berhasil dikirim.');
    }
}
