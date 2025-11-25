@extends('layouts.app')

@section('content')
<div class="container" data-aos="fade-up">
  <h1 class="section-title">Hubungi Kami</h1>

  <div class="row">
    <div class="col-md-7">
      @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
      @endif

      <div class="card p-4">
        <form action="{{ route('contact.submit') }}" method="POST">
          @csrf
          <div class="mb-3">
            <label class="form-label">Nama</label>
            <input name="name" class="form-control" required>
          </div>

          <div class="mb-3">
            <label class="form-label">Email</label>
            <input name="email" type="email" class="form-control" required>
          </div>

          <div class="mb-3">
            <label class="form-label">Telepon</label>
            <input name="phone" class="form-control">
          </div>

          <div class="mb-3">
            <label class="form-label">Pesan</label>
            <textarea name="message" rows="5" class="form-control" required></textarea>
          </div>

          <button class="btn btn-primary">Kirim Pesan</button>
        </form>
      </div>
    </div>

    <div class="col-md-5">
      <div class="card p-3">
        <h6 class="fw-bold">Kantor & Kontak</h6>
        <p class="muted mb-1">PT Multidaya Anugrah Persada</p>
        <p class="small-muted mb-1">Email: info@mapp-battery.com</p>
        <p class="small-muted">Tel: 0812-xxxx-xxxx</p>

        <hr>

        <h6 class="fw-bold">Jam Operasional</h6>
        <p class="muted">Senin–Jumat: 08:00 – 17:00</p>
      </div>
    </div>
  </div>
</div>
@endsection
