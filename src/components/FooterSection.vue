<template>
  <footer class="footer-section">
    <!-- Logo del footer que lleva a Home -->
    <div class="footer-logo">
      <router-link to="/" class="footer-logo-link">Witch Tattoo Studio</router-link>
    </div>

    <!-- Links del footer -->
    <div class="footer-links">
      <a href="#Carrusel">Galería</a>
      <a href="#ServicesSection">Servicios</a>
      <a href="#FAQ">FAQ</a>
      <router-link to="/reservas" class="footer-reserva-link">¡Quiero tatuarme!</router-link>
    </div>

    <!-- Redes sociales -->
    <div class="footer-social">
      <a href="https://www.instagram.com/" target="_blank" rel="noopener noreferrer">Instagram</a>
      <a href="https://www.facebook.com/" target="_blank" rel="noopener noreferrer">Facebook</a>
    </div>
  </footer>
</template>

<style scoped>
.footer-section {
  font-family: 'Almendra', serif !important;
  background: #e0d6ce;
  padding: 2rem 1rem;
  display: flex;
  flex-wrap: wrap;
  justify-content: space-between;
  align-items: center;
  font-size: 1rem;
}

/* Sparkle lila */
@keyframes sparkle-lila {
  0%, 100% { opacity: 0; transform: scale(0.5) translate(0,0); }
  50% { opacity: 1; transform: scale(1) translate(5px,-5px); }
}

/* Logo del footer */
.footer-logo-link {
  font-family: 'Fleur De Leah', cursive !important;
  font-weight: bold;
  font-size: clamp(1.5rem, 5vw, 2.5rem);
  color: #FF2E2E;
  text-decoration: none;
  text-shadow: 1px 1px 0 #000000;
  transition: color 0.2s;
  position: relative; /* necesario para los ::before y ::after */
  display: inline-block; /* aseguramos que los pseudo-elementos se posicionen correctamente */
  z-index: 1; /* encima del fondo */
}

/* Sparkles lila */
.footer-logo-link::before,
.footer-logo-link::after {
  content: '';
  position: absolute;
  width: 10px;
  height: 10px;
  background: radial-gradient(circle, #51086e 0%, transparent 70%);
  border-radius: 50%;
  opacity: 0;
  pointer-events: none;
  animation: sparkle-lila 3s infinite ease-in-out;
  z-index: 2;
}

.footer-logo-link::before { top: -5px; left: 10%; animation-delay: 0s; }
.footer-logo-link::after { bottom: -5px; right: 10%; animation-delay: 1.5s; }

@keyframes sparkle-lila {
  0%, 100% { opacity: 0; transform: scale(0.5) translate(0,0); }
  50% { opacity: 1; transform: scale(1) translate(5px,-5px); }
}


.footer-logo-link:hover {
  color: #000000;
}

/* Links del footer */
.footer-links a,
.footer-social a,
.footer-reserva-link {
  font-family: 'Almendra', serif !important;
  font-size: 1rem;
  color: #222;
  text-decoration: none;
  margin-right: 1.2rem;
  transition: color 0.2s;
}

.footer-links a:hover,
.footer-social a:hover,
.footer-reserva-link:hover {
  color: #FF2E2E;
}

/* Separación de links en footer */
.footer-links,
.footer-social {
  display: flex;
  flex-wrap: wrap;
  gap: 1rem;
}
</style>
