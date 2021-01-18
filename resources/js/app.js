require('./bootstrap');

import Vue from 'vue';

Vue.component('satisfaction-component', require('./components/SatisfactionComponent.vue').default);

const app = new Vue({
    el: '#app',
    data() {
        return {
            open: false
        }
    }
});