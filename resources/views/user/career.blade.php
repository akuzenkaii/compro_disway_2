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
      body {
        margin: 0;
        font-family: 'Inter', sans-serif;
        background: #f9fafb;
        color: #1f2937;
      }

      .container {
        max-width: 720px;
        margin: 60px auto;
        background: white;
        border-radius: 16px;
        padding: 40px 48px;
        box-shadow: 0 12px 40px rgba(0, 0, 0, 0.06);
      }

      h2 {
        font-size: 28px;
        font-weight: 600;
        margin-bottom: 32px;
        color: #111827;
        text-align: center;
      }

      .form-group {
        margin-bottom: 20px;
      }

      label {
        display: block;
        font-weight: 600;
        margin-bottom: 8px;
        font-size: 15px;
      }

      input[type="text"],
      input[type="email"],
      input[type="file"] {
        width: 100%;
        padding: 12px 16px;
        border: 1px solid #d1d5db;
        border-radius: 8px;
        font-size: 15px;
        transition: all 0.3s ease;
      }

      input:focus {
        border-color: #d62828;
        outline: none;
        box-shadow: 0 0 0 2px rgba(214, 40, 40, 0.2);
      }

      .alert-success {
        background: #ecfdf5;
        color: #047857;
        padding: 14px 18px;
        border-left: 4px solid #10b981;
        border-radius: 6px;
        margin-bottom: 24px;
      }

      button {
        background-color: #d62828;
        color: white;
        font-weight: 600;
        font-size: 16px;
        padding: 14px 24px;
        border: none;
        border-radius: 10px;
        cursor: pointer;
        width: 100%;
        transition: background 0.3s ease;
      }

      button:hover {
        background-color: #b91c1c;
      }

      @media (max-width: 600px) {
        .container {
          padding: 24px;
        }
      }
    </style>
  </header>

  <section class="user">
    <div class="container">
      <h2>Form Lamaran Kerja</h2>

      @if (session('success'))
      <div class="alert-success">{{ session('success') }}</div>
      @endif

      <form action="{{ route('career.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
          <label for="name">Nama Lengkap</label>
          <input type="text" name="name" placeholder="Nama Lengkap" required><br>
        </div>
        <div class="form-group">
          <label for="email">Email Aktif</label>
          <input type="email" name="email" placeholder="Email" required><br>
        </div>
        <div class="form-group">
          <label for="phone">Nomor HP</label>
          <input type="text" name="phone" placeholder="Nomor HP" required><br>
        </div>
        <div class="form-group">
          <label for="office">Kantor Tujuan</label>
          <input type="text" name="office" placeholder="Kantor Tujuan" required><br>
        </div>
        <div class="form-group">
          <label for="cv">Upload CV <span style="color: #9ca3af;">(PDF, max 2MB)</span></label>
          <input type="file" name="cv" required><br>
        </div>
        <div class="form-group">
          <label for="cover_letter">Upload Cover Letter <span style="color: #9ca3af;">(Opsional)</span></label>
          <input type="file" name="cover_letter"><br>
        </div>
        <button type="submit">Kirim Lamaran</button>
      </form>
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