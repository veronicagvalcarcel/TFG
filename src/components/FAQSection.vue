<template>
  <section class="faq-section">
    <h2>Preguntas Frecuentes: Cómo cuidar de nuestros tatuajes</h2>
    <div class="faq-cards-container">
      <div class="faq-card" v-for="(item, index) in faqs" :key="index">
        <h3>{{ item.title }}</h3>
        <p>{{ item.desc }}</p>
      </div>
    </div>
  </section>
</template>

<script setup>
const faqs = [
  {
    title: 'Lava con cuidado',
    desc: 'Lava el tatuaje suavemente con agua tibia y jabón neutro.'
  },
  {
    title: 'Seca sin frotar',
    desc: 'Seca con papel desechable, sin frotar.'
  },
  {
    title: 'Aplica crema',
    desc: 'Aplica una capa fina de la crema cicatrizante recomendada.'
  },
  {
    title: 'Evita sol y piscinas',
    desc: 'Evita el sol, piscinas, saunas y ejercicio intenso durante la cicatrización.'
  },
  {
    title: 'No rasques',
    desc: 'No retires las costras ni rasques la zona tatuada.'
  },
  {
    title: 'Sigue indicaciones',
    desc: 'Sigue las recomendaciones personalizadas.'
  },
]
</script>

<style scoped>
.faq-section {
  padding: 3rem 1rem;
  background: transparent;
  position: relative;
  z-index: 2;
  text-align: center;
}

.faq-section h2 {
  color: #ffffff;
  margin-bottom: 2rem;
  font-size: clamp(1.8rem, 4vw, 2.5rem);
}

/* Contenedor con dos filas de tres columnas */
.faq-cards-container {
  display: grid;
  grid-template-columns: repeat(3, 1fr); /* 3 columnas */
  grid-template-rows: repeat(2, auto);  /* 2 filas */
  gap: 2rem;
  justify-items: center;
}

/* Cards individuales */
.faq-card {
  background: rgba(255, 255, 255, 0.1);
  border-radius: 8px;
  padding: 1.5rem;
  text-align: center;
  width: 280px;
  box-shadow: 0 2px 8px #0001;
  transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.faq-card:hover {
  transform: scale(1.05);
  box-shadow: 0 4px 16px rgba(0,0,0,0.2);
}

.faq-card h3 {
  margin-bottom: 0.5rem;
  color: #FF2E2E;
}

.faq-card p {
  margin: 0;
  color: #F5F5F5;
}

/* Responsive: en pantallas pequeñas pasa a 1 columna */
@media (max-width: 900px) {
  .faq-cards-container {
    grid-template-columns: repeat(2, 1fr); /* 2 columnas */
    grid-template-rows: auto;
  }
}

@media (max-width: 600px) {
  .faq-cards-container {
    grid-template-columns: 1fr; /* 1 columna */
  }
}
</style>
