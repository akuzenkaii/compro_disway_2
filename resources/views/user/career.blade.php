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
  </header>

  @extends('layouts.app')

  @section('content')
    <div class="container">
    <h2>Form Lamaran Kerja</h2>

    @if (session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <form action="{{ route('career.store') }}" method="POST" enctype="multipart/form-data">
      @csrf
      <input type="text" name="name" placeholder="Nama Lengkap" required><br>
      <input type="email" name="email" placeholder="Email" required><br>
      <input type="text" name="phone" placeholder="Nomor HP" required><br>
      <input type="text" name="office" placeholder="Kantor Tujuan" required><br>
      <input type="file" name="cv" required><br>
      <input type="file" name="cover_letter"><br>
      <button type="submit">Kirim Lamaran</button>
    </form>
    </div>
  @endsection


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