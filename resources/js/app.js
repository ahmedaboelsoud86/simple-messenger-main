import'./bootstrap';

import { createApp } from 'vue/dist/vue.esm-bundler';
import chats from './components/ChatsComponent.vue';
import chatapp from './components/ChatApp.vue';

createApp({
    components: {
        chats,
        chatapp
    }
}).mount('#app');

