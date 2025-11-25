<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>{{ $title ?? 'MAP Battery' }}</title>

  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- AOS (Animate on Scroll) -->
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

  <!-- Icons -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">

  <!-- Custom Dark Theme -->
  <style>
    :root{
      --bg:#0b0f14;
      --card:#0f1720;
      --muted: #9aa4ad;
      --accent:#2f9cff;
      --accent-2:#ff6b6b;
      --glass: rgba(255,255,255,0.03);
    }

    html,body{ height:100%; }
    body{
      background: linear-gradient(180deg, #071022 0%, #0b0f14 100%);
      color:#e6eef6;
      font-family: Inter, system-ui, -apple-system, "Segoe UI", Roboto, "Helvetica Neue", Arial;
      -webkit-font-smoothing:antialiased;
      -moz-osx-font-smoothing:grayscale;
    }

    /* Navbar spacing: main content should be pushed below fixed navbar */
    main { padding-top: 90px; }

    .navbar {
      background: linear-gradient(90deg, rgba(255,255,255,0.02), rgba(255,255,255,0.01));
      backdrop-filter: blur(6px);
      -webkit-backdrop-filter: blur(6px);
    }

    .brand { font-weight:700; letter-spacing:.3px; color:#fff; }
    .nav-link { color: rgba(230,238,246,0.85) !important; }
    .nav-link.active { color: var(--accent) !important; font-weight:600; }

    /* Cards and sections */
    .card {
      background: linear-gradient(180deg, rgba(255,255,255,0.02), rgba(255,255,255,0.01));
      border: 1px solid rgba(255,255,255,0.04);
      color: #e6eef6;
    }

    .section-title {
      font-size: 28px;
      font-weight:700;
      margin-bottom: 18px;
      color: #fff;
    }

    .muted { color: var(--muted); }

    /* Product image styling */
    .product-img {
      height: 240px;
      object-fit: contain;
      background: linear-gradient(180deg, rgba(255,255,255,0.02), rgba(255,255,255,0.01));
      border-radius:6px;
      padding:12px;
    }

    /* Footer */
    footer.site-footer{
      background: #07121a;
      border-top: 1px solid rgba(255,255,255,0.03);
      color: rgba(255,255,255,0.7);
      padding: 36px 0;
      margin-top: 48px;
    }

    footer .small-muted { color: var(--muted); }

    /* Buttons */
    .btn-primary {
      background: linear-gradient(90deg,var(--accent), #1e8bff);
      border: none;
    }

    /* Responsive tweaks */
    @media (max-width: 768px){
      .product-img { height: 180px; }
      main { padding-top: 110px; }
    }
  </style>

  @stack('head')
</head>
<body>
  @include('partials.navbar')

  <main>
    @yield('content')
  </main>

  @include('partials.footer')

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

  <!-- AOS init -->
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>
    document.addEventListener('DOMContentLoaded', function(){
      AOS.init({ duration: 800, once: true, easing: 'ease-out-quart' });
      // small stagger reveal for cards
      document.querySelectorAll('.card[data-stagger]').forEach((el, idx)=>{
        el.style.transitionDelay = (idx*80) + 'ms';
      });
    });
  </script>

  @stack('scripts')
</body>
</html>
