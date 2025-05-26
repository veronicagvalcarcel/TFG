import { createRouter, createWebHistory } from 'vue-router';
import Home from '../views/Home.vue';
import Reservas from '../views/Reservas.vue';
import Galeria from '../views/Galeria.vue';
import FAQ from '../views/FAQ.vue';
import Admin from '../views/Admin.vue';
import Contacto from '../views/Contacto.vue';

const routes = [
  { path: '/', component: Home },
  { path: '/reservas', component: Reservas },
  { path: '/galeria', component: Galeria },
  { path: '/faq', component: FAQ },
  { path: '/admin', component: Admin },
  { path: '/contacto', component: Contacto },
];

const router = createRouter({
  history: createWebHistory(),
  routes,
});

export default router;