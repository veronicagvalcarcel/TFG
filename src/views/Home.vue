<script setup>
import Header from '../components/Header.vue'
</script>

<template>
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
</template>

<style scoped>
.home {
  max-width: 600px;
  margin: 2rem auto;
  text-align: center;
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