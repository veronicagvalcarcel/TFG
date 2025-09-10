<template>
  <!-- Menú fijo igual que Home -->
  <nav class="main-nav" role="navigation" aria-label="Menú principal">
    <div class="nav-container">
      <!-- Logo -->
      <router-link to="/" class="logo-link">Witch Tattoo Studio</router-link>

      <!-- Botón hamburguesa (solo móvil) -->
<button class="hamburger" @click="menuOpen = !menuOpen" aria-label="Abrir menú" :aria-expanded="menuOpen">
  <span :class="{ open: menuOpen }"></span>
  <span :class="{ open: menuOpen }"></span>
  <span :class="{ open: menuOpen }"></span>
</button>


      <!-- Enlaces con scroll hash -->

<div class="nav-links" :class="{ open: menuOpen }">
  <router-link :to="{ path: '/', hash: '#Carrusel' }">Galería</router-link>
  <router-link :to="{ path: '/', hash: '#ServicesSection' }">Servicios</router-link>
  <router-link :to="{ path: '/', hash: '#FAQ' }">FAQ</router-link>
</div>


      <!-- Iconos sociales -->
<!-- Iconos sociales -->
<div class="social-icons">
  <a class="social-icon" href="https://www.instagram.com/witch_tatto/" target="_blank" rel="noopener noreferrer">
    <img src="/Logos/instagram.svg" alt="Instagram">
  </a>
  <a class="social-icon" href="https://wa.me/34633852858" target="_blank" rel="noopener noreferrer">
    <img src="/Logos/whatsapp.svg" alt="WhatsApp">
  </a>
</div>
    </div>
  </nav>

  <!-- Contenedor de reservas con fondo -->
  <div class="reservas-page">
    <div class="overlay"></div>
    <div class="reservas-container">
      <h1 class="reservas-title">Reserva tu cita</h1>

      <p v-if="mensaje" class="success">{{ mensaje }}</p>
      <p v-if="error" class="error">{{ error }}</p>

      <form class="reservas-form" @submit.prevent="enviarReserva">
        <label>
          Nombre:
          <input type="text" placeholder="Tu nombre" v-model="nombre" required />
        </label>

        <label>
          Apellido:
          <input type="text" placeholder="Tu apellido" v-model="apellido" required />
        </label>

        <label>
          Correo electrónico:
          <input type="email" placeholder="tucorreo@mail.com" v-model="correo" required />
        </label>

        <div class="fecha-hora">
          <label>
            Teléfono:
            <input type="tel" placeholder="Tu teléfono" v-model="telefono" required />
          </label>

          <label>
            Ubicación:
            <select v-model="ubicacion" required>
              <option value="Sa Coma">Sa Coma</option>
              <option value="El Hoyo">El Hoyo</option>
              <option value="Izz Tattoo">Izz Tattoo</option>
            </select>
          </label>
        </div>


        <div class="fecha-hora">
          <label>
            Fecha de reserva:
            <input type="date" v-model="fecha" required />
          </label>

          <label>
            Hora de reserva:
            <input type="time" v-model="hora" required />
          </label>
        </div>

        <button type="submit">Reservar</button>
      </form>
    </div>
  </div>

  <!-- Footer actualizado -->
  <FooterSection />
</template>

<script setup>
import { ref } from "vue";
import axios from "axios";
import FooterSection from '../components/FooterSection.vue';
// Estado para el menú hamburguesa
const menuOpen = ref(false);

// Estado formulario reservas
const nombre = ref("");
const apellido = ref("");
const correo = ref("");
const telefono = ref("");
const fecha = ref("");
const hora = ref("");
const ubicacion = ref("");

const mensaje = ref("");
const error = ref("");

