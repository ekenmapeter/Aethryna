import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

// Navigation functionality
document.addEventListener('DOMContentLoaded', function() {
    // Navbar scroll effect with logo change
    const navbar = document.getElementById('navbar');
    const defaultLogo = document.querySelector('.default-logo');
    const scrolledLogo = document.querySelector('.scrolled-logo');

    window.addEventListener('scroll', function() {
        if (window.scrollY > 50) {
            navbar.classList.add('scrolled');
        } else {
            navbar.classList.remove('scrolled');
        }
    });

    // Mobile menu toggle
    const mobileMenu = document.getElementById('mobileMenu');
    const mobileNavMenu = document.getElementById('mobileNavMenu');

    if (mobileMenu && mobileNavMenu) {
        mobileMenu.addEventListener('click', function() {
            mobileNavMenu.classList.toggle('active');
        });

        // Close mobile menu when clicking on a link
        const mobileLinks = mobileNavMenu.querySelectorAll('a');
        mobileLinks.forEach(link => {
            link.addEventListener('click', function() {
                mobileNavMenu.classList.remove('active');
            });
        });

        // Close mobile menu when clicking outside
        mobileNavMenu.addEventListener('click', function(e) {
            if (e.target === mobileNavMenu) {
                mobileNavMenu.classList.remove('active');
            }
        });
    }
});
