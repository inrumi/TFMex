import {tns} from 'tiny-slider/src/tiny-slider.module';

function createTNS(container, min = 1, max = 5, loop = true) {
  if (!container) return;

  tns({
    container,
    loop,
    items: min,
    slideBy: 'page',
    nav: false,
    controls: false,
    mouseDrag: true,
    animateIn: 'tns-fadeIn',
    responsive: {
      768: {
        items: 3
      },
      1025: {
        items: max
      }
    }
  });

  if (document.querySelector('#pan')) {
    tns({
      container: "#pan",
      items: 1,
      navContainer: "#pan-control",
      controls: false,
      autoHeight: true
    });
  }
}

export default createTNS;