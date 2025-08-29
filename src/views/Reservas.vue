<template>
  <div class="reservas-page">
    <div class="overlay"></div>
    <div class="reservas-container">
      <h1 class="reservas-title">Reserva tu cita</h1>
      <form class="reservas-form">
        <label>
          Nombre:
          <input type="text" placeholder="Tu nombre" required />
        </label>

        <label>
          Apellido:
          <input type="text" placeholder="Tu apellido" required />
        </label>

        <label>
          Correo electrónico:
          <input type="email" placeholder="tucorreo@mail.com" required />
        </label>

        <label>
          Teléfono:
          <input type="tel" placeholder="Tu teléfono" required />
        </label>

        <label>
          Fecha de reserva:
          <input type="date" required />
        </label>

        <label>
          Hora de reserva:
          <input type="time" required />
        </label>

        <button type="submit">Reservar</button>
      </form>
    </div>
  </div>
</template>

<script setup>
</script>

<style scoped>
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
</style>
