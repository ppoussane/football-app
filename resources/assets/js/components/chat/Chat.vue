<template>
    <div class="chat">
        <chat-log :messages="messages"></chat-log>
        <chat-composer v-on:messagesent="addMessage"></chat-composer>
    </div>
</template>

<script>
    export default {
        data(){
            return{
                messages:[]
            }
        },

        methods: {
            addMessage(message) {
                this.messages.push(message)
                axios.post('/messages', message).then(response =>{
                    // Do Whatever
                })
            }
        },

        created(){
            axios.get('/messages').then(response=> {
                this.messages = response.data;
            });

            Echo.join('chatroom')
                .listen('MessagePosted', (e) =>
                {
                    console.log(e);
                });
        }
    }
</script>
