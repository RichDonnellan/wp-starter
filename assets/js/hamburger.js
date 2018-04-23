const hamburger = document.querySelector('[data-js="hamburger"]');
hamburger.addEventListener('click', function(e) {
  e.preventDefault();
  hamburger.classList.toggle('is-active');
});
