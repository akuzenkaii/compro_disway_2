<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <title>Disway | About Me</title>
  <link rel="stylesheet" href="{{ asset('css/about.css') }}">
  <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css" />
  <link rel="icon" href="../favicon/favicon.ico" type="image/x-icon" />
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
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
        <a href="{{ url('/about') }}" class="edit-home" style="color: rgb(255, 0, 0);">About Us</a>
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

  <section class="container-top">
    <div class="content-top">
      <div class="intro-text">
        <h1 id="headline" class="animated-headline">
          <span>D</span><span>I</span><span>S</span><span>W</span><span>A</span><span>Y</span>
          <span>G</span><span>R</span><span>O</span><span>U</span><span>P</span>
        </h1>
        <p class="fade-in-slow">Jaringan Media Independen yang Mencerahkan dan Menginspirasi.</p>
        <a href="#highlight" class="cta-button glow-anim">Kenali Lebih Dekat</a>
      </div>
    </div>
  </section>

  <!-- About Section -->
  <section class="about-section" id="highlight">
    <div class="container">
      <h2 class="section-title">Tentang Disway National Network</h2>
      <div class="about-grid">
        <div class="about-text">
          <p><strong>Disway National Network (DNN)</strong> adalah salah satu jaringan media terbesar di Indonesia,
            terdiri dari Media Online, Media Cetak, dan Media Elektronik yang tersebar di seluruh penjuru negeri.</p>

          <p>DNN didirikan oleh <strong>Dahlan Iskan</strong>, tokoh pers nasional yang pernah menjabat sebagai Menteri
            BUMN RI periode 2011–2014. Pada 9 Juli 2018, Dahlan Iskan meluncurkan blog pribadi bernama disway.id, yang
            setiap hari memuat catatan dan tulisan khas beliau.</p>

          <p>Seiring waktu, blog ini berkembang menjadi portal berita online nasional yang kini memiliki lebih dari 100
            subdomain di berbagai daerah di Indonesia. Disway.id menjadi simbol inovasi media digital yang berakar kuat
            pada jurnalisme independen, dan menjangkau jutaan pembaca setiap bulannya.</p>
        </div>
        <div class="about-image">
          <img src="../image/pinterestCat.jpg">
        </div>
      </div>
    </div>
  </section>

  <section class="about" id="about">
  <div class="container">
    <h2 class="about-title fade-up">Visi dan Misi</h2>
    
    <div class="about-content">
      <!-- KIRI -->
      <div class="about-text fade-up">
        <h3>Visi dan Misi Kami</h3>
        <p><strong>Visi:</strong> Menjadi jaringan media terdepan di Indonesia yang terpercaya, inovatif, dan relevan, berkontribusi pada pencerahan masyarakat melalui informasi berkualitas dan jurnalisme berintegritas.</p>
        
        <p><strong>Misi:</strong></p>
        <ul>
          <li><strong>Akurat & Berimbang:</strong> Menyajikan informasi terkini berdasarkan fakta terverifikasi.</li>
          <li><strong>Inovasi Media Digital:</strong> Menghadirkan pengalaman media interaktif & mudah diakses.</li>
          <li><strong>Jurnalisme Independen:</strong> Menjaga kebebasan pers demi publik.</li>
          <li><strong>Jaringan Regional:</strong> Mendukung pertumbuhan media lokal & regional.</li>
          <li><strong>Pencerahan Publik:</strong> Menyajikan konten edukatif & inspiratif.</li>
        </ul>

        <h3>Nilai-Nilai Inti Kami</h3>
        <ul>
          <li><strong>Integritas:</strong> Jujur, etis, dan objektif.</li>
          <li><strong>Inovasi:</strong> Selalu mencari cara baru dalam menyampaikan informasi.</li>
          <li><strong>Profesionalisme:</strong> Komitmen terhadap kualitas tinggi.</li>
          <li><strong>Kolaborasi:</strong> Bersinergi untuk hasil bersama.</li>
          <li><strong>Relevansi:</strong> Selalu sesuai kebutuhan audiens.</li>
        </ul>
      </div>

      <!-- KANAN -->
      <div class="about-text fade-up">
        <h3>Jejak Dahlan Iskan & Semangat Disway</h3>
        <p><strong>Dahlan Iskan</strong> adalah jurnalis, pengusaha, dan mantan Menteri BUMN yang telah menunjukkan dedikasi luar biasa dalam mengembangkan media di Indonesia.</p>
        <p>Dimulai dari Harian Disway di Surabaya, hingga peluncuran <strong>disway.id</strong> pada 9 Juli 2018, beliau membangun ekosistem media digital dengan lebih dari 100 subdomain di seluruh Indonesia.</p>
        <p>Blog ini bukan hanya catatan pribadi, tapi simbol dari jurnalisme independen dan keterlibatan langsung dengan masyarakat.</p>

        <div class="about-features fade-up">
          <div class="feature-item">
            <div class="feature-icon"><i class="uil uil-globe"></i></div>
            <div class="feature-text">Jangkauan Nasional</div>
          </div>
          <div class="feature-item">
            <div class="feature-icon"><i class="uil uil-shield-check"></i></div>
            <div class="feature-text">Pers Independen</div>
          </div>
          <div class="feature-item">
            <div class="feature-icon"><i class="uil uil-users-alt"></i></div>
            <div class="feature-text">Dekat dengan Pembaca</div>
          </div>
          <div class="feature-item">
            <div class="feature-icon"><i class="uil uil-clock"></i></div>
            <div class="feature-text">Update 24/7</div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="timeline-section">
  <div class="container">
    <h2 class="section-title2" data-aos="fade-up">Perjalanan Disway</h2>
    <div class="timeline">
      
      <div class="timeline-item" data-aos="fade-right">
        <div class="timeline-dot"></div>
        <div class="timeline-content">
          <div class="timeline-year">2018</div>
          <div class="timeline-text">
            Dahlan Iskan meluncurkan blog pribadi disway.id pada 9 Juli 2018, menandai awal perjalanan media digital independen.
          </div>
        </div>
      </div>

      <div class="timeline-item" data-aos="fade-left">
        <div class="timeline-dot"></div>
        <div class="timeline-content">
          <div class="timeline-year">2019</div>
          <div class="timeline-text">
            Ekspansi ke media regional dimulai dengan peluncuran subdomain pertama di berbagai daerah Indonesia.
          </div>
        </div>
      </div>

      <div class="timeline-item" data-aos="fade-right">
        <div class="timeline-dot"></div>
        <div class="timeline-content">
          <div class="timeline-year">2020–2021</div>
          <div class="timeline-text">
            Pertumbuhan pesat jaringan media dengan mencapai lebih dari 50 portal online dan integrasi media cetak.
          </div>
        </div>
      </div>

      <div class="timeline-item" data-aos="fade-left">
        <div class="timeline-dot"></div>
        <div class="timeline-content">
          <div class="timeline-year">2022–2023</div>
          <div class="timeline-text">
            Disway berkembang menjadi jaringan media terbesar dengan 111 portal online dan 61 media cetak.
          </div>
        </div>
      </div>

      <div class="timeline-item" data-aos="fade-up">
        <div class="timeline-dot"></div>
        <div class="timeline-content">
          <div class="timeline-year">2024–2025</div>
          <div class="timeline-text">
            Inovasi berkelanjutan dengan integrasi TV regional dan platform digital terdepan di Indonesia.
          </div>
        </div>
      </div>

    </div>
  </div>
