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

// More js
  const searchInput = document.getElementById("searchInput");
  const regionSelect = document.getElementById("regionSelect");
  const cards = document.querySelectorAll(".logo-card");

  function filterCards() {
    const searchText = searchInput.value.toLowerCase();
    const selectedRegion = regionSelect.value;
    let hasVisible = false;

    cards.forEach(card => {
      const name = card.getAttribute("data-name").toLowerCase();
      const region = card.getAttribute("data-region");

      const matchesSearch = name.includes(searchText);
      const matchesRegion = selectedRegion === "all" || region === selectedRegion;

      if (matchesSearch && matchesRegion) {
        card.style.display = "inline-block"; // Atau 'block' atau 'flex' tergantung layout-mu
        hasVisible = true;
      } else {
        card.style.display = "none";
      }
    });

    // Tampilkan teks jika tidak ada hasil
    const noResults = document.getElementById("noResults");
    if (noResults) {
      noResults.style.display = hasVisible ? "none" : "block";
    }
  }

  // Event listeners
  searchInput.addEventListener("input", filterCards);
  regionSelect.addEventListener("change", filterCards);

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