// Burger menu functionality
const burger = document.getElementById('burger');
const menu = document.getElementById('menu');

burger.addEventListener('click', () => {
    menu.classList.toggle('active');
    if (menu.classList.contains('active')) {
        burger.src = "data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 24 24' stroke='currentColor'%3E%3Cpath stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M6 18L18 6M6 6l12 12'/%3E%3C/svg%3E";
    } else {
        burger.src = "data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 24 24' stroke='currentColor'%3E%3Cpath stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M4 6h16M4 12h16M4 18h16'/%3E%3C/svg%3E";
    }
});

// Dropdown functionality for mobile
const dropdowns = document.querySelectorAll('.dropdown');

dropdowns.forEach(drop => {
    const dropBtn = drop.querySelector('.dropbtn');
    dropBtn.addEventListener('click', function (e) {
        if (window.innerWidth <= 768) {
            e.preventDefault();
            e.stopPropagation();
            drop.classList.toggle('active');

            // Close other dropdowns
            dropdowns.forEach(other => {
                if (other !== drop) {
                    other.classList.remove('active');
                }
            });
        }
    });
});

// Close all dropdowns when clicking outside
document.addEventListener('click', function (e) {
    if (window.innerWidth <= 768) {
        dropdowns.forEach(drop => drop.classList.remove('active'));
    }
});

// Smooth scrolling for navigation links
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();
        const target = document.querySelector(this.getAttribute('href'));
        if (target) {
            target.scrollIntoView({
                behavior: 'smooth',
                block: 'start'
            });
            // Close mobile menu if open
            menu.classList.remove('active');
            burger.src = "data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 24 24' stroke='currentColor'%3E%3Cpath stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M4 6h16M4 12h16M4 18h16'/%3E%3C/svg%3E";
        }
    });
});

// Add scroll effect to navbar
let lastScrollTop = 0;
const navbar = document.querySelector('.navbar');

window.addEventListener('scroll', function () {
    let scrollTop = window.pageYOffset || document.documentElement.scrollTop;

    if (scrollTop > lastScrollTop && scrollTop > 100) {
        // Scrolling down
        navbar.style.transform = 'translateY(-100%)';
    } else {
        // Scrolling up
        navbar.style.transform = 'translateY(0)';
    }

    lastScrollTop = scrollTop;
});

// Add animation on scroll
const observerOptions = {
    threshold: 0.1,
    rootMargin: '0px 0px -50px 0px'
};

const observer = new IntersectionObserver(function (entries) {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            entry.target.style.opacity = '1';
            entry.target.style.transform = 'translateY(0)';
        }
    });
}, observerOptions);

// Observe all cards
document.querySelectorAll('.platform-card').forEach(card => {
    card.style.opacity = '0';
    card.style.transform = 'translateY(20px)';
    card.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
    observer.observe(card);
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

// Java Script Animation untuk Jaringan Platform Card Layout
document.addEventListener('DOMContentLoaded', () => {
    const animatedItems = document.querySelectorAll('.platform-animate');

    const animateOnScroll = () => {
        const triggerBottom = window.innerHeight * 0.85;

        animatedItems.forEach(item => {
            const itemTop = item.getBoundingClientRect().top;

            if (itemTop < triggerBottom && itemTop > 0) {
                item.classList.add('active');
            } else {
                item.classList.remove('active');
            }
        });
    };

    window.addEventListener('scroll', animateOnScroll);
    animateOnScroll(); // trigger on load
});