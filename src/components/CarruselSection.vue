<template>
  <section class="social-proof-section">
    <h2>Galería por estilos</h2>

    <!-- Filtros -->
    <div class="filters">
      <button
        v-for="style in styles"
        :key="style"
        :class="{ active: selectedStyle === style }"
        @click="selectStyle(style)"
      >
        {{ style }}
      </button>
    </div>

    <!-- Carrusel -->
    <div class="carousel">
      <div class="carousel-image">
        <button class="arrow left" @click="prevImage">&#10094;</button>

        <template v-if="filteredImages.length">
          <img
            :src="filteredImages[currentIndex].src"
            :alt="filteredImages[currentIndex].style"
          />
        </template>
        <template v-else>
          <p>No hay imágenes</p>
        </template>

        <button class="arrow right" @click="nextImage">&#10095;</button>
      </div>
    </div>
  </section>
</template>

<script setup>
import { ref, computed, onMounted, onUnmounted } from 'vue'

// Estilos de tatuajes
const styles = [
  'Realismo', 'Fine Line', 'Blackwork', 'Lettering',
  'Cover Up', 'Polinesio', 'Geométrico', 'Color', 'Old School'
]

const selectedStyle = ref(styles[0])
const currentIndex = ref(0)
const styleIndex = ref(0) // índice del estilo actual

// Imágenes por estilo (todas como estaban)
const images = [
  { src: '/Carrusel/blackwork/1.webp', style: 'Blackwork' },
  { src: '/Carrusel/blackwork/2.webp', style: 'Blackwork' },
  { src: '/Carrusel/blackwork/3.webp', style: 'Blackwork' },
  { src: '/Carrusel/blackwork/4.webp', style: 'Blackwork' },
  { src: '/Carrusel/blackwork/5.webp', style: 'Blackwork' },
  { src: '/Carrusel/blackwork/6.webp', style: 'Blackwork' },
  { src: '/Carrusel/blackwork/7.webp', style: 'Blackwork' },

  { src: '/Carrusel/color/1.webp', style: 'Color' },
  { src: '/Carrusel/color/2.webp', style: 'Color' },
  { src: '/Carrusel/color/5.webp', style: 'Color' },
  { src: '/Carrusel/color/6.webp', style: 'Color' },
  { src: '/Carrusel/color/7.webp', style: 'Color' },
  { src: '/Carrusel/color/8.webp', style: 'Color' },

  { src: '/Carrusel/fine line/1.webp', style: 'Fine Line' },
  { src: '/Carrusel/fine line/2.webp', style: 'Fine Line' },
  { src: '/Carrusel/fine line/3.webp', style: 'Fine Line' },

  { src: '/Carrusel/geometrico/1.webp', style: 'Geométrico' },
  { src: '/Carrusel/geometrico/2.webp', style: 'Geométrico' },
  { src: '/Carrusel/geometrico/3.webp', style: 'Geométrico' },

  { src: '/Carrusel/Cover up/1.webp', style: 'Cover Up' },
  { src: '/Carrusel/Cover up/2.webp', style: 'Cover Up' },
  { src: '/Carrusel/Cover up/3.webp', style: 'Cover Up' },

  { src: '/Carrusel/polinesio/1.webp', style: 'Polinesio' },
  { src: '/Carrusel/polinesio/2.webp', style: 'Polinesio' },

  { src: '/Carrusel/lettering/1.webp', style: 'Lettering' },
  { src: '/Carrusel/lettering/2.webp', style: 'Lettering' },
  { src: '/Carrusel/lettering/3.webp', style: 'Lettering' },
  { src: '/Carrusel/lettering/4.webp', style: 'Lettering' },
  { src: '/Carrusel/lettering/5.webp', style: 'Lettering' },
  { src: '/Carrusel/lettering/6.webp', style: 'Lettering' },
  { src: '/Carrusel/lettering/7.webp', style: 'Lettering' },

  { src: '/Carrusel/old school/1.webp', style: 'Old School' },
  { src: '/Carrusel/old school/2.webp', style: 'Old School' },
  { src: '/Carrusel/old school/3.webp', style: 'Old School' },
  { src: '/Carrusel/old school/4.webp', style: 'Old School' },

  { src: '/Carrusel/realismo/1.webp', style: 'Realismo' },
  { src: '/Carrusel/realismo/2.webp', style: 'Realismo' },
  { src: '/Carrusel/realismo/3.webp', style: 'Realismo' },
  { src: '/Carrusel/realismo/4.webp', style: 'Realismo' },
]

