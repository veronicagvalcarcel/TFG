<template>
  <div class="reservas-section">
    <h2 class="cta-title">¿Te animas a inmortalizar tu idea?</h2>
    <p class="cta-text">Haz clic y convierte tu idea en tinta.</p>
    <a href="/reservas" target="_blank" rel="noopener noreferrer" class="reserva-btn">
      ¡Quiero tatuarme!
    </a>
  </div>
</template>

<script>
export default {}
</script>

<style scoped>
.reservas-section {
  text-align: center;
  padding: 3rem 1rem;
  background: transparent;
  font-family: sans-serif;
  position: relative;
  z-index: 2;
}

/* Call to action principal */
.cta-title {
  font-size: clamp(2.5rem, 6vw, 4rem); /* tamaño grande y responsive */
  font-weight: bold;
  color: #FF2E2E;
  display: inline-block;
  animation: pulse 1.5s infinite ease-in-out;
  margin-bottom: 1rem;
  text-shadow: 2px 2px 6px rgba(0,0,0,0.5); /* sombra para destacar */
}

/* Animación de pulso */
@keyframes pulse {
  0% { transform: scale(1); }
  50% { transform: scale(1.08); }
  100% { transform: scale(1); }
}

/* Párrafo debajo */
.cta-text {
  color: #F5F5F5;
  font-size: 1.4rem; /* más grande */
  margin-bottom: 2rem;
}

/* Botón */
.reserva-btn {
  display: inline-block;
  margin-top: 2rem;
  padding: 1rem 2.5rem;
  font-size: 1.3rem;
  font-weight: bold;
  color: #F5F5F5;
  background: linear-gradient(45deg, #FF2E2E, #6A4A8A);
  border-radius: 12px;
  text-decoration: none;
  text-transform: uppercase;
  letter-spacing: 1px;
  box-shadow: 0 0 15px rgba(255,46,46,0.6);
  position: relative;
  overflow: hidden;
  transition: transform 0.3s ease, box-shadow 0.3s ease;
  z-index: 3;
}

.reserva-btn::before {
  content: '';
  position: absolute;
  top: -50%;
  left: -50%;
  width: 200%;
  height: 200%;
  background: rgba(255, 255, 255, 0.2);
  transform: rotate(45deg);
  transition: all 0.5s ease;
}

.reserva-btn:hover {
  transform: scale(1.1) rotate(-2deg);
  box-shadow: 0 0 25px rgba(255, 46, 46, 0.8);
}

.reserva-btn:hover::before {
  top: -10%;
  left: -10%;
}
</style>
