Vue.component('panel',{
    props: ['title', 'body'],

    data(){
        return {
          isVisible: true
        };
    },

    template: '' +
    '  <div class="panel panel-default" v-show="isVisible">\n' +
    '  <div class="panel-heading">{{ title }}<button type="button" @click="hideModal">x</button></div>\n' +
    '  <div class="panel-body">{{ body }}</div>\n' +
    '</div>' +
    '',

    methods: {
        hideModal() {
            this.isVisible = false;
        }
    }
});

new Vue({
    el: '#root'
});