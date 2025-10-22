import { createRouter, createWebHistory } from 'vue-router'

// Vista principal con todas las secciones
import Home from '../views/Home.vue'

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
  // Páginas legales
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
  scrollBehavior(to) {
    if (to.hash) {
      return { el: to.hash, behavior: 'smooth' }
    }
    return { top: 0 }
  }
})

export default router
