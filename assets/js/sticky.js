// Add margin to header/footer to compensate for the sticky cta
let setTopMarginOnHeader = () => {
  const header = document.querySelector('header');
  const offset = document.querySelector('[data-js="header-margin-offset"]');

  if (!offset) return;

  header.style.marginTop =
    offset.offsetHeight > 0 ? `${offset.offsetHeight}px` : null;
};

setTopMarginOnHeader();

let setBottomMarginOnFooter = () => {
  const footer = document.querySelector('footer');
  const offset = document.querySelector('[data-js="footer-margin-offset"]');

  if (!offset) return;

  footer.style.marginBottom =
    offset.offsetHeight > 0 ? `${offset.offsetHeight}px` : null;
};

setBottomMarginOnFooter();

let rafCallbacks = [setTopMarginOnHeader, setBottomMarginOnFooter];

(function resize(cb) {
  window.onresize = e => {
    cb.forEach(func => {
      cancelAnimationFrame(func);
      requestAnimationFrame(func);
    });
  };
})(rafCallbacks);

// Works! Just need to figure out how to implement RAF
// function setDynamicSpacingForStickyElement(targetEl, offsetEl, prop) {
//     let el = document.querySelector(targetEl);
//     let offset = document.querySelector(offsetEl);
//   el.style[prop] = offset.offsetHeight > 0 ? `${offset.offsetHeight}px` : null;
// }

// const header = setDynamicSpacingForStickyElement;
// const footer = setDynamicSpacingForStickyElement;

// header('header', '[data-js="header-margin-offset"]', 'marginTop');
// footer('footer', '[data-js="footer-margin-offset"]', 'marginBottom');
