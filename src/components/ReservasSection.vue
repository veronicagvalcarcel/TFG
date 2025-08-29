<template>
  <div class="reservas-section">
    <h1>¿Te animas a inmortalizar tu idea?</h1>
    <p>Haz clic y convierte tu idea en tinta.</p>
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
  background: #111;
  color: #fff;
  font-family: sans-serif;
}

.reserva-btn {
  display: inline-block;
  margin-top: 2rem;
  padding: 1rem 2.5rem;
  font-size: 1.3rem;
  font-weight: bold;
  color: #fff;
  background: linear-gradient(45deg, #2f023a, #e291ec);
  border-radius: 12px;
  text-decoration: none;
  text-transform: uppercase;
  letter-spacing: 1px;
  box-shadow: 0 0 15px rgba(206, 78, 245, 0.6);
  position: relative;
  overflow: hidden;
  transition: transform 0.3s ease, box-shadow 0.3s ease;
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
  box-shadow: 0 0 25px rgba(255, 0, 0, 0.8);
}

.reserva-btn:hover::before {
  top: -10%;
  left: -10%;
}
</style>
