<template>
   <div class="chat-log">
      <chat-message class="chat-message" v-for="message in messages" v-bind:message="message"></chat-message>
      <div class="empty" v-show="messages.length === 0">
         Nothing Yet
      </div>
   </div>
</template>

<script>
   export default{
      props: ['messages']
   }
</script>

<style>
   .chat-log .chat-message:nth-child(even){
      background-color: khaki;
   }

   .empty {
      padding: 1rem;
      text-align: center;
   }
</style>