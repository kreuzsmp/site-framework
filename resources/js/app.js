import './bootstrap';
import '../css/app.css';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

import.meta.glob([
    '../images/**',
    '../fonts/**',
]);

let toggler = document.querySelector('.mobile-toggler');
let menu = document.querySelector('.mobile-menu');
let logo = document.querySelector('.logo');
let preload = document.querySelector('#preload');

let accountMenu = document.querySelector('#accountmenu');
let accountIcon = document.querySelector('#accountIcon');


toggler.onclick = function (elem) {
    menu.classList.toggle('-translate-x-[200%]')


    if (toggler.classList.contains('absolute')) {
        toggler.classList.replace('absolute', 'fixed');
    }
    else {
        toggler.classList.replace('fixed', 'absolute')
    }

    if (logo.classList.contains('absolute')) {
        logo.classList.replace('absolute', 'fixed');
    }
    else {
        logo.classList.replace('fixed', 'absolute');
    }
}

if (accountIcon) {
    accountIcon.onclick = function () {
        accountMenu.classList.toggle('scale-0');
    }
}

window.onload = function () {
    preload.classList.add('animate-loaded');

}

preload.onanimationend = function () {
    preload.classList.add('hidden');
}
