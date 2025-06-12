<script setup>
import Header from '../components/Header.vue'
import { onMounted, onUnmounted, ref } from 'vue'

const video = ref(null)

function handleScroll() {
  const scrollY = window.scrollY
  if (video.value) {
    video.value.style.transform = `translateY(${scrollY * 0.3}px)`
  }
}

onMounted(() => {
  window.addEventListener('scroll', handleScroll)
})

onUnmounted(() => {
  window.removeEventListener('scroll', handleScroll)
})
</script>


<template>
  <section class="parallax-container">
    <video autoplay muted loop class="parallax-video" ref="video">
      <source src="/1.mp4" type="video/mp4" />
    </video>

    <div class="overlay">
      <Header />
      <section class="home">
        <h1>Bienvenida a Witch Tattoo</h1>
        <p>Explora nuestros trabajos, reserva tu cita y contáctanos fácilmente.</p>

        <div class="preview">
          <h2>Trabajos recientes</h2>
          <p>[Aquí irá una galería de imágenes destacadas]</p>
        </div>

        <div class="actions">
          <router-link to="/reservas" class="btn">Reservar cita</router-link>
          <router-link to="/contacto" class="btn">Contacto directo</router-link>
        </div>
      </section>
    </div>
  </section>

  <!-- 👇 Contenido adicional para generar scroll -->
  <section class="dummy-content">
    <h2>Más contenido</h2>
    <p style="margin-bottom: 1000px">Este bloque es solo para generar scroll y ver el efecto parallax.</p>
  </section>
</template>



<style scoped>
.parallax-container {
  position: relative;
  height: 100vh;
  overflow: hidden;
}

.parallax-video {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 120%;
  object-fit: cover;
  z-index: 0;
  transition: transform 0.1s ease-out;
}

.overlay {
  position: relative;
  z-index: 1;
  background: rgba(0, 0, 0, 0.4);
  color: white;
  padding: 2rem 1rem;
  text-align: center;
  min-height: 100vh;
}

.home {
  max-width: 600px;
  margin: 0 auto;
}

.btn {
  display: inline-block;
  margin: 1rem;
  padding: 0.75rem 1.5rem;
  background: #222;
  color: #fff;
  border-radius: 4px;
  text-decoration: none;
}
</style>
