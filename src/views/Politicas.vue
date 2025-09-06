<template>
  <div class="bg-container">
    <!-- Menú fijo -->
    <nav class="main-nav" role="navigation" aria-label="Menú principal">
      <div class="nav-container">
        <!-- Logo con sparkles -->
        <router-link :to="{ path: '/', hash: '#Home' }" class="logo-link">
          Witch Tattoo Studio
        </router-link>

        <!-- Enlaces del menú -->
        <div class="nav-links">
          <router-link :to="{ path: '/', hash: '#Carrusel' }">Galería</router-link>
          <router-link :to="{ path: '/', hash: '#ServicesSection' }">Servicios</router-link>
          <router-link :to="{ path: '/', hash: '#FAQ' }">FAQ</router-link>
        </div>

        <!-- Iconos sociales -->
        <div class="social-icons">
          <a href="https://www.instagram.com/witch_tatto/" target="_blank" rel="noopener noreferrer" class="social-icon">
            <img src="/Logos/instagram.svg" alt="Instagram">
          </a>
          <a href="https://wa.me/34633852858" target="_blank" rel="noopener noreferrer" class="social-icon">
            <img src="/Logos/whatsapp.svg" alt="WhatsApp">
          </a>
        </div>

        <!-- Botón de reserva -->
        <router-link to="/reservas" class="reserva-btn-menu">¡Quiero tatuarme!</router-link>
      </div>
    </nav>

    <!-- Contenido principal -->
    <main class="politicas-container">
      <h1 class="politicas-title">Políticas de Privacidad</h1>

      <p>
        <strong>Responsable:</strong> Sara Castro Vicente. Los datos personales se gestionan conforme al Reglamento General de Protección de Datos de la UE y la Ley Orgánica de Protección de Datos y Garantía de Derechos Digitales.
      </p>

      <p>
        <strong>Finalidad:</strong> Mantener la relación con los usuarios, enviar información sobre productos y servicios, realizar estudios de mercado y atender solicitudes recibidas por los canales de contacto.
      </p>

      <p>
        <strong>Base legal:</strong> Consentimiento del usuario para comunicaciones y boletines; interés legítimo para análisis de mercado y gestión de solicitudes.
      </p>

      <p>
        <strong>Duración:</strong> Los datos se conservan solo el tiempo necesario y se eliminarán o anonimizarán cuando ya no sean necesarios.
      </p>

      <p>
        <strong>Cesión de datos:</strong> Solo se comparten con proveedores que colaboran con Sara Castro Vicente mediante acuerdos legales y de confidencialidad.
      </p>

      <p>
        <strong>Derechos del usuario:</strong> Acceder, rectificar, suprimir, limitar u oponerse al tratamiento de los datos y solicitar su portabilidad. También puede retirar el consentimiento en cualquier momento o presentar reclamación ante la autoridad de control (<a href="https://www.aepd.es" target="_blank" rel="noopener noreferrer">www.aepd.es</a>).
      </p>

      <p>
        <strong>Medidas de seguridad:</strong> Se aplican todas las medidas técnicas y organizativas necesarias para proteger los datos y garantizar los derechos de los usuarios.
      </p>
    </main>

    <!-- Footer siempre abajo -->
    <FooterSection />
  </div>
</template>

<script setup>
import FooterSection from '../components/FooterSection.vue'
</script>

<style scoped>
/* Contenedor principal con imagen y footer siempre abajo */
.bg-container {
  display: flex;
  flex-direction: column;
  min-height: 100vh;
  background: url('/Carrusel/Fondo_reservas/reservas.webp') no-repeat center center fixed;
  background-size: cover;
  overflow-x: hidden;
}

/* Contenido principal que crece para empujar el footer */
.politicas-container {
  flex: 1;
  position: relative;
  z-index: 1;
  max-width: 1000px;
  margin: 8rem auto 2rem auto;
  padding: 2.5rem;
  background: rgba(255, 255, 255, 0.92);
  border-radius: 1.5rem;
  box-shadow: 0 8px 25px rgba(0,0,0,0.4);
  font-family: 'Almendra', serif;
  color: #222;
  text-align: left;
}

.politicas-title {
  font-size: 2rem;
  color: #b22222;
  text-align: center;
  margin-bottom: 1rem;
}

.politicas-container p {
  font-size: 1.1rem;
  line-height: 1.6;
  color: #000;
}

.politicas-container p strong {
  color: #FF2E2E;
}
</style>
