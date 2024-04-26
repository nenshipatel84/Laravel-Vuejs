import { createApp } from 'vue';
import VueRouter from 'vue-router';

import CreateCronJob from './components/CreateCronJob.vue';
import HelloWorld from './components/HelloWorld.vue';

import routes from './routes'; // Your route definitions (explained later)
const router = new VueRouter({
    routes,
});
Vue.component('hello-world', HelloWorld);
Vue.component('create-cron-job', CreateCronJob);

createApp({
    components: {
        HelloWorld,
        CreateCronJob,
    },
}).mount('#app');