const enviarReserva = async () => {
  try {
    mensaje.value = "";
    error.value = "";

    await axios.post("http://localhost:8000/api/citas", {
      nombre: nombre.value,
      apellido: apellido.value,
      correo: correo.value,
      telefono: telefono.value,
      fecha: fecha.value,
      hora: hora.value,
      ubicacion: ubicacion.value
    });

    mensaje.value = "Reserva enviada con éxito ✅";

    nombre.value = "";
    apellido.value = "";
    correo.value = "";
    telefono.value = "";
    fecha.value = "";
    hora.value = "";
    ubicacion.value = "";

  } catch (err) {
    if (err.response && err.response.status === 422) {
      error.value = err.response.data.error;
    } else {
      error.value = "❌ Hubo un problema al enviar la reserva.";
    }
  }
}
</script>

<style scoped>
/* Mensajes */
.success {
  color: green;
  font-weight: bold;
  margin-bottom: 1rem;
}

.error {
  color: red;
  font-weight: bold;
  margin-bottom: 1rem;
}

/* Menú fijo */
.main-nav {
  position: fixed;
  top: 0;
  width: 100%;
  background: #2E1A47;
  z-index: 200;
  box-shadow: 0 2px 8px rgba(0, 0, 0, 0.4);
}

.nav-container {
  max-width: 1200px;
  margin: 0 auto;
  display: flex;
  align-items: center;
  justify-content: space-between;
  padding: 1rem 2rem;
}

.logo-link {
  font-family: 'Fleur De Leah', cursive !important;
  font-weight: bold;
  color: #FF2E2E;
  text-decoration: none;
  font-size: clamp(1.5rem, 5vw, 2.5rem);
  text-shadow: 1px 1px 0 #F5F5F5;
  transition: color 0.2s;
}

.logo-link:hover {
  color: #ffffff;
}

.nav-links a {
  font-family: 'Almendra', serif !important;
  color: #fff;
  text-decoration: none;
  font-weight: 600;
  font-size: 1.3rem;
  transition: color 0.2s;
  margin-left: 1.5rem;
}

.nav-links a:hover {
  color: #FF2E2E;
}

/* Iconos sociales */

/* Iconos sociales */
.social-icons {
  display: flex;
  gap: 1rem;
  align-items: center;
}

.social-icon {
  display: inline-flex;
  position: relative;
  width: 28px;
  height: 28px;
  border-radius: 50%;
  overflow: visible;
  transition: transform 0.3s ease;
}

.social-icon img {
  width: 100%;
  height: 100%;
  display: block;
  z-index: 2;
  position: relative;
}

/*Solo iconos del menú fijo en blanco*/

.main-nav .social-icon img {
  filter: brightness(0) invert(1);
  transition: filter 0.3s ease;
}

.main-nav .social-icon img:hover {
  filter: brightness(0) invert(1) drop-shadow(0 0 4px rgba(255,255,255,0.8));
}

/* Círculo rojo al pasar el ratón */
.social-icon::before {
  content: '';
  position: absolute;
  top: 50%;
  left: 50%;
  width: 0;
  height: 0;
  background: rgba(255,46,46,0.3);
  border-radius: 50%;
  transform: translate(-50%, -50%);
  transition: width 0.3s ease, height 0.3s ease;
  z-index: 1;
}

.social-icon:hover::before {
  width: 60px;
  height: 60px;
}

.social-icon:hover {
  transform: scale(1.1);
}

/* Fondo reservas */
.reservas-page {
  min-height: 100vh;
  display: flex;
  justify-content: center;
  align-items: center;
  position: relative;
  background: url('/Carrusel/Fondo_reservas/reservas.webp') no-repeat center center;
  background-size: cover;
  background-attachment: fixed;
  overflow: hidden;
}

.overlay {
  position: absolute;
  inset: 0;
  background: rgba(0, 0, 0, 0.35);
  z-index: 1;
}

