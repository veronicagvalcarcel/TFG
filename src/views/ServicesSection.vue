<template>
  <section class="ServicesSection">
    <div class="service-card" v-for="service in services" :key="service.title">
      <img :src="service.img" :alt="service.title" />
      <h3>{{ service.title }}</h3>
      <p>{{ service.desc }}</p>
    </div>
  </section>
</template>

<script setup>
const services = [
  {
    title: 'Creamos tu diseño',
    desc: 'Diseños personalizados y exclusivos para ti.',
    img: '/servicio1.jpg'
  },
  {
    title: 'Reinventa tu tatuaje (Cover up)',
    desc: 'Transformamos y mejoramos tatuajes antiguos.',
    img: '/servicio2.jpg'
  },
  {
    title: 'Tatuamos tu idea',
    desc: 'Trae tu idea y la convertimos en arte.',
    img: '/servicio3.jpg'
  }
]
</script>

<style scoped>
.services-section {
  display: flex;
  gap: 2rem;
  justify-content: center;
  padding: 3rem 1rem;
  background: #f5ede6;
  flex-wrap: wrap;
}
.service-card {
  background: #fff;
  border-radius: 8px;
  box-shadow: 0 2px 8px #0001;
  padding: 1.5rem;
  text-align: center;
  width: 220px;
}
.service-card img {
  width: 100%;
  height: 120px;
  object-fit: cover;
  border-radius: 6px;
  margin-bottom: 1rem;
}
h3 {
  margin-bottom: 0.5rem;
  color: #b48a78;
}
</style>