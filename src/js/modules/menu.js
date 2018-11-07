import { $, $$ } from './bling';

export default (function() {
  const currentPath = window.location.pathname.split('/').pop();
  const navLinks = $$('.nav__link');
  const toggler = $('.nav__toggler');
  const collapsableMenu = $('.nav__collapsable');

  navLinks.forEach(function (navLink, i) {
    let navPath = navLink.href.split('/').pop();
    navLink.classList.remove('nav__link--current');
    if (navPath === currentPath) {
      navLink.classList.add('nav__link--current');
    }

    // Semi fix para galeria seleccionada
    if (i === 2 && currentPath === 'galeria-seleccionada') {
      navLink.classList.add('nav__link--current');
    }
  });

  toggler.addEventListener('click', function () {
    collapsableMenu.classList.toggle('nav__collapsable--show');
  });
})();