const filteredImages = computed(() =>
  images.filter(img => img.style === selectedStyle.value)
)

function selectStyle(style) {
  selectedStyle.value = style
  styleIndex.value = styles.indexOf(style)
  currentIndex.value = 0
}

function prevImage() {
  if (!filteredImages.value.length) return
  currentIndex.value =
    (currentIndex.value - 1 + filteredImages.value.length) %
    filteredImages.value.length
}

function nextImage() {
  if (!filteredImages.value.length) return
  currentIndex.value =
    (currentIndex.value + 1) % filteredImages.value.length
}

// Cambio automático cada 5 segundos
let interval
onMounted(() => {
  interval = setInterval(() => {
    if (!filteredImages.value.length) return

    if (currentIndex.value < filteredImages.value.length - 1) {
      currentIndex.value++
    } else {
      // Pasar al siguiente estilo
      styleIndex.value = (styleIndex.value + 1) % styles.length
      selectedStyle.value = styles[styleIndex.value]
      currentIndex.value = 0
    }
  }, 5000)
})

onUnmounted(() => {
  clearInterval(interval)
})
</script>

<style scoped>
.social-proof-section {
  background: transparent; /* fondo global ya aplicado */
  padding: 2.5rem 1rem;
  text-align: center;
  position: relative;
  z-index: 2;
  color: #F5F5F5;
}

.filters {
  margin-bottom: 1.5rem;
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  gap: 0.5rem;
}

.filters button {
  padding: 0.5rem 1rem;
  border: none;
  background: #f5ede6;
  color: #222;
  border-radius: 4px;
  cursor: pointer;
  font-weight: 500;
  font-family: 'Pirata', sans-serif; /* nueva fuente */
  font-size: 1.3rem; /* tamaño aumentado */
  transition: background 0.3s, color 0.3s;
}

.filters button.active {
  background: #FF2E2E;
  color: #fff;
}

.carousel {
  display: flex;
  justify-content: center;
  align-items: center;
  margin-top: 1rem;
}

.carousel-image {
  width: 320px;
  height: 320px;
  overflow: hidden;
  border-radius: 8px;
  margin: 0 auto;
  display: flex;
  justify-content: center;
  align-items: center;
  position: relative;
  z-index: 3;
}

.carousel-image img {
  max-width: 100%;
  max-height: 100%;
  object-fit: contain;
  display: block;
  position: relative;
  z-index: 4; /* sobre el fondo de humo */
  transition: transform 0.3s ease;
}

.carousel-image img:hover {
  transform: scale(1.05);
}

.arrow {
  position: absolute;
  top: 50%;
  transform: translateY(-50%);
  background: rgba(0, 0, 0, 0.2);
  border: none;
  color: #fff;
  font-size: 2rem;
  padding: 0.5rem 1rem;
  cursor: pointer;
  border-radius: 50%;
  z-index: 5;
}

.arrow.left {
  left: 5px;
}

.arrow.right {
  right: 5px;
}

.arrow:hover {
  background: rgba(0, 0, 0, 0.5);
}

@media (max-width: 768px) {
  .carousel-image {
    width: 220px;
    height: 220px;
  }

  .filters button {
    padding: 0.3rem 0.6rem;
    font-size: 0.85rem;
  }

  .arrow {
    font-size: 1.5rem;
    padding: 0.3rem 0.6rem;
  }
}

@media (max-width: 480px) {
  .carousel-image {
    width: 180px;
    height: 180px;
  }

  .filters {
    gap: 0.3rem;
  }
}
</style>
