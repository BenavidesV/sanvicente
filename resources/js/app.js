require('./bootstrap');
window.Vue = require('vue');
import Vue from 'vue';

import store from './store/index'
import VideoBg from 'vue-videobg'

Vue.component('video-bg', VideoBg)

Vue.component('Searchbar', require('./components/Searchbar').default);
Vue.component('Product', require('./components/Product').default);
Vue.component('Products', require('./components/Products').default);


const app = new Vue({
  el: '#app',
  store
});
