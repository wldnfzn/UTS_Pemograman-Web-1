@extends('layouts.app')

@section('content')
<div class="container">

  <div class="row">
    <div class="col-lg-8">

      <header class="mb-4" data-aos="fade-up">
        <h1 class="section-title">Layanan & Produk</h1>
        <p class="muted">Distributor Penjualan Traction dan Golfcart Battery brand Hawker, Microtex beserta Charger dan Accessories lainnya.</p>
      </header>

      <!-- Overview -->
      <section class="mb-4" data-aos="fade-up">
        <div class="card p-4">
          <h5 class="fw-bold">Pelayanan Kami</h5>
          <p class="muted">
            Kami menjual berbagai macam jenis battery untuk memenuhi kebutuhan battery anda.
            Kami juga memberikan layanan servis dan dukungan teknis profesional untuk memastikan umur pakai dan performa baterai optimal.
          </p>
        </div>
      </section>

      <!-- Sales -->
      <section class="mb-4" data-aos="fade-right">
        <div class="card p-4">
          <h5 class="fw-bold">Sales</h5>
          <p>
            Kami adalah distributor Hawker Traction Battery (Produk Eropa), Microtex Energy P Ltd (Produk India dengan standar kualitas produk Eropa), dan TAB Traction Battery buatan di Slovenia-Eropa.
            Kami menjual semua rangkaian produk Battery Traction, Charger Baterai dan Lainnya. Pilihan produk kami meliputi:
          </p>

          <ul class="mt-3">
            <li><strong>Traction Battery</strong> — untuk forklift, golf cart, dan aplikasi industri bergerak.</li>
            <li><strong>Golf Cart Battery</strong> — baterai tahan lama untuk kendaraan lapangan golf dan kendaraan utility.</li>
            <li><strong>Charger & Accessories</strong> — charger industrial, kabel, konektor, dan sistem pengisian otomatis.</li>
          </ul>

          <p class="muted mt-3">Kami membantu memilih produk yang tepat berdasarkan aplikasi, beban kerja, frekuensi pengisian, dan lingkungan operasional.</p>
        </div>
      </section>

      <!-- Servis -->
      <section class="mb-4" data-aos="fade-left">
        <div class="card p-4">
          <h5 class="fw-bold">Servis</h5>
          <p>
            Kami memiliki Team Support (Teknisi & Trainer) yang ahli dan berdedikasi. Layanan servis kami meliputi:
          </p>

          <ul class="mt-3">
            <li><strong>After Sales Services</strong> — dukungan purna jual & troubleshooting.</li>
            <li><strong>Periodical Service</strong> — perawatan berkala untuk menjaga performa battery.</li>
            <li><strong>On Call Service</strong> — layanan darurat dan kunjungan teknisi on-site.</li>
            <li><strong>Training & Service Contract</strong> — pelatihan teknisi, kontrak servis berkala.</li>
          </ul>

          <p class="muted mt-3">Kami memberikan laporan kondisi battery, rekomendasi penggantian, serta pelatihan keselamatan dan pemeliharaan untuk tim Anda.</p>
        </div>
      </section>

      <!-- Products list (cards) -->
      <section class="mb-4" data-aos="zoom-in">
        <h4 class="mb-3">Produk Unggulan</h4>

        <div class="row g-4">
          <div class="col-md-6" data-stagger>
            <div class="card h-100">
              <div class="row g-0">
                <div class="col-5 d-flex align-items-center justify-content-center p-3">
                  <img src="https://map-battery.com/wp-content/uploads/2023/10/traction-battery.jpg" class="img-fluid rounded product-img" alt="Traction Battery">
                </div>
                <div class="col-7">
                  <div class="card-body">
                    <h5 class="fw-bold">Traction Battery</h5>
                    <p class="muted">Baterai traction untuk aplikasi industri mobile: forklift, AGV, golf cart. Dirancang untuk siklus dalam dan daya tahan tinggi.</p>
                    <a href="{{ route('contact.show') }}" class="btn btn-sm btn-primary">Minta Penawaran</a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-6" data-stagger>
            <div class="card h-100">
              <div class="row g-0">
                <div class="col-5 d-flex align-items-center justify-content-center p-3">
                  <img src="https://map-battery.com/wp-content/uploads/2023/10/charger-battery.jpg" class="img-fluid rounded product-img" alt="Charger Battery">
                </div>
                <div class="col-7">
                  <div class="card-body">
                    <h5 class="fw-bold">Charger & Charging Systems</h5>
                    <p class="muted">Charger berkualitas untuk pengisian aman dan efisien. Kami menyediakan charger tipe manual dan otomatis sesuai kapasitas battery.</p>
                    <a href="{{ route('contact.show') }}" class="btn btn-sm btn-primary">Minta Info</a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-6" data-stagger>
            <div class="card h-100">
              <div class="row g-0">
                <div class="col-5 d-flex align-items-center justify-content-center p-3">
                  <img src="https://map-battery.com/wp-content/uploads/2023/10/battery-filling-system.jpg" class="img-fluid rounded product-img" alt="BFS">
                </div>
                <div class="col-7">
                  <div class="card-body">
                    <h5 class="fw-bold">Battery Filling System (BFS)</h5>
                    <p class="muted">Sistem otomatis untuk pemeliharaan cairan battery sehingga mengurangi risiko human error dan meningkatkan umur pakai battery.</p>
                    <a href="{{ route('contact.show') }}" class="btn btn-sm btn-primary">Pelajari Lebih</a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-6" data-stagger>
            <div class="card h-100 p-3">
              <h5 class="fw-bold">Accessories & Spareparts</h5>
              <p class="muted">Kabel, konektor, terminal, dan komponen pendukung lainnya untuk instalasi dan perawatan battery.</p>
              <a href="{{ route('contact.show') }}" class="btn btn-sm btn-outline-light">Hubungi Sales</a>
            </div>
          </div>

        </div>
      </section>

      <!-- FAQ / Notes -->
      <section class="mb-5" data-aos="fade-up">
        <div class="card p-4">
          <h5 class="fw-bold">Catatan Teknis & Konsultasi</h5>
          <p class="muted">Untuk rekomendasi produk yang presisi kami sarankan konsultasi terhadap tim teknis kami. Sertakan informasi beban kerja, tegangan, dimensi ruang battery, dan frekuensi pengisian agar rekomendasi optimal.</p>
        </div>
      </section>

    </div>

    <!-- SIDEBAR -->
    <aside class="col-lg-4">
      @include('partials.sidebar')
    </aside>
  </div>
</div>
@endsection
