// src/router/index.ts
import { createRouter, createWebHistory } from 'vue-router'
import Home from '../components/UrbexHeader.vue'
import About from '../components/About.vue' // Adjust this if your file is elsewhere

const routes = [
  { path: '/', name: 'Home', component: Home },
  { path: '/About', name: 'About', component: About },
]

const router = createRouter({
  history: createWebHistory(),
  routes,
})

export default router