import './assets/main.css'

import { createApp } from 'vue'
import App from './App.vue'
import router from "./router/router.js" // Assuming this is the correct path to your router file

const app = createApp(App)
app.use(router) // Make sure to use the router
app.mount('#app')