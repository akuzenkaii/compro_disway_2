<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <title>Disway | Media Digital Independen</title>
  <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css" />
  <link rel="stylesheet" href="{{ asset('css/platform.css') }}">

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
        <a href="{{ url('/home') }}">Home</a>
        <a href="{{ url('/about') }}">About Us</a>
        <a href="{{ url('/platform') }}" class="edit-home" style="color: rgb(255, 0, 0);">Platform Network
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

  <main>
    <!-- Hero Section -->
    <section class="hero" id="home">
      <div class="hero-content">
        <h1>DISWAY</h1>
        <p>Media Digital Independen yang Menginspirasi dan Mencerahkan</p>
        <div class="hero-stats">
          <div class="stat-item">
            <span class="stat-number">111</span>
            <span class="stat-label">Portal Online</span>
          </div>
          <div class="stat-item">
            <span class="stat-number">61</span>
            <span class="stat-label">Media Cetak</span>
          </div>
          <div class="stat-item">
            <span class="stat-number">10</span>
            <span class="stat-label">TV Regional</span>
          </div>
        </div>
      </div>
    </section>

    <!-- Platform Network Section -->
    <section class="platforms" id="tampilan-list">
      <div class="container">
        <h2 class="section-title">Platform Network</h2>
        <p class="section-subtitle">Jaringan media terluas di Indonesia dengan jangkauan nasional dan regional</p>

        <div class="platform-grid">
          <!-- Platform A -->
          <div class="platform-card" id="platform-a">
            <div class="platform-header">
              <div class="platform-icon">
                <i class="uil uil-monitor"></i>
              </div>
              <div>
                <div class="platform-title">Platform A</div>
                <div class="platform-subtitle">Online Network</div>
              </div>
            </div>

            <div class="platform-category">
              <div class="category-title">Portal Nasional</div>
              <div class="portal-list">
                <div class="portal-item">disway.id</div>
                <div class="portal-item">fin.co.id</div>
                <div class="portal-item">radarpena.disway.id</div>
                <div class="portal-item">iknpos.id</div>
              </div>
            </div>

            <div class="regional-section">
              <div class="regional-title">Portal Regional</div>

              <div class="platform-category">
                <div class="category-title">Sumatera Selatan</div>
                <div class="portal-list">
                  <div class="portal-item">sumeks.disway.id</div>
                  <div class="portal-item">palpres.disway.id</div>
                  <div class="portal-item">pagaralampos.disway.id</div>
                  <div class="portal-item">harianmuba.disway.id</div>
                </div>
              </div>

              <div class="platform-category">
                <div class="category-title">Lampung</div>
                <div class="portal-list">
                  <div class="portal-item">radarlampung.disway.id</div>
                  <div class="portal-item">radartuba.disway.id</div>
                  <div class="portal-item">medialampung.disway.id</div>
                  <div class="portal-item">saburai.tv</div>
                </div>
              </div>

              <div class="platform-category">
                <div class="category-title">Jawa Barat</div>
                <div class="portal-list">
                  <div class="portal-item">jabarekspres.com</div>
                  <div class="portal-item">radarjabar.disway.id</div>
                  <div class="portal-item">pasundanekspres.id</div>
                </div>
              </div>

              <div class="platform-category">
                <div class="category-title">Kalimantan & Papua</div>
                <div class="portal-list">
                  <div class="portal-item">nomorsatukaltim.disway.id</div>
                  <div class="portal-item">papua.disway.id</div>
                  <div class="portal-item">papuabarat.disway.id</div>
                </div>
              </div>
            </div>

            <div class="total-count">
              Total: 111 Portal Online
            </div>
          </div>

          <!-- Platform B -->
          <div class="platform-card" id="platform-b">
            <div class="platform-header">
              <div class="platform-icon">
                <i class="uil uil-newspaper"></i>
              </div>
              <div>
                <div class="platform-title">Platform B</div>
                <div class="platform-subtitle">Cetak & TV Regional</div>
              </div>
            </div>

            <div class="platform-category">
              <div class="category-title">Media Cetak</div>
              <div class="portal-list">
                <div class="portal-item">Sumatera Ekspres</div>
                <div class="portal-item">Radar Lampung</div>
                <div class="portal-item">Jambi Ekspres</div>
                <div class="portal-item">Jabar Ekspres</div>
                <div class="portal-item">Radar Bengkulu</div>
              </div>
            </div>

            <div class="platform-category">
              <div class="category-title">TV Regional</div>
              <div class="portal-list">
                <div class="portal-item">BETV (Bengkulu)</div>
                <div class="portal-item">RBTV (Bengkulu)</div>
                <div class="portal-item">JEKTV (Jambi)</div>
                <div class="portal-item">PALTV (Palembang)</div>
                <div class="portal-item">Radar TV (Lampung)</div>
                <div class="portal-item">Banten TV</div>
              </div>
            </div>

            <div class="total-count">
              Total: 61 Media Cetak & 10 TV Regional
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Platform Network Section -->
    <section class="platform-section" id="tampilan-card">
      <div class="container">
        <h2 class="section-title">Jaringan Platform Kami</h2>
        <p class="section-description">
          DNN memiliki jangkauan multiplatform yang luas, memastikan konten berkualitas tinggi tersebar secara efektif
          ke berbagai audiens.
        </p>

        <div class="platform-category">
          <h3>Online Network</h3>
          <p>Jaringan portal berita online kami yang terus berkembang menjadi tulang punggung penyebaran informasi
            digital kami.</p>
          <div class="platform-grid">
            <div class="platform-item platform-animate">
              <h4>Portal Nasional</h4>
              <ul>
                <li><strong>disway.id</strong>: Berita nasional & catatan harian Dahlan Iskan.</li>
                <li><strong>fin.co.id</strong>: Fokus keuangan, investasi, & bisnis.</li>
                <li><strong>radarpena.disway.id</strong>: Analisis mendalam berbagai sektor.</li>
                <li><strong>iknpos.id</strong>: Perkembangan Ibu Kota Nusantara.</li>
              </ul>
            </div>
            <div class="platform-item platform-animate">
              <h4>Regional</h4>
              <ul>
                <li><strong>Sumatera Selatan:</strong> sumeks, palpres, pagaralampos, harianmuba</li>
                <li><strong>Lampung:</strong> radarlampung, radartuba, medialampung, saburai.tv</li>
                <li><strong>Jawa Barat:</strong> jabarekspres, radarjabar, pasundanekspres</li>
                <li><strong>Kalimantan & Papua:</strong> nomorsatukaltim, papua, papuabarat</li>
              </ul>
            </div>
          </div>
          <p class="total-info">Total: <strong>111 portal online</strong> di seluruh Indonesia</p>
        </div>

        <div class="platform-category">
          <h3>Cetak & TV Regional</h3>
          <p>Kami juga mengelola media cetak & stasiun TV regional yang berpengaruh di komunitasnya masing-masing.</p>
          <div class="platform-grid">
            <div class="platform-item platform-animate">
              <h4>Newspaper</h4>
              <ul>
                <li>Sumatera Ekspres</li>
                <li>Radar Lampung</li>
                <li>Jambi Ekspres</li>
                <li>Jabar Ekspres</li>
                <li>Radar Bengkulu</li>
              </ul>
            </div>
            <div class="platform-item platform-animate">
              <h4>TV Regional</h4>
              <ul>
                <li>BETV (Bengkulu)</li>
                <li>RBTV (Bengkulu)</li>
                <li>JEKTV (Jambi)</li>
                <li>PALTV (Palembang)</li>
                <li>Radar TV (Lampung)</li>
                <li>Banten TV</li>
              </ul>
            </div>
          </div>
          <p class="total-info">Total: <strong>61 media cetak</strong> dan <strong>10 TV regional</strong></p>
        </div>
      </div>
    </section>

    <!-- Footer Section -->
    <footer class="site-footer">
      <div class="footer-container">
        <div class="footer-logo-section">
          <div
            style="width: 150px; height: 50px; background: linear-gradient(135deg, #931616, #ff6b6b); border-radius: 8px; display: flex; align-items: center; justify-content: center; color: white; font-weight: bold; font-size: 20px; margin-bottom: 15px;">
            DISWAY</div>
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

    <script src="{{ asset('js/platform.js') }}"></script>
</body>

</html>