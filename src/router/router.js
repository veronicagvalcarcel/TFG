import { createRouter, createWebHistory } from 'vue-router'
import Home from '../views/Home.vue'
import Reservas from '../views/ReservasForm.vue'
import Carrusel from '../views/Carrusel.vue'
import FAQ from '../views/FAQ.vue'
import Admin from '../views/Admin.vue'

const routes = [
  {
    path: '/',
    name: 'home',
    component: Home
  },
  {
    path: '/reservas',
    name: 'reservas',
    component: Reservas
  },
  {
    path: '/carrusel',
    name: 'carrusel',
    component: Carrusel
  },
  {
    path: '/faq',
    name: 'faq',
    component: FAQ
  },
  {
    path: '/admin',
    name: 'admin',
    component: Admin
  }
]

const router = createRouter({
  history: createWebHistory(),
  routes
})

export default router