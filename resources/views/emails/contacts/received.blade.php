@component('mail::message')
# Pesan Baru dari {{ $contact->name }}

**Email:** {{ $contact->email }}  
**Telepon:** {{ $contact->phone ?? '-' }}

**Pesan:**
{{ $contact->message }}

Terima kasih,<br>
{{ config('app.name') }}
@endcomponent
