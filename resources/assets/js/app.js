
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
    data: {
        operand1: '',
        operand2: '',
        operator: 'alien', // Default to alien
        result: ''
    },
    methods: {
        calculate: function () {
            const app = this;
            axios.post('/' + this.operator, {
                operand1: this.operand1,
                operand2: this.operand2
            })
            .then(function (response) {
                app.result = response.data.toString();
            });
        }
    }
});
