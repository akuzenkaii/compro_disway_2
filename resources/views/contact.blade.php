<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <title>Disway | About Me</title>
  <link rel="stylesheet" href="{{ asset('css/contact.css') }}">
  <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css" />
  <link rel="icon" href="../favicon/favicon.ico" type="image/x-icon" />
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
            <a href="{{ url('/career') }}">Career</a>
            <a href="{{ url('/contact') }}" class="edit-home" style="color: rgb(255, 0, 0);">Contact</a>

            @auth
            <h3 style="color: rgb(220, 0, 0); margin-top: 10px;">
              Selamat datang, {{ Auth::user()->name }}!
            </h3>
            @endauth

            <div class="btn-group" style="margin-top: 10px;">
              @guest
              <a href="{{ route('login') }}" style="color: white; background-color: rgb(200, 0, 0); padding: 8px 14px; border-radius: 6px; margin-right: 6px;">Login</a>
              <a href="{{ route('register') }}" style="color: white; background-color: rgb(180, 0, 0); padding: 8px 14px; border-radius: 6px; margin-right: 6px;">Register</a>
              <a href="{{ route('password.request') }}" style="color: rgb(150, 0, 0); text-decoration: underline;">Lupa Password?</a>
              @else
              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: inline;">
                @csrf
                <button type="submit" style="color: white; background-color: rgb(200, 0, 0); padding: 8px 14px; border-radius: 6px; border: none; cursor: pointer;">Logout</button>
              </form>
              @endguest
            </div>
        </div>
      </div>
    </nav>
  </header>

  <section class="topContainer">
    <div class="topOverlay">
      <div class="topContent">
        <h2>Siap Bekerja Sama?</h2>
        <p>Saya terbuka untuk kolaborasi, proyek, dan peluang baru. Mari diskusikan ide Anda!</p>
        <a href="#contact" class="ctaButton">Hubungi Saya</a>
      </div>
    </div>
  </section>

<section class="contactSection" id="contact">
  <div class="contactContainer">
    <div class="contactHeader">
      <h2>Hubungi Kami</h2>
      <p>Silakan hubungi kami untuk kerja sama, proyek, atau pertanyaan lainnya.</p>
    </div>

    <div class="contactContent">
      <!-- Formulir Kontak -->
      <form class="contactForm">
        <div class="formGroup">
          <input type="text" placeholder="Nama Lengkap" required>
          <input type="email" placeholder="Email" required>
        </div>
        <div class="formGroup">
          <input type="text" placeholder="Subjek" required>
        </div>
        <div class="formGroup">
          <textarea rows="5" placeholder="Pesan Anda" required></textarea>
        </div>
        <button type="submit" class="submitButton">Kirim Pesan</button>
      </form>

      <!-- Info Kontak -->
      <div class="contactInfo">
        <h3>Informasi Kontak</h3>
        <ul>
          <li><strong>Alamat:</strong> Jl. Contoh No. 123, Jakarta, Indonesia</li>
          <li><strong>Email:</strong> info@diswaygroup.co.id</li>
          <li><strong>Telepon:</strong> +62 812 3456 7890</li>
        </ul>

        <h4>Ikuti Kami</h4>
        <div class="socialIcons">
          <a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a>
          <a href="#" target="_blank"><i class="fab fa-instagram"></i></a>
          <a href="#" target="_blank"><i class="fab fa-linkedin-in"></i></a>
          <a href="#" target="_blank"><i class="fab fa-twitter"></i></a>
        </div>

        <div class="mapContainer">
          <iframe 
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.3975318095315!2d106.827153!3d-6.200000!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f3e4f3c59db1%3A0x30b0fb489163aa9a!2sJakarta!5e0!3m2!1sen!2sid!4v1610000000000" 
            width="100%" 
            height="200" 
            style="border:0;" 
            allowfullscreen="" 
            loading="lazy">
          </iframe>
        </div>
      </div>
    </div>
  </div>
</section>


  <script src="{{ asset('js/contact.js') }}"></script>

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