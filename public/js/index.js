// Burger menu sudah ada
const burger = document.getElementById('burger');
const menu = document.getElementById('menu');

burger.addEventListener('click', () => {
    menu.classList.toggle('active');
    if (menu.classList.contains('active')) {
        burger.src = "../svg/close.svg";
    } else {
        burger.src = "../svg/menu.svg";
    }
});

// === Tambahan script untuk dropdown mobile ===
const dropdowns = document.querySelectorAll('.dropdown');

// Deteksi apakah sedang mode mobile (menu aktif)
dropdowns.forEach(drop => {
    const dropBtn = drop.querySelector('.dropbtn');
    dropBtn.addEventListener('click', function(e) {
        if (window.innerWidth <= 768) { // hanya untuk mobile
            e.preventDefault();
            e.stopPropagation();
            drop.classList.toggle('active');

            // Tutup dropdown lain
            dropdowns.forEach(other => {
                if (other !== drop) {
                    other.classList.remove('active');
                }
            });
        }
    });

    // Tambahan: Buka/tutup lewat arrow di sidebar
    const arrow = drop.querySelector('.arrow');
    if (arrow) {
        arrow.addEventListener('click', function(e) {
            e.preventDefault();
            e.stopPropagation();
            drop.classList.toggle('active');

            // Tutup dropdown lain
            dropdowns.forEach(other => {
                if (other !== drop) {
                    other.classList.remove('active');
                }
            });
        });
    }
});

// Tutup semua dropdown saat klik di luar
document.addEventListener('click', function(e) {
    if (window.innerWidth <= 768) {
        dropdowns.forEach(drop => drop.classList.remove('active'));
    }
});

// slide
const slides = document.querySelectorAll('.slide');
const prevBtn = document.querySelector('.prev-btn');
const nextBtn = document.querySelector('.next-btn');

let currentIndex = 0;
let slideInterval;

function showSlide(index) {
  slides.forEach((slide, i) => {
    slide.classList.toggle('active', i === index);
  });
}

function nextSlide() {
  currentIndex = (currentIndex + 1) % slides.length;
  showSlide(currentIndex);
}

function prevSlide() {
  currentIndex = (currentIndex - 1 + slides.length) % slides.length;
  showSlide(currentIndex);
}

function startSlideShow() {
  slideInterval = setInterval(nextSlide, 4000);
}

function stopSlideShow() {
  clearInterval(slideInterval);
}

// Event listener tombol
nextBtn.addEventListener('click', () => {
  nextSlide();
  stopSlideShow();
  startSlideShow();
});

prevBtn.addEventListener('click', () => {
  prevSlide();
  stopSlideShow();
  startSlideShow();
});

// Mulai slideshow otomatis
startSlideShow();


// news
document.addEventListener("DOMContentLoaded", function () {
  let currentNewsIndex = 0;
  const slides = document.querySelectorAll('.news-slide');
  const dots = document.querySelectorAll('.news-dots .dot');

  function showNewsSlide(index) {
    slides.forEach((slide, i) => {
      slide.classList.toggle('active', i === index);
    });

    dots.forEach((dot, i) => {
      dot.classList.toggle('active', i === index);
    });

    currentNewsIndex = index;
  }

  // Tampilkan slide pertama
  showNewsSlide(currentNewsIndex);

  // Auto slide tiap 10000 mili detik
  setInterval(() => {
    let nextIndex = (currentNewsIndex + 1) % slides.length;
    showNewsSlide(nextIndex);
  }, 10000);

  // Untuk klik manual dot (pastikan dot pakai onclick di HTML)
  window.showNewsSlide = showNewsSlide;
});
// === Podcast Carousel (slide ke kiri-kanan) ===
document.addEventListener("DOMContentLoaded", function () {
  const podcastTrack = document.querySelector('.podcast-track');
  const podcastSlides = document.querySelectorAll('.podcast-slide');
  const nextPodcastBtn = document.querySelector('.carousel-btn.next');
  const prevPodcastBtn = document.querySelector('.carousel-btn.prev');

  if (!podcastTrack || podcastSlides.length === 0) return;

  let podcastIndex = 0;
  let autoSlideInterval;

  function updatePodcastSlide() {
    podcastTrack.style.transform = `translateX(-${podcastIndex * 100}%)`;
  }

  function nextPodcastSlide() {
    podcastIndex = (podcastIndex + 1) % podcastSlides.length;
    updatePodcastSlide();
  }

  function prevPodcastSlide() {
    podcastIndex = (podcastIndex - 1 + podcastSlides.length) % podcastSlides.length;
    updatePodcastSlide();
  }

  function startAutoSlide() {
    autoSlideInterval = setInterval(nextPodcastSlide, 5000); // Ganti slide tiap 5 detik
  }

  function stopAutoSlide() {
    clearInterval(autoSlideInterval);
  }

  // Event untuk tombol navigasi
  nextPodcastBtn?.addEventListener('click', () => {
    nextPodcastSlide();
    stopAutoSlide();
    startAutoSlide(); // Reset timer
  });

  prevPodcastBtn?.addEventListener('click', () => {
    prevPodcastSlide();
    stopAutoSlide();
    startAutoSlide(); // Reset timer
  });

  // Mulai otomatis saat halaman dimuat
  startAutoSlide();
});

// Java Script untuk loading saat page di buka
window.addEventListener("load", () => {
  const loader = document.querySelector(".loader");

  // Delay sedikit agar animasi terlihat sebentar
  setTimeout(() => {
    loader.style.opacity = "0";
    loader.style.transform = "translateY(20px)";
    loader.style.visibility = "hidden";
  }, 1000); // 1 detik delay
});