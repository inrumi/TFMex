import '../sass/styles.scss';

import {$} from './modules/bling';
import './modules/menu'
import './modules/gForms'
import carousel from './modules/carousel'
import createTNS from './modules/tinySlider'
import baguetteBox from 'baguettebox.js';

const gallery = $('#gallery');

if (gallery) { baguetteBox.run(`#${gallery.id}`); }

carousel($('#carousel'));
createTNS($('.sliders__content'));
createTNS($('#pan-control'), 4, 8, false);