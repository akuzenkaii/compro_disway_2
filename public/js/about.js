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

dropdowns.forEach(drop => {
    const dropBtn = drop.querySelector('.dropbtn');
    dropBtn.addEventListener('click', function (e) {
        if (window.innerWidth <= 768) {
            e.preventDefault();
            e.stopPropagation();
            drop.classList.toggle('active');

            dropdowns.forEach(other => {
                if (other !== drop) {
                    other.classList.remove('active');
                }
            });
        }
    });

    const arrow = drop.querySelector('.arrow');
    if (arrow) {
        arrow.addEventListener('click', function (e) {
            e.preventDefault();
            e.stopPropagation();
            drop.classList.toggle('active');

            dropdowns.forEach(other => {
                if (other !== drop) {
                    other.classList.remove('active');
                }
            });
        });
    }
});

// Tutup semua dropdown saat klik di luar
document.addEventListener('click', function (e) {
    if (window.innerWidth <= 768) {
        dropdowns.forEach(drop => drop.classList.remove('active'));
    }
});

// Java Script untuk loading saat page di buka
window.addEventListener("load", () => {
    const loader = document.querySelector(".loader");
    const headline = document.getElementById("headline");

    // Delay sedikit agar animasi terlihat sebentar
    setTimeout(() => {
        loader.style.opacity = "0";
        loader.style.transform = "translateY(20px)";
        loader.style.visibility = "hidden";

        // Re-trigger headline animation
        if (headline) {
            const clone = headline.cloneNode(true);
            headline.parentNode.replaceChild(clone, headline);
        }

        animateHeroText(); // pastikan dijalankan setelah loader selesai
    }, 1000);
});

// === Animasi scroll manual ===
function animateOnScroll() {
    const paragraphs = document.querySelectorAll('.about-section p');
    const statsItems = document.querySelectorAll('.stats-list li');

    const scrollY = window.innerHeight;

    paragraphs.forEach(p => {
        const rect = p.getBoundingClientRect();
        if (rect.top < scrollY - 80) {
            p.classList.add('visible');
        }
    });

    statsItems.forEach(item => {
        const rect = item.getBoundingClientRect();
        if (rect.top < scrollY - 80) {
            item.classList.add('visible');
        }
    });
}

window.addEventListener('scroll', animateOnScroll);
window.addEventListener('load', animateOnScroll);

// === Hero Title Animation ===
function animateHeroText() {
    const title = document.querySelector('.hero-title');
    const subtitle = document.querySelector('.hero-subtitle');

    if (!title || !subtitle) return;

    title.style.opacity = 0;
    title.style.transform = 'translateY(40px)';
    subtitle.style.opacity = 0;
    subtitle.style.transform = 'translateY(30px)';

    setTimeout(() => {
        title.style.transition = 'all 0.7s ease';
        title.style.opacity = 1;
        title.style.transform = 'translateY(0)';
    }, 300);

    setTimeout(() => {
        subtitle.style.transition = 'all 0.7s ease';
        subtitle.style.opacity = 1;
        subtitle.style.transform = 'translateY(0)';
    }, 600);
}

// Founder Section JS
window.addEventListener("scroll", () => {
  const section = document.querySelector(".founder-section");
  const rect = section.getBoundingClientRect();
  if (rect.top < window.innerHeight) {
    section.classList.add("active");
  }
});

// Visi dan Misi Animation JS
  function revealOnScroll() {
    const elements = document.querySelectorAll('.fade-up');
    const windowHeight = window.innerHeight;

    elements.forEach(el => {
      const elementTop = el.getBoundingClientRect().top;

      if (elementTop < windowHeight - 100) {
        el.classList.add('visible');
      } else {
        el.classList.remove('visible');
      }
    });
  }

  window.addEventListener('scroll', revealOnScroll);
  window.addEventListener('load', revealOnScroll);

  // Java Script Timeline Section Animation
  document.addEventListener("DOMContentLoaded", function () {
  AOS.init({
    duration: 1000,
    once: true
  });
});
