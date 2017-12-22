
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

Vue.component('example', require('./components/Example.vue'));
Vue.component('club', require('./components/Club.vue'));
Vue.component('players', require('./components/demo/players.vue'));

Vue.component('chat-message', require('.chat/components/chat/ChatMessage.vue'));
Vue.component('chat-log', require('.chat/components/chat/ChatLog.vue'));
Vue.component('chat-composer', require('.chat/components/chat/ChatComposer.vue'));
Vue.component('chat', require('.chat/components/chat/Chat.vue'));

Vue.component('first', require('./components/test/first.vue'));

const app = new Vue({
    el: '#app'
});

