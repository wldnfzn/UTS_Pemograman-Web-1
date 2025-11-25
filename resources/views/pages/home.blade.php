@extends('layouts.app')

@section('content')
<div class="container">

  <!-- HERO -->
  <div class="row align-items-center mb-5" data-aos="fade-up">
    <div class="col-md-7">
      <h1 class="display-5 fw-bold">Solusi Pelatihan & Layanan Baterai Profesional</h1>
      <p class="lead muted">Distributor Penjualan Traction dan Golfcart Battery brand Hawker, Microtex beserta Charger dan Accessories lainnya.</p>

      <div class="mt-4">
        <a href="{{ route('services.index') }}" class="btn btn-primary btn-lg me-2">Lihat Layanan</a>
        <a href="{{ route('contact.show') }}" class="btn btn-outline-light btn-lg">Hubungi Kami</a>
      </div>
    </div>

    <div class="col-md-5 text-center" data-aos="zoom-in">
      <img src="https://map-battery.com/wp-content/uploads/2023/10/traction-battery.jpg" alt="hero" class="img-fluid rounded product-img">
    </div>
  </div>

  <!-- Pengenalan singkat -->
  <section class="mb-5" data-aos="fade-up">
    <h2 class="section-title text-center">Tentang Perusahaan</h2>
    <p class="text-center muted mx-auto" style="max-width:900px;">
      Distributor Penjualan Traction dan Golfcart Battery brand Hawker, Microtex beserta Charger dan Accessories lainnya.
      Kami menjual berbagai macam jenis battery untuk memenuhi kebutuhan battery anda.
    </p>
  </section>

  <!-- Produk -->
  <section class="mb-5" data-aos="fade-up">
    <h3 class="section-title">Produk Kami</h3>

    <div class="row g-4">
      <div class="col-md-4" data-stagger>
        <div class="card h-100" data-aos="fade-up">
          <img src="https://map-battery.com/wp-content/uploads/2023/10/traction-battery.jpg" class="card-img-top product-img" alt="Traction Battery">
          <div class="card-body">
            <h5 class="fw-bold">Traction Battery, Golf Cart Battery, Lithium Battery</h5>
            <p class="muted">Kami menjual beberapa jenis battery sesuai kebutuhan anda. Kami percaya pelanggan harus mendapatkan kinerja & masa pakai baterai terbaik secara konsisten.</p>
          </div>
        </div>
      </div>

      <div class="col-md-4" data-stagger>
        <div class="card h-100" data-aos="fade-up">
          <img src="https://map-battery.com/wp-content/uploads/2023/10/charger-battery.jpg" class="card-img-top product-img" alt="Charger">
          <div class="card-body">
            <h5 class="fw-bold">Charger Battery</h5>
            <p class="muted">Untuk membuat battery forklift anda awet tahan lama sampai bertahun-tahun, pemilihan charger yang tepat juga sangat membantu. Kami menjual tipe-tipe charger sesuai kebutuhan anda.</p>
          </div>
        </div>
      </div>

      <div class="col-md-4" data-stagger>
        <div class="card h-100" data-aos="fade-up">
          <img src="https://map-battery.com/wp-content/uploads/2023/10/battery-filling-system.jpg" class="card-img-top product-img" alt="Filling">
          <div class="card-body">
            <h5 class="fw-bold">Battery Filling System (BFS)</h5>
            <p class="muted">Servis dan perawatan baterai dapat menjadi proses yang rumit. Sistem penyiraman air accu baterai secara otomatis adalah alternatif terbaik untuk efisiensi dan keamanan.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- CTA -->
  <section class="text-center py-4" data-aos="fade-up">
    <div class="card p-4 mx-auto" style="max-width:900px; background: rgba(255,255,255,0.02); border:1px solid rgba(255,255,255,0.03);">
      <h4 class="fw-bold">Butuh Konsultasi atau Penawaran?</h4>
      <p class="muted">Tim kami siap membantu kebutuhan battery industri Anda — sales, servis, training dan kontrak layanan.</p>
      <a href="{{ route('contact.show') }}" class="btn btn-primary btn-lg">Hubungi Kami</a>
    </div>
  </section>

</div>
@endsection
