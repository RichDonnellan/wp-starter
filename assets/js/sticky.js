// Add margin to header/footer to compensate for the sticky cta
let setTopMarginOnHeader = () => {
  const header = document.querySelector('header');
  const offset = document.querySelector('[data-js="header-margin-offset"]');

  if (!offset) return;

  header.style.marginTop =
    offset.offsetHeight > 0 ? `${offset.offsetHeight}px` : null;
};
setTopMarginOnHeader();

let rafCallbacks = [setTopMarginOnHeader];

(function resize(cb) {
  window.onresize = e => {
    cb.forEach(func => {
      cancelAnimationFrame(func);
      requestAnimationFrame(func);
    });
  };
})(rafCallbacks);

// Handles visibility of the "sticky" mobile cta
{
  const footerOffset = document.querySelector('[data-js="offset-cta-sticky-mobile"]');
  const cta = document.querySelector('[data-js="cta-sticky-mobile"]');
  let lastKnownScrollY = 0;
  let currentScrollY = 0;

  let handleMobileStickyCTA = () => {
    if (!cta) return;

    currentScrollY = window.scrollY;

    if (currentScrollY > lastKnownScrollY) {
      cta.classList.add('is-active');
      footerOffset.style.paddingBottom = `${cta.offsetHeight}px`;
    }
    if (currentScrollY < lastKnownScrollY) {
      cta.classList.remove('is-active');
      footerOffset.style.paddingBottom = 0;
    }

    lastKnownScrollY = currentScrollY;
  };

  window.addEventListener('scroll', handleMobileStickyCTA, false);
}
