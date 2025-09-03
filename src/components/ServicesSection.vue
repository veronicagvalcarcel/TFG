<template>
  <section class="services-section">
    <div class="service-card" v-for="service in services" :key="service.title">
      <h3>{{ service.title }}</h3>

      <template v-if="service.video">
        <video
          :src="service.video"
          autoplay
          muted
          loop
          playsinline
          class="media"
        ></video>
      </template>
      <template v-else>
        <img :src="service.img" :alt="service.title" class="media" />
      </template>

      <p>{{ service.desc }}</p>
    </div>
  </section>
</template>

<script setup>
const services = [
  {
    title: 'Creamos tu diseño',
    video: '/design.mp4',
    desc: 'Diseños personalizados y exclusivos para ti.'
  },
  {
    title: 'Reinventa tu tatuaje',
    video: '/coverup.mp4',
    desc: 'Cover up: Transformamos y mejoramos tatuajes antiguos.'
  },
  {
    title: 'Tatuamos tu idea',
    video: '/tattoo.mp4',
    desc: 'Trae tu idea y la convertimos en arte.'
  }
]
</script>

<style scoped>
.services-section {
  display: flex;
  gap: 2rem;
  justify-content: center;
  padding: 3rem 1rem;
  background: transparent; /* transparente para ver el fondo global */
  flex-wrap: wrap;
  position: relative;
  z-index: 2;
}

.service-card {
  background: rgba(255, 255, 255, 0.1);
  border-radius: 8px;
  box-shadow: 0 2px 8px #0001;
  padding: 1.5rem;
  text-align: center;
  width: 280px; /* antes 220px, ahora más amplio */
}



.media {
  width: 100%;
  aspect-ratio: 16 / 9; /* mantiene proporción widescreen */
  object-fit: cover;
  border-radius: 6px;
  margin-bottom: 1rem;
}


h3 {
  margin-bottom: 0.5rem;
  color: #FF2E2E;
}
</style>
