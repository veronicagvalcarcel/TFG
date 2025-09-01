<template>
  <!-- Menú fijo ajustado al tamaño del hero/header -->
  <nav class="main-nav">
    <div class="nav-container">
      <!-- Logo a la izquierda -->
      <a href="#Home" class="logo-link">Witch Tattoo Studio</a>

      <!-- Enlaces de secciones centrados -->
      <div class="nav-links">
        <a href="#AboutSection">Sobre nosotros</a>
        <a href="#Carrusel">Galería</a>
        <a href="#ServicesSection">Servicios</a>
        <a href="#FAQ">FAQ</a>
      </div>
    </div>
  </nav>

  <div class="reservas-page">
    <div class="overlay"></div>
    <div class="reservas-container">
      <h1 class="reservas-title">Reserva tu cita</h1>

      <!-- Mostrar mensajes -->
      <p v-if="mensaje" class="success">{{ mensaje }}</p>
      <p v-if="error" class="error">{{ error }}</p>

      <!-- Formulario -->
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

        <label>
          Teléfono:
          <input type="tel" placeholder="Tu teléfono" v-model="telefono" required />
        </label>

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

  <FooterSection />
</template>

<script setup>
import { ref } from "vue"
import axios from "axios"
import FooterSection from '../components/FooterSection.vue'

// Campos del formulario
const nombre = ref("")
const apellido = ref("")
const correo = ref("")
const telefono = ref("")
const fecha = ref("")
const hora = ref("")

// Mensajes
const mensaje = ref("")
const error = ref("")

// Función para enviar reserva
const enviarReserva = async () => {
  try {
    mensaje.value = ""
    error.value = ""

    const response = await axios.post("http://localhost:8000/api/citas", {
      nombre: nombre.value,
      apellido: apellido.value,
      correo: correo.value,
      telefono: telefono.value,
      fecha: fecha.value,
      hora: hora.value,
    })

    mensaje.value = "Reserva enviada con éxito ✅"
    console.log("Respuesta del servidor:", response.data)

    // Limpiar formulario
    nombre.value = ""
    apellido.value = ""
    correo.value = ""
    telefono.value = ""
    fecha.value = ""
    hora.value = ""
    
  } catch (err) {
    if (err.response && err.response.status === 422) {
      // Mostrar mensaje específico de conflicto
      error.value = err.response.data.error
    } else {
      console.error("Error al enviar la reserva:", err)
      error.value = "❌ Hubo un problema al enviar la reserva."
    }
  }
}
</script>

<style scoped>
/* Éxito/error */
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

/* Resto de tu CSS permanece igual */
.main-nav {
  position: sticky;
  top: 0;
  width: 100%;
  z-index: 100;
  background: #fff;
  box-shadow: 0 2px 8px rgba(0, 0, 0, 0.04);
}

.nav-container {
  display: flex;
  align-items: center;
  justify-content: space-between;
  padding: 1rem 2rem;
  max-width: 1200px;
  margin: 0 auto;
}

.logo-link {
  font-weight: bold;
  color: #222;
  text-decoration: none;
  font-size: 1.2rem;
}

.logo-link:hover {
  color: #e291ec;
}

.nav-links {
  display: flex;
  gap: 2rem;
}

.nav-links a {
  color: #222;
  text-decoration: none;
  font-weight: 600;
  transition: color 0.2s;
}

.nav-links a:hover {
  color: #e291ec;
}

.reservas-page {
  min-height: 100vh;
  display: flex;
  justify-content: center;
  align-items: center;
  position: relative;
  background: url('/Fotos/Fondo_reservas/reservas.webp') no-repeat center center/cover;
  overflow: hidden;
}

.overlay {
  position: absolute;
  inset: 0;
  background: rgba(0, 0, 0, 0.55);
  z-index: 1;
}

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
  font-family: sans-serif;
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

@media (max-width:900px) {
  .about-img {
    width: 150px;
    height: 150px;
  }
}

@media (max-width:600px) {
  .about-section {
    flex-direction: column;
    align-items: center;
    text-align: center;
  }

  .about-img {
    width: 120px;
    height: 120px;
    margin-bottom: 1rem;
  }

  .about-content {
    flex: unset;
  }
}
</style>
