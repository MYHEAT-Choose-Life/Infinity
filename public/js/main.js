 AOS.init({
    duration: 1000, // animation duration in ms
    once: false,     // animation happens only once
  });

// === TOGGLE NAV MENU ON MOBILE ===
const hamburger = document.getElementById('hamburger');
const navlist = document.getElementById('navlist');

hamburger.addEventListener('click', () => {
  navlist.classList.toggle('show');
});