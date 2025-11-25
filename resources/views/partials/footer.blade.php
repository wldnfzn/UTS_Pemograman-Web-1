<footer class="site-footer">
  <div class="container">
    <div class="row gy-3">
      <div class="col-md-4">
        <h5 class="mb-2">Mapp Battery</h5>
        <p class="small-muted">Distributor Penjualan Traction dan Golfcart Battery brand Hawker, Microtex beserta Charger dan Accessories lainnya.</p>
      </div>

      <div class="col-md-3">
        <h6>Produk & Layanan</h6>
        <ul class="list-unstyled small">
          <li><a href="{{ route('services.index') }}">Pelatihan & Layanan</a></li>
          <li><a href="{{ route('services.index') }}">Penggantian Baterai</a></li>
          <li><a href="{{ route('contact.show') }}">Hubungi Kami</a></li>
        </ul>
      </div>

      <div class="col-md-3">
        <h6>Perusahaan</h6>
        <ul class="list-unstyled small">
          <li><a href="{{ route('about') }}">Tentang Kami</a></li>
          <li><a href="{{ route('contact.show') }}">Kontak</a></li>
        </ul>
      </div>

      <div class="col-md-2">
        <h6>Kontak</h6>
        <p class="small mb-0">Email: info@mapp-battery.com</p>
        <p class="small">Tel: 0812-xxxx-xxxx</p>
      </div>
    </div>

    <div class="border-top mt-4 pt-3 text-center small">
      &copy; {{ date('Y') }} — Copyright by 23552011434_Wildan Fauzan_TIF RP 223 B
    </div>
  </div>
</footer>
