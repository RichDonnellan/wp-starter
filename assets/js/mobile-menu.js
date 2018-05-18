const root = document.querySelector('html');
const hamburger = document.querySelector('[data-js="hamburger"]');
const overlay = document.querySelector('[data-js="menu-overlay"]');
const menu = document.querySelector('#menu-mobile-navigation');

hamburger.addEventListener('click', function(e) {
  e.preventDefault();
  root.classList.toggle('no-scroll');
  hamburger.classList.toggle('is-active');
  overlay.classList.toggle('is-active');
  menu.classList.toggle('is-active');
});
