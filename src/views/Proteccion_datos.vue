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
    <main class="proteccion_datos-container">
      <h1 class="proteccion_datos-title">Protección de Datos</h1>

      <p>
  En <strong>Witch Tattoo Studio</strong> la privacidad de los datos personales de nuestros clientes y usuarios es prioritaria. <strong>Sara Castro Vicente</strong> se compromete a proteger la información personal conforme a la normativa vigente.
</p>

<p>
  <strong>Recopilación y uso:</strong> Solo recopilamos los datos necesarios para ofrecer nuestros servicios, incluyendo información de contacto y detalles del proyecto. Esta información se emplea exclusivamente para cumplir con los servicios solicitados y mejorar la experiencia del usuario.
</p>

<p>
  <strong>Seguridad:</strong> Aplicamos medidas técnicas y organizativas estrictas, como cifrado de datos y sistemas de control para evitar accesos no autorizados, alteraciones o pérdidas. Las prácticas de seguridad se actualizan constantemente para cumplir con los estándares del sector.
</p>

<p>
  <strong>Compartición de datos:</strong> No se venden ni se ceden datos a terceros sin autorización, salvo requerimiento legal o cuando sea necesario para prestar nuestros servicios, garantizando siempre confidencialidad y protección de la información.
</p>

<p>
  <strong>Derechos de los usuarios:</strong> Los usuarios pueden ejercer sus derechos de acceso, rectificación, cancelación u oposición sobre sus datos personales, contactando a <strong>Sara Castro Vicente</strong> mediante los canales disponibles. Se gestionarán estas solicitudes con diligencia y conforme a la ley.
</p>

<p>
  <strong>Actualizaciones:</strong> Esta política puede modificarse para reflejar cambios legales o mejoras en nuestras prácticas. Los cambios se comunicarán oportunamente a través del sitio web para mantener la transparencia y la información al usuario.
</p>

    </main>

    <!-- Footer -->
    <FooterSection />
  </div>
</template>

<script setup>
import FooterSection from '../components/FooterSection.vue'
</script>

<style scoped>
.bg-container {
  display: flex;
  flex-direction: column;
  min-height: 100vh;
  background: url('/Carrusel/Fondo_reservas/reservas.webp') no-repeat center center fixed;
  background-size: cover;
  overflow-x: hidden;
}

/* Contenedor principal */
.proteccion_datos-container {
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

.proteccion_datos-title {
  font-size: 2rem;
  color: #b22222;
  text-align: center;
  margin-bottom: 1rem;
}

.proteccion_datos-container p {
  font-size: 1.1rem;
  line-height: 1.6;
  color: #000;
}

.proteccion_datos-container p strong {
  color: #FF2E2E;
}
</style>
