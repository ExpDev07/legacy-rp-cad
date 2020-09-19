require('./bootstrap');

import Vue from 'vue';
import { InertiaApp } from '@inertiajs/inertia-vue';
import { FontAwesomeIcon } from '@fortawesome/vue-fontawesome';
import { library } from '@fortawesome/fontawesome-svg-core';
import { fas } from '@fortawesome/free-solid-svg-icons';

// Use inertia.
Vue.use(InertiaApp)

// Register global components.
Vue.component('fa-icon', FontAwesomeIcon);

// Ready font awesome library.
library.add(fas);

// Get app wrapper.
const app = document.getElementById('app')

// Create vue instance and mount to app.
new Vue({
    render: h => h(InertiaApp, {
        props: {
            initialPage: JSON.parse(app.dataset.page),
            resolveComponent: name => import(`./Pages/${name}`).then(module => module.default),
        },
    }),
}).$mount(app)
