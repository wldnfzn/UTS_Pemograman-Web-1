@extends('layouts.app')

@section('content')
<div class="container" style="max-width:700px;">
  <div class="card p-4" data-aos="zoom-in">
    <h3 class="mb-3">Register</h3>

    @if($errors->any())
      <div class="alert alert-danger">{{ $errors->first() }}</div>
    @endif

    <form method="POST" action="{{ route('register') }}">
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
        <label class="form-label">Password</label>
        <input name="password" type="password" class="form-control" required>
      </div>

      <div class="mb-3">
        <label class="form-label">Konfirmasi Password</label>
        <input name="password_confirmation" type="password" class="form-control" required>
      </div>

      <button class="btn btn-primary w-100">Daftar</button>
    </form>

    <hr>
    <div class="text-center small muted">Sudah punya akun? <a href="{{ route('login') }}">Login</a></div>
  </div>
</div>
@endsection
