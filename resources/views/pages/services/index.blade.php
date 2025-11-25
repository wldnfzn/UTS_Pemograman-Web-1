@extends('layouts.app')
@section('title','Layanan')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-8">
      <h2 class="mb-3">Semua Layanan</h2>

      <div class="row g-4">
        @foreach($services as $service)
          <div class="col-md-6">
            <div class="card h-100">
              <img src="{{ $service->image ?: 'https://picsum.photos/600/400' }}" class="card-img-top" alt="">
              <div class="card-body">
                <h5>{{ $service->title }}</h5>
                <p class="small-muted">{{ $service->excerpt }}</p>
                <a href="{{ route('services.show', $service->slug) }}" class="btn btn-outline-primary btn-sm">Detail</a>
              </div>
            </div>
          </div>
        @endforeach
      </div>

      <div class="mt-4">
        {{ $services->links() }}
      </div>
    </div>

    <div class="col-md-4">
      @include('partials.sidebar') {{-- optional, or use sidebar markup inline --}}
    </div>
  </div>
</div>
@endsection
