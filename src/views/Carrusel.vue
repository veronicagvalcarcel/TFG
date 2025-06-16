<template>
  <section class="social-proof-section">
    <h2>Galería por estilos</h2>
    <div class="filters">
      <button
        v-for="style in styles"
        :key="style"
        :class="{ active: selectedStyle === style }"
        @click="selectedStyle = style"
      >
        {{ style }}
      </button>
    </div>
    <div class="carousel">
      <img
        v-for="img in filteredImages"
        :key="img.src"
        :src="img.src"
        :alt="img.style"
        class="carousel-img"
      />
    </div>
  </section>
</template>

<script setup>
import { ref, computed } from 'vue'

const styles = [
  'realismo', 'puntillismo', 'fine line', 'blackwork',
  'mandalas', 'maorí', 'geométrico', 'color', 'old school'
]
const selectedStyle = ref(styles[0])
const images = [
  { src: '/realismo1.jpg', style: 'realismo' },
  { src: '/puntillismo1.jpg', style: 'puntillismo' },
  // ...agrega tus imágenes aquí
]
const filteredImages = computed(() =>
  images.filter(img => img.style === selectedStyle.value)
)
</script>

<style scoped>
.social-proof-section {
  background: #fff;
  padding: 2.5rem 1rem;
  text-align: center;
}
.filters {
  margin-bottom: 1.5rem;
}
.filters button {
  margin: 0 0.5rem 0.5rem 0;
  padding: 0.5rem 1rem;
  border: none;
  background: #f5ede6;
  color: #222;
  border-radius: 4px;
  cursor: pointer;
  font-weight: 500;
}
.filters button.active {
  background: #b48a78;
  color: #fff;
}
.carousel {
  display: flex;
  gap: 1rem;
  flex-wrap: wrap;
  justify-content: center;
}
.carousel-img {
  width: 140px;
  height: 140px;
  object-fit: cover;
  border-radius: 8px;
  box-shadow: 0 2px 8px #0001;
}
</style>