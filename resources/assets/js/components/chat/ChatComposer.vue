<template>
    <div class="chat-composer">
        <input type="text" placeholder="message here ..." v-model="messageText" @keydown.enter="sendMessage">
        <button class="btn btn-primary" @click="sendMessage">Send</button>
    </div>
</template>

<script>
    export default{
        data(){
            return{
                messageText:''
            }
        },

        methods:{
            sendMessage(){
                this.$emit('messagesent',{
                    message:this.messageText,
                    user: "Peyman"
                });
                this.messageText='';
            }
        }
    }
</script>