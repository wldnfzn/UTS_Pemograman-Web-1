@extends('layouts.app')
@section('title',$service->title)

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-8">
      <h1>{{ $service->title }}</h1>
      <p class="small-muted">Harga: Rp {{ number_format($service->price ?? 0,0,',','.') }}</p>
      <img src="{{ $service->image ?: 'https://picsum.photos/900/420' }}" class="img-fluid mb-3 rounded" alt="">
      <div class="lead">{!! nl2br(e($service->content ?: 'Deskripsi belum tersedia.')) !!}</div>
    </div>
    <div class="col-md-4">
      <div class="card">
        <div class="card-body">
          <h6>Butuh Bantuan?</h6>
          <p class="small-muted">Hubungi kami untuk konsultasi & pendaftaran program.</p>
          <a href="{{ route('contact.show') }}" class="btn btn-primary btn-sm">Hubungi</a>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
