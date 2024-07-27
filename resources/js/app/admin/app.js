import app from './app.vue';

import { createApp } from 'vue';

import router from './router/router';

createApp( app ).use( router ).mount('#app')
