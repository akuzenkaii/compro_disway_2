<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <title>Disway | About Me</title>
  <link rel="stylesheet" href="{{ asset('css/career.css') }}">
  <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css" />
  <link rel="icon" href="../favicon/favicon.ico" type="image/x-icon" />
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@3.4.1/dist/tailwind.min.css" rel="stylesheet">
</head>

<body>
  <header>
    <nav class="navbar">
      <img src="{{ asset('image/disway.png') }}" class="logo" alt="Logo Disway" />
      <img class="burger" id="burger" src="{{ asset('svg/menu.svg') }}" alt="Menu" />

      <div class="menu-items" id="menu">
        <div class="menu menu-left">
          <a href="{{ url('/home') }}">Home</a>
          <a href="{{ url('/about') }}">About Us</a>
          <a href="{{ url('/platform') }}">Platform Network
            <a href="{{ url('/our-services') }}">Our Services</a>
            <a href="{{ url('/news') }}">News</a>
            <a href="{{ url('/career') }}" class="edit-home" style="color: rgb(255, 0, 0);">Career</a>
            <a href="{{ url('/contact') }}">Contact</a>

            @auth
            <h3 style="color: rgb(220, 0, 0); margin-top: 10px;">
              Selamat datang, {{ Auth::user()->name }}!
            </h3>
            @endauth

            <div class="btn-group" style="margin-top: 10px;">
              @guest
              <a href="{{ route('login') }}"
                style="color: white; background-color: rgb(200, 0, 0); padding: 8px 14px; border-radius: 6px; margin-right: 6px;">Login</a>
              <a href="{{ route('register') }}"
                style="color: white; background-color: rgb(180, 0, 0); padding: 8px 14px; border-radius: 6px; margin-right: 6px;">Register</a>
              <a href="{{ route('password.request') }}" style="color: rgb(150, 0, 0); text-decoration: underline;">Lupa
                Password?</a>
              @else
              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: inline;">
                @csrf
                <button type="submit"
                  style="color: white; background-color: rgb(200, 0, 0); padding: 8px 14px; border-radius: 6px; border: none; cursor: pointer;">Logout</button>
              </form>
              @endguest
            </div>
        </div>
      </div>
    </nav>

    <style>
      .career-admin-container {
        max-width: 900px;
        margin: 40px auto;
        background: white;
        padding: 30px 40px;
        border-radius: 16px;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
      }

      .career-title {
        text-align: center;
        font-size: 26px;
        font-weight: 600;
        margin-bottom: 30px;
        color: #222;
      }

      .application-card {
        background: #f9fafb;
        border: 1px solid #e5e7eb;
        border-radius: 14px;
        padding: 24px 28px;
        margin-bottom: 30px;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.03);
      }

      .applicant-info h3 {
        font-size: 20px;
        font-weight: 600;
        margin-bottom: 10px;
      }

      .applicant-info p {
        margin: 4px 0;
        font-size: 15px;
        color: #374151;
      }

      .badge {
        display: inline-block;
        padding: 4px 10px;
        border-radius: 20px;
        font-size: 12px;
        font-weight: 600;
        margin-left: 8px;
      }

      .badge-pending {
        background: #e0e7ff;
        color: #4338ca;
      }

      .file-links {
        margin: 14px 0;
      }

      .file-links a {
        margin-right: 12px;
        text-decoration: none;
        color: #2563eb;
        font-weight: 500;
        display: inline-block;
        font-size: 14px;
      }

      .file-links i {
        margin-right: 4px;
      }

      .action-buttons {
        margin-top: 16px;
      }

      .btn {
        padding: 10px 18px;
        border: none;
        border-radius: 8px;
        font-weight: 600;
        cursor: pointer;
        margin-right: 10px;
        font-size: 14px;
        transition: 0.3s ease-in-out;
      }

      .btn-accept {
        background: #10b981;
        color: white;
      }

      .btn-reject {
        background: #f59e0b;
        color: white;
      }

      .btn-delete {
        background: #ef4444;
        color: white;
      }

      .btn:hover {
        transform: scale(1.03);
      }
    </style>
  </header>

  <section class="admin">
    <div class="career-admin-container">
      <h2 class="career-title">Daftar Lamaran Masuk</h2>

      {{-- @dd($applications) --}}
      @foreach($applications as $app)
      <div class="application-card">
        <div class="applicant-info">
          <h3>
            {{ $app->name }}
            <span class="badge badge-{{ $app->status }}">{{ ucfirst($app->status) }}</span>
          </h3>
          <p><strong>Email:</strong> {{ $app->email }} | <strong>No HP:</strong> {{ $app->phone }}</p>
          <p><strong>Kantor Tujuan:</strong> {{ $app->office }}</p>
          <p><strong>Status:</strong> <span class="badge badge-{{ $app->status }}">{{ ucfirst($app->status) }}</span></p>
        </div>

        <div class="file-links">
          <a href="{{ asset('storage/' . $app->cv) }}" target="_blank">
            <i class="uil uil-file-alt"></i> Lihat CV
          </a>
          @if($app->cover_letter)
          | <a href="{{ asset('storage/' . $app->cover_letter) }}" target="_blank">
            <i class="uil uil-file-edit"></i> Cover Letter
          </a>
          @endif
        </div>

        <div class="action-buttons">
          <form action="{{ route('admin.career.accept', $app->id) }}" method="POST" style="display:inline;">
            @csrf
            <button class="btn btn-accept">✔ Terima</button>
          </form>

          <form action="{{ route('admin.career.reject', $app->id) }}" method="POST" style="display:inline;">
            @csrf
            <button class="btn btn-reject">✖ Tolak</button>
          </form>

          <form action="{{ route('admin.career.delete', $app->id) }}" method="POST" style="display:inline;">
            @csrf
            @method('DELETE')
            <button class="btn btn-delete">🗑 Hapus</button>
          </form>
        </div>
      </div>
      @endforeach
    </div>
  </section>


  <script src="{{ asset('js/career.js') }}"></script>
  <!-- ======= Footer Section ======= -->
  <footer class="site-footer">
    <div class="footer-container">
      <div class="footer-logo-section">
        <img src="../image/disway.png" alt="Logo Disway" class="footer-logo" />
        <p class="footer-description">Media Digital Independen yang Menginspirasi dan Mencerahkan.</p>
      </div>

      <div class="footer-links">
        <div class="footer-column">
          <h4>Tentang Kami</h4>
          <ul>
            <li><a href="#">Visi & Misi</a></li>
            <li><a href="#">Tujuan</a></li>
            <li><a href="#">Tim Kami</a></li>
          </ul>
        </div>
        <div class="footer-column">
          <h4>Layanan</h4>
          <ul>
            <li><a href="#">Iklan</a></li>
            <li><a href="#">Kemitraan</a></li>
            <li><a href="#">Distribusi</a></li>
          </ul>
        </div>
        <div class="footer-column">
          <h4>Jaringan</h4>
          <ul>
            <li><a href="#">Platform A</a></li>
            <li><a href="#">Platform B</a></li>
            <li><a href="#">Platform C</a></li>
            <li><a href="#">Lainnya...</a></li>
          </ul>
        </div>
        <div class="footer-column">
          <h4>Ikuti Kami</h4>
          <div class="social-icons">
            <a href="#"><i class="uil uil-facebook-f"></i></a>
            <a href="#"><i class="uil uil-twitter"></i></a>
            <a href="#"><i class="uil uil-instagram"></i></a>
            <a href="#"><i class="uil uil-youtube"></i></a>
          </div>
        </div>
      </div>
    </div>

    <div class="footer-bottom">
      <p>&copy; 2025 Disway. All Rights Reserved.</p>
      <p><a href="#">Kebijakan Privasi</a> | <a href="#">Syarat & Ketentuan</a></p>
    </div>
  </footer>
</body>

</html>