</section>


  <!-- Founder Story Section -->
  <section class="founder-section">
    <div class="container">
      <h2 class="title">Founders Story</h2>
      <div class="content">
        <div class="image">
          <img src="../image/pinterestFounder.jpg" alt="Founder Photo" />
        </div>
        <div class="text">
          <p><strong>Founded on 8 June 2014</strong>, IDN (formerly IDN Media) lahir dari keresahan sederhana namun
            penting—mengapa tidak ada media di Indonesia yang benar-benar mewakili suara generasi muda, khususnya
            Millennials dan Gen Z? Di tengah perkembangan digital yang begitu pesat, justru masih banyak media yang
            kaku, membosankan, dan tidak relevan dengan kebutuhan dan gaya hidup anak muda.</p>

          <p>Pertanyaan itu muncul dalam benak Winston Utomo, saat itu masih bekerja di Google Singapura. Ia menyadari
            bahwa generasi muda merupakan mayoritas populasi Indonesia, namun jarang mendapatkan ruang yang benar-benar
            mencerminkan siapa mereka. Dari kegelisahan itu, muncul ide untuk membangun sebuah platform media yang lebih
            inklusif, relevan, dan menginspirasi.</p>

          <p>Tanpa menunggu lama, Winston mulai merancang konsep IDN dari kamar apartemennya. Ia mulai dari hal
            kecil—menulis konten sendiri, mendesain layout, hingga memikirkan bagaimana cara menyampaikan informasi yang
            ringan, jujur, dan mudah diterima oleh anak muda. Tidak ada tim besar, tidak ada pendanaan, hanya tekad kuat
            dan kepercayaan pada visi yang ia bawa.</p>

          <p>Malam itu juga, Winston menghubungi adiknya, William, yang saat itu berada di Los Angeles. Setelah
            mendengar gagasan sang kakak, William tanpa ragu memutuskan untuk pulang dan bergabung dalam perjalanan ini.
            Ia meninggalkan rencana karier di bidang perbankan investasi, dan memilih untuk membangun sesuatu yang
            berdampak untuk jutaan orang.</p>

          <p>Perjalanan mereka tentu tidak mudah. Keterbatasan sumber daya, kesulitan membangun kepercayaan, hingga
            menghadapi persaingan yang ketat menjadi tantangan sehari-hari. Namun dengan semangat kolaboratif dan
            komitmen untuk terus belajar, IDN perlahan tumbuh dan dipercaya oleh banyak kalangan. Mereka pun mulai
            mengembangkan berbagai produk, mulai dari IDN Times, Popbela, Yummy, hingga Duniaku dan IDN Creative.</p>

          <p>Hari ini, IDN telah menjadi platform media digital yang menjangkau lebih dari 70 juta pengguna aktif setiap
            bulannya. Namun lebih dari itu, IDN menjadi simbol bahwa perubahan besar bisa dimulai dari ide sederhana,
            dari ruang kecil, dan dari keberanian untuk bertanya: “Kalau bukan kita, siapa lagi?”</p>
        </div>

      </div>
    </div>
  </section>

  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script src="{{ asset('js/about.js') }}"></script>

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