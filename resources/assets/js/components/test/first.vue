<script>
    var app = new Vue({
        el: '#root',

        data: {
            isLoading: false
        },

        methods: {
            toggleClass(){
                this.isLoading = true;
            }
        },
    });
</script>