require('./bootstrap');

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

// Toggler for navigation
let toggler = document.getElementById("nav-toggler");
toggler.onclick = function(params = document.getElementById("nav-box")) {
    params.classList.toggle("hidden");
}