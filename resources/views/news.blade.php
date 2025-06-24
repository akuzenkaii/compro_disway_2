<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <title>Disway | About Me</title>
  <link rel="stylesheet" href="{{ asset('css/news.css') }}">
  <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css" />
  <link rel="icon" href="../favicon/favicon.ico" type="image/x-icon" />
  <link href="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.8/index.global.min.css" rel="stylesheet" />
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
          <a href="{{ url('/platform') }}">Platform Network</a>
          <a href="{{ url('/our-services') }}">Our Services</a>
          <a href="{{ url('/news') }}" class="edit-home" style="color: rgb(255, 0, 0);">News</a>
          <a href="{{ url('/career') }}">Career</a>
          <a href="{{ url('/contact') }}">Contact</a>

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
        <h2>Baca Berita Terkini</h2>
        <p>Untuk mengetahui peristiwa yang sedang terjadi saat ini.</p>
        <a href="#contact" class="ctaButton">Hubungi Saya</a>
      </div>
    </div>
  </section>

  <section>
    <div class="container-news">
      <div class="newsHeader">
        <h2>Rekomendasi Berita</h2>
        <p>Beberapa rekomendasi berita hangat untuk anda</p>
      </div>
      <div class="news-layout">
        <!-- KONTEN BERITA -->
        <div class="main-content">
          <div class="news-grid">
            <!-- news-card 1–12 -->
            <div class="news-card">
              <img src="../image/rashford.png" alt="News Image">
              <h3>Judul Berita 1</h3>
              <p class="date">24 Juni 2025 | 0 Komentar</p>
              <p>Konten singkat berita ke-1 ini ditampilkan di halaman depan sebagai preview.</p>
              <a href="#">Read More</a>
            </div>
            <div class="news-card">
              <img src="../image/rashford.png" alt="News Image">
              <h3>Judul Berita 1</h3>
              <p class="date">24 Juni 2025 | 0 Komentar</p>
              <p>Konten singkat berita ke-1 ini ditampilkan di halaman depan sebagai preview.</p>
              <a href="#">Read More</a>
            </div>
            <div class="news-card">
              <img src="../image/rashford.png" alt="News Image">
              <h3>Judul Berita 1</h3>
              <p class="date">24 Juni 2025 | 0 Komentar</p>
              <p>Konten singkat berita ke-1 ini ditampilkan di halaman depan sebagai preview.</p>
              <a href="#">Read More</a>
            </div>
            <div class="news-card">
              <img src="../image/rashford.png" alt="News Image">
              <h3>Judul Berita 1</h3>
              <p class="date">24 Juni 2025 | 0 Komentar</p>
              <p>Konten singkat berita ke-1 ini ditampilkan di halaman depan sebagai preview.</p>
              <a href="#">Read More</a>
            </div>
            <div class="news-card">
              <img src="../image/rashford.png" alt="News Image">
              <h3>Judul Berita 1</h3>
              <p class="date">24 Juni 2025 | 0 Komentar</p>
              <p>Konten singkat berita ke-1 ini ditampilkan di halaman depan sebagai preview.</p>
              <a href="#">Read More</a>
            </div>
            <div class="news-card">
              <img src="../image/rashford.png" alt="News Image">
              <h3>Judul Berita 1</h3>
              <p class="date">24 Juni 2025 | 0 Komentar</p>
              <p>Konten singkat berita ke-1 ini ditampilkan di halaman depan sebagai preview.</p>
              <a href="#">Read More</a>
            </div>
            <div class="news-card">
              <img src="../image/rashford.png" alt="News Image">
              <h3>Judul Berita 1</h3>
              <p class="date">24 Juni 2025 | 0 Komentar</p>
              <p>Konten singkat berita ke-1 ini ditampilkan di halaman depan sebagai preview.</p>
              <a href="#">Read More</a>
            </div>
            <div class="news-card">
              <img src="../image/rashford.png" alt="News Image">
              <h3>Judul Berita 1</h3>
              <p class="date">24 Juni 2025 | 0 Komentar</p>
              <p>Konten singkat berita ke-1 ini ditampilkan di halaman depan sebagai preview.</p>
              <a href="#">Read More</a>
            </div>
            <div class="news-card">
              <img src="../image/rashford.png" alt="News Image">
              <h3>Judul Berita 1</h3>
              <p class="date">24 Juni 2025 | 0 Komentar</p>
              <p>Konten singkat berita ke-1 ini ditampilkan di halaman depan sebagai preview.</p>
              <a href="#">Read More</a>
            </div>
            <div class="news-card">
              <img src="../image/rashford.png" alt="News Image">
              <h3>Judul Berita 1</h3>
              <p class="date">24 Juni 2025 | 0 Komentar</p>
              <p>Konten singkat berita ke-1 ini ditampilkan di halaman depan sebagai preview.</p>
              <a href="#">Read More</a>
            </div>
            <div class="news-card">
              <img src="../image/rashford.png" alt="News Image">
              <h3>Judul Berita 1</h3>
              <p class="date">24 Juni 2025 | 0 Komentar</p>
              <p>Konten singkat berita ke-1 ini ditampilkan di halaman depan sebagai preview.</p>
              <a href="#">Read More</a>
            </div>
            <div class="news-card">
              <img src="../image/rashford.png" alt="News Image">
              <h3>Judul Berita 1</h3>
              <p class="date">24 Juni 2025 | 0 Komentar</p>
              <p>Konten singkat berita ke-1 ini ditampilkan di halaman depan sebagai preview.</p>
              <a href="#">Read More</a>
            </div>
            <div class="news-card">
              <img src="../image/rashford.png" alt="News Image">
              <h3>Judul Berita 1</h3>
              <p class="date">24 Juni 2025 | 0 Komentar</p>
              <p>Konten singkat berita ke-1 ini ditampilkan di halaman depan sebagai preview.</p>
              <a href="#">Read More</a>
            </div>
            <div class="news-card">
              <img src="../image/rashford.png" alt="News Image">
              <h3>Judul Berita 1</h3>
              <p class="date">24 Juni 2025 | 0 Komentar</p>
              <p>Konten singkat berita ke-1 ini ditampilkan di halaman depan sebagai preview.</p>
              <a href="#">Read More</a>
            </div>
            <div class="news-card">
              <img src="../image/rashford.png" alt="News Image">
              <h3>Judul Berita 1</h3>
              <p class="date">24 Juni 2025 | 0 Komentar</p>
              <p>Konten singkat berita ke-1 ini ditampilkan di halaman depan sebagai preview.</p>
              <a href="#">Read More</a>
            </div>
            <!-- Tambahkan semua .news-card lainnya di sini seperti sebelumnya -->
            <!-- ... -->
          </div>
        </div>

        <!-- SIDEBAR -->
        <aside class="sidebar">
          <div class="widget">
            <h4>Subscribe Widget</h4>
            <ul class="subscribe-list">
              <li><a href=""><span>Follow on Facebook</span><img src="../image/instagram.png"></a></li>
              <li><a href="#"><span>Follow on Twitter</span><img src="../image/twitter.png"></a></li>
              <li><a href="#"><span>Subscribe on YouTube</span><img src="../image/youtube.png"></a></li>
            </ul>
          </div>

          <div class="widget">
            <h4>Blog Category</h4>
            <ul>
              <li><a href="#">Berita Nasional</a></li>
              <li><a href="#">Opini</a></li>
              <li><a href="#">Politik</a></li>
              <li><a href="#">Teknologi</a></li>
            </ul>
          </div>

          <div class="widget">
            <h4>Kalender</h4>
            <div id="calendar"></div>
            <script src="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.8/index.global.min.js"></script>
          </div>
        </aside>
      </div>
    </div>
  </section>

  <script src="{{ asset('js/news.js') }}"></script>

  <!-- ======= FOOTER ======= -->
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