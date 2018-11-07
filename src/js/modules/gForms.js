import {$, $$} from './bling';

export default (function () {
  const inputs = $$('.form__item > [name]');

  inputs.on('change', function (e) {
    if (!this.value && !(this.options && this.options[this.selectedIndex].value)) {
      this.parentNode.classList.remove('form__item--focused');
      return;
    }
    this.parentNode.classList.add('form__item--focused');
  });
})();