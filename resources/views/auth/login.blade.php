@extends('layouts.app')

@section('content')
<div class="container" style="max-width:700px;">
  <div class="card p-4" data-aos="zoom-in">
    <h3 class="mb-3">Login</h3>

    @if($errors->any())
      <div class="alert alert-danger">{{ $errors->first() }}</div>
    @endif

    <form method="POST" action="{{ route('login') }}">
      @csrf
      <div class="mb-3">
        <label class="form-label">Email</label>
        <input type="email" name="email" class="form-control" required>
      </div>

      <div class="mb-3">
        <label class="form-label">Password</label>
        <input type="password" name="password" class="form-control" required>
      </div>

      <button class="btn btn-primary w-100">Login</button>
    </form>

    <hr>
    <div class="text-center small muted">Belum punya akun? <a href="{{ route('register') }}">Daftar</a></div>
  </div>
</div>
@endsection
