<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="description"
    content="Disway adalah platform digital media yang menyampaikan berita, event, podcast, dan layanan kreatif di Indonesia." />
  <title>Disway | Home</title>
  <link rel="stylesheet" href="{{ asset('css/index.css') }}">
  <link rel="icon" href="../favicon/favicon.ico" type="image/x-icon" />

  <!-- AOS Animate On Scroll -->
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />

  <!-- Icon UNICONS (untuk highlight icon) -->
  <link href="https://unicons.iconscout.com/release/v4.0.0/css/line.css" rel="stylesheet" />
</head>

<body>
  <div class="loader">
    <div class="loader-inner">
      <!-- Bungkus 3 bola dalam 1 baris -->
      <div style="display: flex; gap: 25px;">
        <div class="ball-wrapper">
          <div class="ball"></div>
          <div class="shadow"></div>
        </div>
        <div class="ball-wrapper">
          <div class="ball"></div>
          <div class="shadow"></div>
        </div>
        <div class="ball-wrapper">
          <div class="ball"></div>
          <div class="shadow"></div>
        </div>
      </div>

      <!-- Teks Loading -->
      <p class="loading-text">Loading...</p>
    </div>
  </div>

  <header>
  <nav class="navbar">
    <img src="{{ asset('image/disway.png') }}" class="logo" alt="Logo Disway" />
    <img class="burger" id="burger" src="{{ asset('svg/menu.svg') }}" alt="Menu" />

    <div class="menu-items" id="menu">
      <div class="menu menu-left">
        <a href="{{ url('/home') }}" class="edit-home" style="color: rgb(255, 0, 0);">Home</a>
        <a href="{{ url('/about') }}">About Us</a>
        <a href="{{ url('/platform') }}">Platform Network</a>
        <a href="{{ url('/our-services') }}">Our Services</a>
        <a href="{{ url('/news') }}">News</a>
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

  <!-- Hero Section -->
  <section class="hero">
    <div class="hero-slides">
      <img src="../image/pintereset1.jpg" class="slide active" alt="Gambar 1" />
      <img src="../image/pinterest2.jpg" class="slide" alt="Gambar 2" />
      <img src="../image/pinterest3.jpg" class="slide" alt="Gambar 3" />
    </div>

    <div class="hero-content">
      <h1 class="fade-in" style="font-size: 40px; font-family: 'Arial', sans-serif; color: #ffffff;">
        Selamat Datang di Disway
      </h1>
      <p class="fade-in-delay" style="color: #ffffff;">
        At Disway, our vision is to be the leading digital media platform that empowers Indonesia’s
        <br />youth to create meaningful impact and drive positive change in society.
      </p>
      <a href="#Highlight" class="cta-button fade-in-delay-2">Jelajahi Sekarang</a>
    </div>

    <button class="slide-btn prev-btn" aria-label="Previous Slide">&#10094;</button>
    <button class="slide-btn next-btn" aria-label="Next Slide">&#10095;</button>
  </section>

  <!-- History Section -->
  <!-- History Section -->
  <section class="history-section" id="Highlight">
    <h2 class="history-title">Disway Event Organizer</h2>
    <div class="history-container">
      <!-- Event 1 -->
      <div class="history-card" data-aos="fade-up">
        <img src="../image/media.jpg" alt="Event 1" class="history-image" />
        <div class="history-content">
          <h3>Media Conference 2022</h3>
          <p>Konferensi pers nasional dengan 500+ peserta dari startup & media.</p>
        </div>
      </div>
      <!-- Event 2 -->
      <div class="history-card" data-aos="fade-up" data-aos-delay="100">
        <img src="../image/malam.jpg" alt="Event 2" class="history-image" />
        <div class="history-content">
          <h3>Creative Expo 2023</h3>
          <p>Pameran industri kreatif yang mempertemukan seniman & pelaku usaha.</p>
        </div>
      </div>
      <!-- Event 3 -->
      <div class="history-card" data-aos="fade-up" data-aos-delay="200">
        <img src="../image/malam1.jpg" alt="Event 3" class="history-image" />
        <div class="history-content">
          <h3>Digital Festival 2024</h3>
          <p>Festival digital nasional: seminar, talkshow, dan workshop kreatif.</p>
        </div>
      </div>
      <!-- Event 4 -->
      <div class="history-card" data-aos="fade-up" data-aos-delay="300">
        <img src="../image/bni.png" alt="Event 4" class="history-image" />
        <div class="history-content">
          <h3>Tech Forum 2025</h3>
          <p>Forum teknologi yang menghubungkan pengembang, investor, dan inovator.</p>
        </div>
      </div>
    </div>
  </section>


  <!--Platform Network-->
  <section class="network-section" style="font-family: Arial, Helvetica, sans-serif;background-color: #960606;">
    <h2 class="h2-text">Platform Network</h2>
    <p class="network-text">
      Disway adalah platform media berita terintegrasi yang mencakup jaringan televisi regional, surat kabar, dan media
      online di seluruh Indonesia.
    </p>

    <div class="network-cards">
      <div class="network-card" data-aos="fade-left">
        <h2>10</h2>
        <p>TV Regional</p>
      </div>
      <div class="network-card">
        <h2>61</h2>
        <p>Surat Kabar</p>
      </div>
      <div class="network-card" data-aos="fade-right">
        <h2>111</h2>
        <p>Media Online</p>
      </div>
    </div>
  </section>

  <!-- Our Services Section -->
  <section class="services-section">
    <h2 class="section-title">Web Development</h2>
    <p class="section-subtitle">Kami membangun pengalaman digital yang kuat, cepat, dan estetik.</p>

    <div class="services-container">
      <div class="service-card">
        <i class="uil uil-desktop service-icon"></i>
        <h3 class="service-title">UI/UX Design</h3>
        <p class="service-desc">Desain antarmuka interaktif dan estetis yang meningkatkan pengalaman pengguna.</p>
      </div>
      <div class="service-card">
        <i class="uil uil-html5-alt service-icon"></i>
        <h3 class="service-title">Frontend Development</h3>
        <p class="service-desc">Website responsif, cepat, dan SEO-ready menggunakan HTML5, CSS3, JS, dan framework
          modern.</p>
      </div>
      <div class="service-card">
        <i class="uil uil-server service-icon"></i>
        <h3 class="service-title">Backend Engineering</h3>
        <p class="service-desc">Arsitektur API yang kuat, aman, dan scalable menggunakan Node.js, Laravel, dan lainnya.
        </p>
      </div>
      <div class="service-card">
        <i class="uil uil-mobile-android service-icon"></i>
        <h3 class="service-title">Mobile Development</h3>
        <p class="service-desc">Aplikasi Android/iOS native & hybrid dengan performa tinggi dan desain intuitif.</p>
      </div>
    </div>
  </section>


  <section class="podcast-carousel-section">
    <h2>🎙️ Podcast Energi Disway</h2>
    <p>Podcast unggulan bersama Dahlan Iskan dan tamu-tamu inspiratif.</p>

    <div class="podcast-carousel">
      <div class="podcast-track">
        <!-- Slide 1 -->
        <div class="podcast-slide active">
          <div class="podcast-video">
            <iframe src="https://www.youtube.com/embed/Z5FVUh9Ol8M" frameborder="0" allowfullscreen></iframe>
          </div>
          <div class="podcast-content">
            <h3>Episode 1: Membuka Energi Baru Bersama Dahlan Iskan</h3>
            <p class="podcast-date">Jumat 16 Mei 2025 | 10:00 WIB</p>
            <a href="https://www.youtube.com/watch?v=Z5FVUh9Ol8M" class="btn-listen" target="_blank">Tonton Sekarang</a>
          </div>
        </div>

        <!-- Slide 2 -->
        <div class="podcast-slide">
          <div class="podcast-video">
            <iframe src="https://www.youtube.com/embed/vyIfhXx6ISU" frameborder="0" allowfullscreen></iframe>
          </div>
          <div class="podcast-content">
            <h3>Episode 2: Energi dan Masa Depan Indonesia</h3>
            <p class="podcast-date">Sabtu 17 Mei 2025 | 11:00 WIB</p>
            <a href="https://www.youtube.com/watch?v=vyIfhXx6ISU" class="btn-listen" target="_blank">Tonton Sekarang</a>
          </div>
        </div>
      </div>
      <!-- Navigasi Manual -->
      <button class="carousel-btn prev">&#10094;</button>
      <button class="carousel-btn next">&#10095;</button>
    </div>

    <div class="podcast-thumbnails">
      <a class="podcast-thumbnail" href="https://www.youtube.com/watch?v=Z5FVUh9Ol8M" target="_blank">
        <img src="https://img.youtube.com/vi/Z5FVUh9Ol8M/hqdefault.jpg" alt="Episode 1">
        <h4>Episode 1: Membuka Energi Baru</h4>
      </a>
      <a class="podcast-thumbnail" href="https://www.youtube.com/watch?v=vyIfhXx6ISU" target="_blank">
        <img src="https://img.youtube.com/vi/vyIfhXx6ISU/hqdefault.jpg" alt="Episode 2">
        <h4>Episode 2: Energi dan Masa Depan Indonesia</h4>
        <a class="podcast-thumbnail" href="https://www.youtube.com/watch?v=Z5FVUh9Ol8M" target="_blank">
          <img src="https://img.youtube.com/vi/Z5FVUh9Ol8M/hqdefault.jpg" alt="Episode 1">
          <h4>Episode 1: Membuka Energi Baru</h4>
        </a>
        <a class="podcast-thumbnail" href="https://www.youtube.com/watch?v=vyIfhXx6ISU" target="_blank">
          <img src="https://img.youtube.com/vi/vyIfhXx6ISU/hqdefault.jpg" alt="Episode 2">
          <h4>Episode 2: Energi dan Masa Depan Indonesia</h4>
        </a>
        <a class="podcast-thumbnail" href="https://www.youtube.com/watch?v=Z5FVUh9Ol8M" target="_blank">
          <img src="https://img.youtube.com/vi/Z5FVUh9Ol8M/hqdefault.jpg" alt="Episode 1">
          <h4>Episode 1: Membuka Energi Baru</h4>
        </a>
        <a class="podcast-thumbnail" href="https://www.youtube.com/watch?v=vyIfhXx6ISU" target="_blank">
          <img src="https://img.youtube.com/vi/vyIfhXx6ISU/hqdefault.jpg" alt="Episode 2">
          <h4>Episode 2: Energi dan Masa Depan Indonesia</h4>
          <a class="podcast-thumbnail" href="https://www.youtube.com/watch?v=Z5FVUh9Ol8M" target="_blank">
            <img src="https://img.youtube.com/vi/Z5FVUh9Ol8M/hqdefault.jpg" alt="Episode 1">
            <h4>Episode 1: Membuka Energi Baru</h4>
          </a>
          <a class="podcast-thumbnail" href="https://www.youtube.com/watch?v=vyIfhXx6ISU" target="_blank">
            <img src="https://img.youtube.com/vi/vyIfhXx6ISU/hqdefault.jpg" alt="Episode 2">
            <h4>Episode 2: Energi dan Masa Depan Indonesia</h4>
          </a>
    </div>
  </section>


  <!-- News Section -->
  <section class="news-section" id="DiswayNews">
    <h1>News</h1>
    <div class="news-carousel">

      <!-- Slide 1 -->
      <div class="news-container news-slide active">
        <div class="news-image">
          <img src="../image/bni.png" alt="News Image">
        </div>
        <div class="news-content">
          <h3>Latest News</h3>
          <h2>Skema Cicilan KUR BNI 2025 Bisa Cair hingga Rp500 Juta, Cek Syarat dan Cara Pengajuan</h2>
          <p class="news-date">Jumat 16 Mei 2025 | 11:41 WIB</p>
          <a href="https://disway.id/read/874593/skema-cicilan-kur-bni-2025-bisa-cair-hingga-rp500-juta-cek-syarat-dan-cara-pengajuan"
            class="btn-read" target="_blank">Continue Reading</a>
        </div>
      </div>

      <!-- Slide 2 -->
      <div class="news-container news-slide">
        <div class="news-image">
          <img src="../image/rashford.png" alt="News Image">
        </div>
        <div class="news-content">
          <h3>Latest News</h3>
          <h2>Marcus Rashford Yakin Manchester United Bakal Membuangnya, 'Pangeran Inggris' Gabung Barcelona?</h2>
          <p class="news-date">Jumat 16 Mei 2025 | 11:03 WIB</p>
          <a href="https://disway.id/read/874586/marcus-rashford-yakin-manchester-united-bakal-membuangnya-pangeran-inggris-gabung-barcelona"
            class="btn-read" target="_blank">Continue Reading</a>
        </div>
      </div>

      <!-- Slide 3 -->
      <div class="news-container news-slide">
        <div class="news-image">
          <img src="../image/pramono.png" alt="News Image">
        </div>
        <div class="news-content">
          <h3>Latest News</h3>
          <h2>RPTRA Kalijodo Bakal Ditata Ulang Pramono, Bangun Fasilitas Olahraga Multiguna</h2>
          <p class="news-date">Jumat 16 Mei 2025 | 12:31 WIB</p>
          <a href="https://disway.id/read/874604/rptra-kalijodo-bakal-ditata-ulang-pramono-bangun-fasilitas-olahraga-multiguna"
            class="btn-read" target="_blank">Continue Reading</a>
        </div>
      </div>

      <!-- Carousel dots -->
      <div class="news-dots">
        <span class="dot active" onclick="showNewsSlide(0)"></span>
        <span class="dot" onclick="showNewsSlide(1)"></span>
        <span class="dot" onclick="showNewsSlide(2)"></span>
      </div>
    </div>
  </section>

  <!-- Media Partner Logos -->
  <section class="partners-section" id="partners">
    <div class="container">
      <h2>Media Partner</h2>
      <div class="logo-slider">
        <img src="../image/bantentvcom-e1741863578648-logo.png" alt="Banten TV" />
        <img src="../image/jambitvco-logo.png" alt="Jambi TV" />
        <img src="../image/radar-jabar-logo.png" alt="Radar TV" />
        <img src="../image/lampungnewspaper=logo.png" alt="LampungNewsPaper" />
        <img src="../image/harian-disway-logo.png" alt="HarianDisway" />
        <img src="../image/diswayjogja-logo.png" alt="DiswayJogja" />
        <img src="../image/diswaymalang-logo.png" alt="DiswayMalang" />
        <img src="../image/inforadar-id-logo.png" alt="InfoRadar" />
        <img src="../image/jambi-independent-co-id-logo.png" alt="JambiIndependent" />
        <img src="../image/Logo-FINNEWS.png" alt="Finnews" />
        <img src="../image/network-icon.png" alt="DiswayNetwork" />
        <img src="../image/nomorsatukaltim-logo.png" alt="NomorSatuKaltim" />
      </div>

      <div class="media-btn">
        <a href="{{ url('/more') }}" class="LihatSelengkapnya-btn">Lihat Selengkapnya</a>
      </div>
    </div>
  </section>

  <!-- Why Us Section -->
  <section class="why-disway-section" id="mengapa-kami">
    <div class="container">
      <div class="section-header">
        <h2>Mengapa Memilih <span class="highlight">Disway</span>?</h2>
        <p class="section-description">
          Kami bukan sekadar media — kami adalah mitra Anda dalam menyampaikan ide, membangun kesadaran, dan menciptakan
          dampak.
        </p>
      </div>

      <div class="reasons">
        <div class="reason" data-aos="fade-up">
          <h4>🎯 Tim Profesional</h4>
          <p>Didukung oleh jurnalis, kreator konten, dan desainer berpengalaman yang siap menghadirkan konten
            berkualitas tinggi.</p>
        </div>
        <div class="reason" data-aos="fade-up" data-aos-delay="100">
          <h4>💬 Dukungan Pelanggan 24/7</h4>
          <p>Kami selalu siap membantu dalam setiap kebutuhan media dan komunikasi Anda, kapan saja dan di mana saja.
          </p>
        </div>
        <div class="reason" data-aos="fade-up" data-aos-delay="200">
          <h4>🌐 Jangkauan Luas</h4>
          <p>Konten kami menjangkau berbagai lapisan masyarakat melalui kanal digital dan kolaborasi strategis.</p>
        </div>
      </div>

      <div class="cta-box" data-aos="zoom-in" data-aos-delay="300">
        <h3>Tertarik Bekerja Sama?</h3>
        <p>Kami siap mendukung kebutuhan media dan komunikasi digital Anda.</p>
        <a href="#hubungi" class="cta-button">Hubungi Kami</a>
      </div>
    </div>
  </section>


  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>AOS.init();</script>
  <script src="{{ asset('js/index.js') }}"></script>
</body>

</html>

<!-- AOS Script -->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>AOS.init();</script>

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
          <a href="https://www.instagram.com/diswaydotid/"><i class="uil uil-instagram"></i></a>
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

<script src="../js/index.js"></script>
</body>

</html>