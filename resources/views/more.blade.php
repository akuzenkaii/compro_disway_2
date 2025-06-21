<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Disway | About Me</title>
    <link rel="stylesheet" href="{{ asset('css/more.css') }}">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css" />
    <link rel="icon" href="../favicon/favicon.ico" type="image/x-icon" />
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
        <a href="{{ url('/more') }}" class="edit-home" style="color: rgb(255, 0, 0);">Media</a>
        <a href="{{ url('/about') }}">About Us</a>

        <div class="dropdown">
          <a class="dropbtn" href="{{ url('/platform') }}">Platform Network</a>
        </div>

        <div class="dropdown">
          <a class="dropbtn" href="{{ url('/ourServices') }}">Our Services</a>
        </div>

        <div class="dropdown">
          <a class="dropbtn" href="{{ url('/news') }}">News</a>
        </div>

        <div class="dropdown">
          <a class="dropbtn" href="{{ url('/career') }}">Career</a>
        </div>

        <div class="dropdown">
          <a class="dropbtn" href="{{ url('/contact') }}">Contact</a>
        </div>
      </div>
    </div>
  </nav>
</header>

    <!-- More Content Section-->
    <section class="directory-container">
        <!-- Sidebar -->
        <aside class="directory-sidebar">
            <h3>Category</h3>
            <ul>
                <li class="active">All Categories</li>
                <li>Business Economy</li>
                <li>Education</li>
                <li>General News</li>
                <li>Health</li>
                <li>Hobby</li>
                <li>Leisure</li>
                <li>Religion</li>
                <li>Sport</li>
            </ul>
        </aside>

        <!-- Main Content -->
        <div class="directory-content">
            <!-- Filter Bar -->
            <div class="directory-filter">
                <h2>All Categories</h2>
                <div class="filter-group">
                    <select id="regionSelect">
                        <option value="all">All Region</option>
                        <option value="Sumatera">Sumatera</option>
                        <option value="Jawa">Jawa</option>
                        <option value="Kalimantan">Kalimantan</option>
                        <option value="Sulawesi">Sulawesi</option>
                    </select>
                    <div class="search-box">
                        <i class="uil uil-search"></i>
                        <input type="text" id="searchInput" placeholder="Search">
                    </div>
                </div>
            </div>

            <!-- Logo Grid -->
            <div id="cardGrid" class="logo-grid">
                <a href="https://www.babelpos.com" target="_blank" class="logo-card" data-name="babel pos"
                    data-region="Sumatera">
                    <img src="../image/babelpos.png" alt="babel pos">
                </a>

                <a href="https://www.bantenraya.com" target="_blank" class="logo-card" data-name="bantenraya com logo"
                    data-region="Jawa">
                    <img src="../image/bantenraya-com-logo.webp" alt="banten raya">
                </a>

                <a href="https://www.bantentv.com" target="_blank" class="logo-card" data-name="bantentvcom logo"
                    data-region="Jawa">
                    <img src="../image/bantentvcom-e1741863578648-logo.png" alt="banten tv">
                </a>

                <a href="https://www.belitongekspres.com" target="_blank" class="logo-card" data-name="belitong ekspres"
                    data-region="Sumatera">
                    <img src="../image/belitong_ekspres.png" alt="belitong ekspres">
                </a>

                <a href="https://www.bengkuluekspress.com" target="_blank" class="logo-card"
                    data-name="bengkulu ekspress" data-region="Sumatera">
                    <img src="../image/bengkulu_ekspress.png" alt="bengkulu ekspress">
                </a>

                <a href="https://www.betv.com" target="_blank" class="logo-card" data-name="betv"
                    data-region="Sumatera">
                    <img src="../image/betv.png" alt="betv">
                </a>

                <a href="https://www.okes.com" target="_blank" class="logo-card" data-name="okes" data-region="Jawa">
                    <img src="../image/okes.png" alt="okes">
                </a>

                <a href="https://www.cianjurekspress.com" target="_blank" class="logo-card" data-name="cianjur ekspress"
                    data-region="Jawa">
                    <img src="../image/cianjur_ekspress.png" alt="cianjur ekspres">
                </a>

                <a href="https://www.curup-ekspress.com" target="_blank" class="logo-card" data-name="curup ekspress"
                    data-region="Sumatera">
                    <img src="../image/curupekspress.png" alt="curup ekspres">
                </a>

                <a href="https://www.diswayjateng.id" target="_blank" class="logo-card" data-name="disway jateng"
                    data-region="Jawa">
                    <img src="../image/disway_jateng.png" alt="disway jateng">
                </a>

                <a href="https://www.disway.id" target="_blank" class="logo-card" data-name="disway" data-region="Jawa">
                    <img src="../image/disway.png" alt="disway">
                </a>

                <a href="https://www.disway.id/icon" target="_blank" class="logo-card" data-name="disway icon"
                    data-region="Jawa">
                    <img src="../image/diswayicon.png" alt="disway icon">
                </a>

                <a href="https://www.diswayjogja.id" target="_blank" class="logo-card" data-name="disway jogja logo"
                    data-region="Jawa">
                    <img src="../image/diswayjogja-logo.png" alt="disway jogja">
                </a>

                <a href="https://www.diswaymalang.id" target="_blank" class="logo-card" data-name="diswaymalang logo"
                    data-region="Jawa">
                    <img src="../image/diswaymalang-logo.png" alt="disway malang">
                </a>

                <a href="https://www.diswaymojokerto.id" target="_blank" class="logo-card"
                    data-name="diswaymojokerto logo" data-region="Jawa">
                    <img src="../image/diswaymojokerto-logo.png" alt="disway mojokerto">
                </a>

                <a href="https://www.diswaysulsel.id" target="_blank" class="logo-card" data-name="diswaysulsel logo"
                    data-region="Sulawesi">
                    <img src="../image/diswaysulsel-logo.png" alt="disway sulsel">
                </a>

                <a href="https://www.enimekspres.com" target="_blank" class="logo-card" data-name="enim ekspres"
                    data-region="Sumatera">
                    <img src="../image/enimekspres.png" alt="enim ekspres">
                </a>

                <a href="https://www.harianbanyuasin.com" target="_blank" class="logo-card" data-name="harian banyuasin"
                    data-region="Sumatera">
                    <img src="../image/harian_banyuasin.png" alt="harian banyuasin">
                </a>

                <a href="https://www.hariandisway.com" target="_blank" class="logo-card" data-name="harian disway logo"
                    data-region="Jawa">
                    <img src="../image/harian-disway-logo.png" alt="harian disway">
                </a>

                <a href="https://www.harianmuba.com" target="_blank" class="logo-card" data-name="harian muba"
                    data-region="Sumatera">
                    <img src="../image/harianmuba.png" alt="harian muba">
                </a>

                <a href="https://www.harianokus.com" target="_blank" class="logo-card" data-name="harian okus"
                    data-region="Sumatera">
                    <img src="../image/harianokus.png" alt="harian ok us">
                </a>

                <a href="https://www.ikn-post.com" target="_blank" class="logo-card" data-name="IKN POST"
                    data-region="Kalimantan">
                    <img src="../image/IKN-POST.webp" alt="ikn post">
                </a>

                <a href="https://www.inforadar.com" target="_blank" class="logo-card" data-name="info radar"
                    data-region="Jawa">
                    <img src="../image/info_radar.png" alt="info radar">
                </a>

                <a href="https://www.jambi-independent.co.id" target="_blank" class="logo-card"
                    data-name="jambi independent co id" data-region="Sumatera">
                    <img src="../image/jambi-independent-co-id-logo.png" alt="jambi independent">
                </a>

                <a href="https://www.jambiekspres.co.id" target="_blank" class="logo-card"
                    data-name="jambi ekspres co id" data-region="Sumatera">
                    <img src="../image/jambiekspres-co-id-logo.png" alt="jambi ekspres">
                </a>

                <a href="https://www.jambitv.co" target="_blank" class="logo-card" data-name="jambi tv co"
                    data-region="Sumatera">
                    <img src="../image/jambitvco-logo.png" alt="jambi tv">
                </a>

                <a href="https://www.jektv.com" target="_blank" class="logo-card" data-name="JEK TV"
                    data-region="Sumatera">
                    <img src="../image/JEKTV.png" alt="jek tv">
                </a>

                <a href="https://www.karawangdisway.com" target="_blank" class="logo-card" data-name="karawang disway"
                    data-region="Jawa">
                    <img src="../image/karawang_disway.png" alt="karawang disway">
                </a>

                <a href="https://www.lahatpos.com" target="_blank" class="logo-card" data-name="lahat pos"
                    data-region="Sumatera">
                    <img src="../image/lahatpos.png" alt="lahat pos">
                </a>

                <a href="https://www.lampungnewspaper.com" target="_blank" class="logo-card"
                    data-name="lampung news paper=logo" data-region="Sumatera">
                    <img src="../image/lampungnewspaper=logo.png" alt="lampung newspaper">
                </a>

                <a href="https://www.linggaupos.com" target="_blank" class="logo-card" data-name="linggau pos"
                    data-region="Sumatera">
                    <img src="../image/linggaupos.png" alt="linggau pos">
                </a>

                <a href="https://www.finnews.com" target="_blank" class="logo-card" data-name="FIN NEWS"
                    data-region="Jawa">
                    <img src="../image/Logo-FINNEWS.png" alt="finnews">
                </a>

                <a href="https://www.jabarekspres" target="_blank" class="logo-card" data-name="jabar ekspres"
                    data-region="Jawa">
                    <img src="../image/logo-je-new.webp" alt="je new">
                </a>

                <a href="https://www.logofin.com" target="_blank" class="logo-card" data-name="logofin"
                    data-region="Jawa">
                    <img src="../image/logofin.webp" alt="logo fin">
                </a>

                <a href="https://www.magelangekspres.com" target="_blank" class="logo-card" data-name="magelang ekspres"
                    data-region="Jawa">
                    <img src="../image/magelang_ekspres.png" alt="magelang ekspres">
                </a>

                <a href="https://www.medialampung.com" target="_blank" class="logo-card" data-name="media lampung"
                    data-region="Sumatera">
                    <img src="../image/media_lampung.png" alt="media lampung">
                </a>

                <a href="https://www.memorandum.co.id" target="_blank" class="logo-card" data-name="memorandum coid"
                    data-region="Jawa">
                    <img src="../image/memorandum-coid-logo.png" alt="memorandum">
                </a>

                <a href="https://www.diswaynetwork" target="_blank" class="logo-card" data-name="disway network"
                    data-region="Jawa">
                    <img src="../image/network-icon.png" alt="network icon">
                </a>

                <a href="https://www.nomorsatukaltim.com" target="_blank" class="logo-card"
                    data-name="nomor satu kaltim" data-region="Kalimantan">
                    <img src="../image/nomorsatukaltim-logo.png" alt="nomorsatu kaltim">
                </a>

                <a href="https://www.oganilir.com" target="_blank" class="logo-card" data-name="oganilir co"
                    data-region="Sumatera">
                    <img src="../image/oganilir.png" alt="ogan ilir">
                </a>

                <a href="https://www.okinews.co" target="_blank" class="logo-card" data-name="okinews co"
                    data-region="Sumatera">
                    <img src="../image/okinews-co-logo.png" alt="oki news">
                </a>

                <a href="https://www.okutimurpos.com" target="_blank" class="logo-card" data-name="oku timur pos"
                    data-region="Sumatera">
                    <img src="../image/oku_timur_pos.png" alt="oku timur pos">
                </a>

                <a href="https://www.pagaralampos.com" target="_blank" class="logo-card" data-name="pagara lampos"
                    data-region="Sumatera">
                    <img src="../image/pagaralampos.png" alt="pagaralam pos">
                </a>

                <a href="https://www.palpos.com" target="_blank" class="logo-card" data-name="palpos"
                    data-region="Sumatera">
                    <img src="../image/palpos.png" alt="palembang pos">
                </a>

                <a href="https://www.palpres.com" target="_blank" class="logo-card" data-name="palpres"
                    data-region="Sumatera">
                    <img src="../image/palpres.png" alt="palembang press">
                </a>

                <a href="https://www.paltv.com" target="_blank" class="logo-card" data-name="paltv"
                    data-region="Sumatera">
                    <img src="../image/paltv.png" alt="pal tv">
                </a>

                <a href="https://www.pasundanekspres.com" target="_blank" class="logo-card" data-name="pasundan"
                    data-region="Jawa">
                    <img src="../image/pasundan.png" alt="pasundan ekspres">
                </a>

                <a href="https://www.pontianakinfohariandisway.com" target="_blank" class="logo-card"
                    data-name="pontianakinfohariandisway-logo" data-region="Kalimantan">
                    <img src="../image/pontianakinfohariandisway-logo.png" alt="pontianak info">
                </a>

                <a href="https://www.prabumulihpos.com" target="_blank" class="logo-card" data-name="prabumulihpos"
                    data-region="Sumatera">
                    <img src="../image/prabumulihpos.png" alt="prabumulih pos">
                </a>

                <a href="https://www.radarbanyumas.com" target="_blank" class="logo-card" data-name="radar_banyumas"
                    data-region="Jawa">
                    <img src="../image/radar_banyumas.png" alt="radar banyumas">
                </a>

                <a href="https://www.radarbengkulu.com" target="_blank" class="logo-card" data-name="radar_bengkulu"
                    data-region="Sumatera">
                    <img src="../image/radar_bengkulu.png" alt="radar bengkulu">
                </a>

                <a href="https://www.radarjabar.com" target="_blank" class="logo-card" data-name="radar_jabar"
                    data-region="Jawa">
                    <img src="../image/radar_jabar.png" alt="radar jabar">
                </a>

                <a href="https://www.radarkaur.com" target="_blank" class="logo-card" data-name="radar_kaur"
                    data-region="Sumatera">
                    <img src="../image/radar_kaur.png" alt="radar kaur">
                </a>

                <a href="https://www.radarkepahiang.com" target="_blank" class="logo-card" data-name="radar_kepahiang"
                    data-region="Sumatera">
                    <img src="../image/radar_kepahiang.png" alt="radar kepahiang">
                </a>

                <a href="https://www.radarlampung.com" target="_blank" class="logo-card" data-name="radar_lampung"
                    data-region="Sumatera">
                    <img src="../image/radar_lampung.png" alt="radar lampung">
                </a>

                <a href="https://www.radarlebong.com" target="_blank" class="logo-card" data-name="radar_lebong"
                    data-region="Sumatera">
                    <img src="../image/radar_lebong.png" alt="radar lebong">
                </a>

                <a href="https://www.radarmajalengka.com" target="_blank" class="logo-card" data-name="radar_majalengka"
                    data-region="Jawa">
                    <img src="../image/radar_majalengka.png" alt="radar majalengka">
                </a>

                <a href="https://www.radarmukomuko.com" target="_blank" class="logo-card" data-name="radar_mukomuko"
                    data-region="Sumatera">
                    <img src="../image/radar_mukomuko.png" alt="radar mukomuko">
                </a>

                <a href="https://www.radarpalembang.com" target="_blank" class="logo-card" data-name="radar_palembang"
                    data-region="Sumatera">
                    <img src="../image/radar_palembang.png" alt="radar palembang">
                </a>

                <a href="https://www.radarseluma.com" target="_blank" class="logo-card" data-name="radar_seluma"
                    data-region="Sumatera">
                    <img src="../image/radar_seluma.png" alt="radar seluma">
                </a>

                <a href="https://www.radartasikmalaya.com" target="_blank" class="logo-card" data-name="radar_tasik"
                    data-region="Jawa">
                    <img src="../image/radar_tasik.png" alt="radar tasikmalaya">
                </a>

                <a href="https://www.radarutara.com" target="_blank" class="logo-card" data-name="radar_utara"
                    data-region="Sumatera">
                    <img src="../image/radar_utara.png" alt="radar utara">
                </a>

                <a href="https://www.radarbengkulu-online.com" target="_blank" class="logo-card"
                    data-name="radarbengkulu-online-id-logo" data-region="Sumatera">
                    <img src="../image/radarbengkulu-online-id-logo.png" alt="radar bengkulu online">
                </a>

                <a href="https://www.radarjabar.com" target="_blank" class="logo-card" data-name="radar-jabar-logo"
                    data-region="Jawa">
                    <img src="../image/radar-jabar-logo.png" alt="radar jabar">
                </a>

                <a href="https://www.radarciamis.com" target="_blank" class="logo-card" data-name="radarciamis-com-logo"
                    data-region="Jawa">
                    <img src="../image/radarciamis-com-logo.png" alt="radar ciamis">
                </a>

                <a href="https://www.radarcirebon.com" target="_blank" class="logo-card" data-name="radarcirebon"
                    data-region="Jawa">
                    <img src="../image/radarcirebon.png" alt="radar cirebon">
                </a>

                <a href="https://www.radargarut24.com" target="_blank" class="logo-card" data-name="radargarut24_small"
                    data-region="Jawa">
                    <img src="../image/radargarut24_small.png" alt="radar garut">
                </a>

                <a href="https://www.radarindramayu.com" target="_blank" class="logo-card" data-name="radarindramayu-id"
                    data-region="Jawa">
                    <img src="../image/radarindramayu-id.png" alt="radar indramayu">
                </a>

                <a href="https://www.radarkuningan.com" target="_blank" class="logo-card"
                    data-name="radarkuningan-com-logo" data-region="Jawa">
                    <img src="../image/radarkuningan-com-logo.png" alt="radar kuningan">
                </a>

                <a href="https://www.radarlampung-online.com" target="_blank" class="logo-card"
                    data-name="radarlampung-online-logo" data-region="Sumatera">
                    <img src="../image/radarlampung-online-logo.png" alt="radar lampung online">
                </a>

                <a href="https://www.radarlamsel.com" target="_blank" class="logo-card" data-name="radarlamsel-com-logo"
                    data-region="Sumatera">
                    <img src="../image/radarlamsel-com-logo.png" alt="radar lamsel">
                </a>

                <a href="https://www.radarlebong-id.com" target="_blank" class="logo-card"
                    data-name="radarlebong-id-logo" data-region="Sumatera">
                    <img src="../image/radarlebong-id-logo.png" alt="radar lebong">
                </a>

                <a href="https://www.radarmetro.com" target="_blank" class="logo-card" data-name="radarmetro"
                    data-region="Jawa">
                    <img src="../image/radarmetro.png" alt="radar metro">
                </a>

                <a href="https://www.radarpena.com" target="_blank" class="logo-card" data-name="radarpena-coid-logo"
                    data-region="Sumatera">
                    <img src="../image/radarpena-coid-logo.png" alt="radar pena">
                </a>

                <a href="https://www.radartanggamus.com" target="_blank" class="logo-card"
                    data-name="radartanggamus-coid-logo" data-region="Sumatera">
                    <img src="../image/radartanggamus-coid-logo.png" alt="radar tanggamus">
                </a>

                <a href="https://www.radartasikmalayatv.com" target="_blank" class="logo-card"
                    data-name="radartasikmalayatv-logo" data-region="Jawa">
                    <img src="../image/radartasikmalayatv-logo.png" alt="radar tasikmalaya tv">
                </a>

                <a href="https://www.radartegal.com" target="_blank" class="logo-card" data-name="radartegal"
                    data-region="Jawa">
                    <img src="../image/radartegal.png" alt="radar tegal">
                </a>

                <a href="https://www.radartuba.com" target="_blank" class="logo-card" data-name="radartuba-coid-logo"
                    data-region="Sumatera">
                    <img src="../image/radartuba-coid-logo.png" alt="radar tuba">
                </a>

                <a href="https://www.rakyatbengkulu.com" target="_blank" class="logo-card" data-name="rakyat_bengkulu"
                    data-region="Sumatera">
                    <img src="../image/rakyat_bengkulu.png" alt="rakyat bengkulu">
                </a>

                <a href="https://www.rakyatbenteng.com" target="_blank" class="logo-card" data-name="rakyat_benteng"
                    data-region="Sumatera">
                    <img src="../image/rakyat_benteng.png" alt="rakyat benteng">
                </a>

                <a href="https://www.rakyatcirebon.com" target="_blank" class="logo-card" data-name="rakyat_cirebon"
                    data-region="Jawa">
                    <img src="../image/rakyat_cirebon.png" alt="rakyat cirebon">
                </a>

                <a href="https://www.rakyatempatlawang.com" target="_blank" class="logo-card"
                    data-name="rakyat_empat_lawang" data-region="Sumatera">
                    <img src="../image/rakyat_empat_lawang.png" alt="rakyat empat lawang">
                </a>

                <a href="https://www.raselnews.com" target="_blank" class="logo-card" data-name="raselnews"
                    data-region="Jawa">
                    <img src="../image/raselnews.png" alt="rasel news">
                </a>

                <a href="https://www.rbtv.com" target="_blank" class="logo-card" data-name="rbtv" data-region="Jawa">
                    <img src="../image/rbtv.png" alt="rb tv">
                </a>

                <a href="https://www.silamparitv.com" target="_blank" class="logo-card" data-name="silamparitv"
                    data-region="Sumatera">
                    <img src="../image/silamparitv.png" alt="silampari tv">
                </a>

                <a href="https://www.sukabumiekspres.com" target="_blank" class="logo-card"
                    data-name="sukabumiekspres.com_lightmode" data-region="Jawa">
                    <img src="../image/sukabumiekspres.com_lightmode.png" alt="sukabumi ekspres">
                </a>

                <a href="https://www.sumedangekspres.com" target="_blank" class="logo-card"
                    data-name="sumedangekspres.com_" data-region="Jawa">
                    <img src="../image/sumedangekspres.com_.png" alt="sumedang ekspres">
                </a>

                <a href="https://www.sumeks.co" target="_blank" class="logo-card" data-name="sumeks.co"
                    data-region="Sumatera">
                    <img src="../image/sumeks.co.png" alt="sumeks">
                </a>

                <a href="https://www.sumeksradionews.com" target="_blank" class="logo-card"
                    data-name="sumeksradionews-logo" data-region="Sumatera">
                    <img src="../image/sumeksradionews-logo.webp" alt="sumeks radio news">
                </a>

                <a href="https://www.tangerangekspres.com" target="_blank" class="logo-card"
                    data-name="tangerangekspres-logo" data-region="Jawa">
                    <img src="../image/tangerangekspres-logo.png" alt="tangerang ekspres">
                </a>
            </div>
        </div>
        <div id="noResults" style="display:none; text-align:center; margin-top:1rem;">
            <p>No results found.</p>
        </div>
    </section>


    <script src="{{ asset('js/more.js') }}"></script>

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