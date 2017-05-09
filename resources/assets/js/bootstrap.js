// jQueyr
window.$ = window.jQuery = require('jquery');

// MaterializeCSS
require('materialize-css');

// Axios
window.axios = require('axios');

window.axios.defaults.headers.common['X-CSRF-TOKEN'] = window.Laravel.csrfToken;
window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';
