import './bootstrap';
import '../css/app.css';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

import.meta.glob([
    '../images/**',
    '../fonts/**',
]);


let lastScrollY = window.scrollY;
const navbar = document.getElementById('navbar');
let isScrollingDown = false;

window.addEventListener('scroll', () => {
    // Определяем, скроллит ли пользователь вниз
    if (window.scrollY > lastScrollY && !isScrollingDown) {
        // Скролл вниз, скрываем Navbar
        navbar.classList.add('-translate-y-full');
        // navbar.classList.remove('sticky');
        isScrollingDown = true;
    }

    // Определяем, скроллит ли пользователь вверх
    if (window.scrollY < lastScrollY && isScrollingDown) {
        // Скролл вверх, показываем Navbar
        navbar.classList.remove('-translate-y-full');
        // navbar.classList.add('sticky');
        isScrollingDown = false;
    }

    // Обновляем последнее положение скролла
    lastScrollY = window.scrollY;
});
