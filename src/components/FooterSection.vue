<template>
  <footer class="footer-section">
    <div class="footer-container">
      <!-- Logo a la izquierda -->
      <div class="footer-logo">
        <router-link to="/" class="footer-logo-link">Witch Tattoo Studio</router-link>
      </div>

      <!-- Enlaces de políticas centrados -->
      <div class="footer-links">
        <router-link to="/Politicas" target="_blank">Políticas de Privacidad</router-link>
        <router-link to="/Proteccion_datos" target="_blank">Protección de Datos</router-link>
        <router-link to="/Aviso_legal" target="_blank">Aviso Legal</router-link>
      </div>

      <!-- Redes sociales a la derecha -->
      <div class="footer-social">
        <a href="https://www.instagram.com/witch_tatto/" target="_blank" rel="noopener noreferrer" class="social-icon">
          <img src="/Logos/instagram.svg" alt="Instagram">
        </a>
        <a href="https://wa.me/34633852858" target="_blank" rel="noopener noreferrer" class="social-icon">
          <img src="/Logos/whatsapp.svg" alt="WhatsApp">
        </a>
      </div>
    </div>
  </footer>
</template>

<script setup></script>

<style scoped>
.footer-section {
  font-family: 'Pirata', serif !important;
  background: #e0d6ce;
  padding: 2rem 1rem;
  font-size: 1.35rem !important;
}

.footer-container {
  display: flex;
  align-items: center;
  justify-content: space-between; /* logo izquierda, enlaces centrados, redes derecha */
  width: 90%;            /* igual que header */
  max-width: 1200px;
  margin: 0 auto;
  padding: 0 2rem;       /* mismo padding que header */
  gap: 1rem;
}

/* ================= LOGO ================= */
.footer-logo-link {
  position: relative;
  font-family: 'Fleur De Leah', cursive !important;
  font-weight: bold;
  color: #FF2E2E;
  text-decoration: none;
  font-size: 2rem;
  text-shadow: 1px 1px 0 #F5F5F5;
  display: inline-block;
}
.footer-logo-link::before,
.footer-logo-link::after {
  content: '';
  position: absolute;
  width: 8px;
  height: 8px;
  background: radial-gradient(circle, #FF2E2E 0%, transparent 70%);
  border-radius: 50%;
  opacity: 0;
  pointer-events: none;
  animation: sparkle 3s infinite ease-in-out;
  z-index: 2;
}
@keyframes sparkle {
  0%, 100% { transform: translate(0,0) scale(0); opacity: 0; }
  50% { transform: translate(5px,-5px) scale(1); opacity: 1; }
}

/* ================= ENLACES ================= */
.footer-links {
  flex: 1;              /* ocupa todo el espacio entre logo y redes */
  text-align: center;    /* enlaces centrados */
  display: flex;
  justify-content: center;
  gap: 2rem;
  flex-wrap: wrap;
}
.footer-links a {
  font-family: 'Pirata', serif !important;
  font-size: 1.3rem !important;
  color: #111;
  text-decoration: none;
  transition: color 0.2s;
}
.footer-links a:hover { color: #FF2E2E; }

/* ================= REDES ================= */
.footer-social {
  display: flex;
  gap: 1rem;
}
.social-icon {
  display: inline-flex;
  position: relative;
  width: 28px;
  height: 28px;
  border-radius: 50%;
  overflow: visible;
  transition: transform 0.3s ease;
}
.social-icon img {
  width: 100%;
  height: 100%;
  display: block;
  z-index: 2;
  position: relative;
}
.social-icon::before {
  content: '';
  position: absolute;
  top: 50%;
  left: 50%;
  width: 0;
  height: 0;
  background: rgba(255,46,46,0.3);
  border-radius: 50%;
  transform: translate(-50%, -50%);
  transition: width 0.3s ease, height 0.3s ease;
  z-index: 1;
}
.social-icon:hover::before {
  width: 60px;
  height: 60px;
}
.social-icon:hover { transform: scale(1.1); }

/* =======================
   Responsive móvil
======================= */
@media (max-width: 768px) {
  .footer-container {
    flex-direction: column; /* columna en móvil */
    align-items: center;
    text-align: center;
    gap: 1rem;
    padding: 0 1rem; /* reduce padding en móvil */
  }
  .footer-links, .footer-social { justify-content: center; }
}
</style>