/* Contenedor semitransparente */
.reservas-container {
  position: relative;
  z-index: 2;
  background: rgba(255, 255, 255, 0.92);
  padding: 2.5rem;
  border-radius: 1.5rem;
  box-shadow: 0 8px 25px rgba(0, 0, 0, 0.4);
  max-width: 600px;
  width: 90%;
  animation: fadeIn 1.2s ease forwards;
  font-family: 'Almendra', serif;
}

.reservas-title {
  font-size: 2.2rem;
  text-align: center;
  margin-bottom: 1.5rem;
  color: #b22222;
  letter-spacing: 2px;
}

.reservas-form {
  display: flex;
  flex-direction: column;
  gap: 1rem;
}

.reservas-form label {
  font-size: 1rem;
  color: #333;
  display: flex;
  flex-direction: column;
  font-weight: 500;
}

.reservas-form input,
.reservas-form textarea {
  padding: 0.7rem 1rem;
  border: 1px solid #ccc;
  border-radius: 0.7rem;
  font-size: 1rem;
  margin-top: 0.4rem;
  transition: all 0.3s ease;
}

.reservas-form input:focus,
.reservas-form textarea:focus {
  border-color: #b22222;
  outline: none;
  box-shadow: 0 0 8px rgba(178, 34, 34, 0.3);
}

.reservas-form button {
  margin-top: 1rem;
  padding: 0.9rem;
  background: #b22222;
  color: #fff;
  border: none;
  border-radius: 0.8rem;
  font-size: 1.1rem;
  cursor: pointer;
  transition: background 0.3s ease, transform 0.2s;
}

.reservas-form button:hover {
  background: #8b1a1a;
  transform: translateY(-2px);
}

.fecha-hora {
  display: flex;
  gap: 1rem;
  flex-wrap: wrap;
}

.fecha-hora label {
  flex: 1;
}

.telefono-ubicacion {
  display: flex;
  gap: 1rem;
  flex-wrap: wrap;
}

.telefono-ubicacion label {
  flex: 1;
}

.reservas-form select {
  padding: 0.7rem 1rem;
  border: 1px solid #ccc;
  border-radius: 0.7rem;
  font-size: 1rem;
  font-family: inherit;
  margin-top: 0.4rem;
  background-color: #fff;
  color: #333;
  appearance: none;
  -webkit-appearance: none;
  -moz-appearance: none;
}

.reservas-form select:focus {
  border-color: #b22222;
  outline: none;
  box-shadow: 0 0 8px rgba(178, 34, 34, 0.3);
}

@keyframes fadeIn {
  0% {
    opacity: 0;
    transform: translateY(25px);
  }

  100% {
    opacity: 1;
    transform: translateY(0);
  }
}

/* ===============================
   Responsive (móvil/tablet)
=============================== */
@media (max-width: 900px) {
  /* Mostrar hamburguesa */
  .hamburger {
    display: flex;
  }

  /* Enlaces del menú desplegable */
  .nav-links {
    position: absolute;
    top: 60px;
    left: 0;
    right: 0;
    background: #2E1A47;
    flex-direction: column;
    align-items: flex-start;
    gap: 1.2rem;
    padding: 1.2rem 2rem 1.5rem 2rem;
    display: none;
    z-index: 1000;
    border-radius: 0 0 18px 18px;
    box-shadow: 0 2px 8px rgba(0,0,0,0.2);
  }

  .nav-links.open {
    display: flex;
  }

  /* Ocultar botón de reserva dentro del menú móvil */
  .reserva-btn-menu.desktop-only {
    display: none;
  }

  /* Ajustes de logo */
  .logo-link {
    font-size: clamp(1.5rem, 6vw, 2.5rem);
  }

  /* Ajustes de padding del nav container */
  .nav-container {
    padding: 0.5rem 1rem;
    position: relative;
  }

  /* Enlaces dentro del menú móvil */
  .nav-links a {
    color: #fff !important;
    font-size: 1.15rem;
    font-weight: 600;
    width: 100%;
    padding: 0.2rem 0;
  }
}

</style>
