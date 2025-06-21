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