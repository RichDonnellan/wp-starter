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
