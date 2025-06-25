<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>Disway | About Me</title>
  <link rel="stylesheet" href="{{ asset('css/ourServices.css') }}">
  <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css" />
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
            <a href="{{ url('/our-services') }}" class="edit-home" style="color: rgb(255, 0, 0);">Our Services</a>
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

  <!-- Background decorative elements -->
  <section class="container-top">
    <div class="bg-pattern">
      <div class="circle"></div>
      <div class="circle"></div>
      <div class="geometric"></div>
      <div class="geometric"></div>
      <div class="lines"></div>
      <div class="lines"></div>
    </div>

    <div class="container">
      <!-- Left content section -->
      <div class="content">
        <h1 class="title">Disway.Id</h1>
        <h2 class="subtitle">Perluas Jangkuan dan Pengaruh Anda Bersama Disway Group</h2>

        <p class="description">
          Sebagai salah satu jaringan media terbesar di indonesia, kami menawarkan spekrum layanan lengkap yang
          melampaui batas media tradisional. Jelajahi bagaimana Multiplatform Network, Sosial Media Management, Event
          Organizer, Public Relations, Printing, dan Web Development kami dapat menjadi pendorong kesuksesan Anda di
          pasar yang dinamis
        </p>
      </div>

      <!-- Right media section -->
      <div class="media-section">
        <div class="media-container">
          <img src="https://images.unsplash.com/photo-1586339949916-3e9457bef6d3?w=800&h=600&fit=crop&crop=center"
            alt="Indonesian Media" class="photo">
          <div class="media-overlay">
            <div class="media-title-top">Media Digital Indonesia</div>
            <div class="media-description">
              Transformasi digital media massa di era modern untuk menjangkau seluruh nusantara
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="header-banner">
      <img src="../svg/align-left-svgrepo-com.svg" alt="Logo Kiri" class="banner-icon" />
      <h1 class="banner-title">Multiplatform Network</h1>
      <img src="../svg/align-right-svgrepo-com.svg" alt="Logo Kanan" class="banner-icon" />
    </div>

    <div class="title-platformnetwork">
      <a>Disway Group mengoperasikan jaringan media multiplatform yang luas, mencakup media online (portal berita daerah
        dan nasional), media cetak (koran dan majalah), serta media elektronik (TV dan radio lokal). Jaringan ini
        tersebar di berbagai wilayah Indonesia, memastikan distribusi informasi secara luas dan menyeluruh.</a>
    </div>
  </section>

  <!--Main Content Section-->
  <section class="platformNetwork-Section">
    <div class="overlay-card-group">
      <div class="overlay-card fade-in-up">
        <img src="../svg/reshot-icon-search-3X5D296WCU.svg" class="image-card">
        <h3>Keunggulan</h3>
        <ul>
          <li>Jangkauan nasional melalui lebih dari 25 portal berita daerah.</li>
          <li>Media cetak ternama seperti Sumatera Ekspres, Jabar Ekspres, dan lainnya.</li>
          <li>Sinergi antara platform cetak, digital, dan elektronik.</li>
        </ul>
      </div>
      <div class="overlay-card fade-in-up">
        <img src="../svg/reshot-icon-shapes-D2KL6V8YQB.svg" class="image-card">
        <h3>Portofolio</h3>
        <ul>
          <li>Kampanye berita nasional lintas platform.</li>
          <li>Liputan serentak untuk event politik, olahraga, dan budaya.</li>
        </ul>
      </div>
    </div>

    <!-- Sosial Media Management Section -->
    <div class="media-wrapper">
      <!-- Left Text Content -->
      <div class="media-text">
        <h2 class="media-title hidden">Sosial Media Management</h2>
        <p class="media-desc hidden">
          Disway Group menyediakan layanan pengelolaan sosial media yang dirancang untuk meningkatkan eksistensi digital
          brand Anda melalui konten strategis, desain menawan, serta analitik performa real-time.
        </p>
        <div class="layanan-detail hidden">
          <h3>Layanan Meliputi</h3>
          <ul>
            <li><i class="uil uil-folder" style="color: red;"></i> Penyusunan Strategi Konten</li>
            <li><i class="uil uil-edit-alt" style="color: red;"></i> Produksi Desain Visual & Video</li>
            <li><i class="uil uil-schedule" style="color: red;"></i> Penjadwalan & Publikasi Otomatis</li>
            <li><i class="uil uil-chart-bar" style="color: red;"></i> Monitoring Interaksi & Laporan Performa</li>
          </ul>
        </div>
      </div>

      <!-- Right Statistics Cards -->
      <div class="media-stats">
        <h3 class="stats-title">Statistik Media Sosial Disway</h3>
        <div class="stats-grid">
          <div class="stat-item hidden">
            <img src="https://cdn-icons-png.flaticon.com/512/145/145802.png" alt="Facebook">
            <div>
              <strong>2.957.238</strong>
              <span>Interaksi Bulanan</span>
            </div>
          </div>
          <div class="stat-item hidden">
            <img src="https://cdn-icons-png.flaticon.com/512/2111/2111463.png" alt="Instagram">
            <div>
              <strong>2.090.592</strong>
              <span>Pengikut</span>
            </div>
          </div>
          <div class="stat-item hidden">
            <img src="https://cdn-icons-png.flaticon.com/512/3046/3046120.png" alt="TikTok">
            <div>
              <strong>31.9K</strong>
              <span>Pengikut | 739.9K Suka</span>
            </div>
          </div>
          <div class="stat-item hidden">
            <img src="https://cdn-icons-png.flaticon.com/512/733/733579.png" alt="X/Twitter">
            <div>
              <strong>337.018</strong>
              <span>Interaksi Pengguna</span>
            </div>
          </div>
          <div class="stat-item hidden">
            <img src="https://cdn-icons-png.flaticon.com/512/1384/1384060.png" alt="YouTube">
            <div>
              <strong>19.490.354</strong>
              <span>Total Views</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!--Event Section-->
  <section class="event-section" id="event-organizer">
    <div class="event-container">
      <!-- Header -->
      <div class="event-header">
        <h2 class="section-title">Event Organizer</h2>
        <p class="section-description">
          Disway Group menyelenggarakan berbagai event berskala nasional & regional, dari perencanaan hingga
          pelaksanaan. Event kami mencerminkan profesionalisme, kreativitas, dan dampak positif.
        </p>
      </div>

      <!-- Jenis Acara (Tags) -->
      <div class="event-types">
        <h3>Jenis Acara</h3>
        <div class="tags-scroll" id="eventTags">
          <span>Disway Awards 2025</span>
          <span>Disway Mancing</span>
          <span>SCDG</span>
          <span>Disway Cup</span>
          <span>Seminar & Peluncuran</span>
        </div>
      </div>

      <!-- Search Box -->
      <form method="GET" action="/our-services" class="event-search" id="searchForm">
        <input type="text" name="search" id="searchEvent" placeholder="🔍 Cari event..."
          value="{{ request('search') }}" />
      </form>

      <form id="addEventForm" class="event-form">
        @csrf
        <input type="text" id="newEventTitle" placeholder="Judul Event" required>
        <input type="text" id="newEventDesc" placeholder="Deskripsi Event" required>
        <input type="text" id="newEventImg" placeholder="URL Gambar Event" required>
        <button type="submit">+ Tambah Event</button>
      </form>


      <form id="bulkDeleteForm">
        @csrf
        <input type="checkbox" id="checkAll"> <label for="checkAll">Pilih Semua</label>
        <button type="submit" class="delete-btn">🗑️ Hapus Terpilih</button>

        <div class="event-gallery">
          @foreach ($events as $event)
          <div class="event-card">
            <input type="checkbox" name="event_ids[]" value="{{ $event->id }}" class="event-checkbox">
            <div class="event-img" style="background-image: url('{{ $event->img }}')"></div>
            <div class="event-info">
              <h4>{{ $event->title }}</h4>
              <p>{{ $event->desc }}</p>
            </div>
            <button onclick="deleteSingle({{ $event->id }})" class="delete-btn" type="button">Hapus</button>
          </div>
          @endforeach
        </div>
      </form>
  </section>

  <!-- Public Relation Section -->
  <!-- Printing -->
  <section id="printing-service" class="service-section">
    <div class="printing-wrapper">
      <!-- Kiri: Teks -->
      <div class="printing-text">
        <h2 class="section-title">Layanan Cetak (Printing)</h2>
        <p class="section-description">
          Kami menyediakan layanan cetak profesional seperti surat kabar, majalah, poster, dan berbagai media cetak lainnya untuk kebutuhan bisnis dan promosi Anda.
        </p>
      </div>

      <!-- Kanan: Kartu Miring -->
      <div class="printing-cards">
        <div class="print-card rotate-left">
          <img src="../image/np1.jpg" alt="Surat Kabar 1">
          <div class="card-caption">
            <span>Surat Kabar 1</span>
            <small>20 items</small>
          </div>
        </div>

        <div class="print-card rotate-right">
          <img src="../image/poster1.jpg" alt="Poster 1">
          <div class="card-caption">
            <span>Poster 1</span>
            <small>15 items</small>
          </div>
        </div>

        <div class="print-card rotate-left-alt">
          <img src="../image/poster2.jpg" alt="Branding Material">
          <div class="card-caption">
            <span>Branding Material</span>
            <small>25 items</small>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- Floating action button -->
  <button class="fab" onclick="scrollToTop()">
    ↑
  </button>

  <script src="{{ asset('js/ourServices.js') }}"></script>

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

  <script>
    window.deleteSingle = function(id) {
      if (!confirm('Yakin ingin menghapus event ini?')) return;

      fetch(`/events/${id}`, {
          method: 'DELETE',
          headers: {
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content,
            'Accept': 'application/json',
            'Content-Type': 'application/json'
          }
        })
        .then(res => {
          if (!res.ok) throw new Error('Gagal menghapus');
          // Reload data di halaman (bisa juga hanya hapus elemen DOM jika ingin dinamis)
          location.reload();
        })
        .catch(err => {
          alert('Terjadi kesalahan saat menghapus event');
          console.error(err);
        });
    };
  </script>
</body>

</html>