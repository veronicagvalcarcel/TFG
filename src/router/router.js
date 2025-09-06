import { createRouter, createWebHistory } from 'vue-router'

// Importar vistas
import Home from '../views/Home.vue'
import About from '../views/About.vue'
import Services from '../views/Services.vue'
import Carrusel from '../views/Carrusel.vue'
import Reservas from '../views/Reservas.vue'
import FAQ from '../views/FAQ.vue'


// Páginas legales
import AvisoLegal from '../views/Aviso_legal.vue'
import Politicas from '../views/Politicas.vue'
import ProteccionDatos from '../views/Proteccion_datos.vue'

const routes = [
  {
    path: '/',
    name: 'home',
    component: Home
  },
  {
    path: '/about',
    name: 'about',
    component: About
  },
  {
    path: '/services',
    name: 'services',
    component: Services
  },
  {
    path: '/carrusel',
    name: 'carrusel',
    component: Carrusel
  },
  {
    path: '/reservas',
    name: 'reservas',
    component: Reservas
  },
  {
    path: '/faq',
    name: 'faq',
    component: FAQ
  },
  {
  },
  // Rutas legales
  {
    path: '/aviso_legal',
    name: 'aviso_legal',
    component: AvisoLegal
  },
  {
    path: '/politicas',
    name: 'politicas',
    component: Politicas
  },
  {
    path: '/proteccion_datos',
    name: 'proteccion_datos',
    component: ProteccionDatos
  }
]

const router = createRouter({
  history: createWebHistory(),
  routes,
  scrollBehavior(to, from, savedPosition) {
    // Si hay hash, hace scroll al id correspondiente
    if (to.hash) {
      return {
        el: to.hash,
        behavior: 'smooth',
      }
    }
    // Scroll al top si no hay hash
    return { top: 0 }
  }
})

export default router
