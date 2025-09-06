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
    <main class="aviso_legal-container">
      <h1 class="aviso_legal-title">Aviso Legal</h1>

      <p>
  En cumplimiento de la <strong>Ley de Servicios de la Sociedad de la Información y de Comercio Electrónico</strong>, <strong>Sara Castro Vicente</strong>, responsable de <strong>Witch Tattoo Studio</strong>, informa a los usuarios de las condiciones de uso de este sitio web.
</p>

<p>
  <strong>Datos identificativos:</strong>  
  <p>Nombre comercial: Witch Tattoo Studio.</p>  
  <p>Responsable: Sara Castro Vicente.</p>  
  <p>Contacto: teléfono disponible en el logo de WhatsApp.</p>

</p>
<p>
  <strong>Propiedad intelectual:</strong> Todos los contenidos de esta web son propiedad de <strong>Sara Castro Vicente</strong> o cuentan con autorización de uso. Queda prohibida su reproducción, distribución o explotación sin permiso previo por escrito.
</p>

<p>
  <strong>Exención de responsabilidad:</strong> Witch Tattoo Studio no se responsabiliza de la información publicada por terceros en foros, redes sociales u otros medios vinculados a este sitio, ni de posibles fallos técnicos o interrupciones del servicio. En caso de detectar contenidos contrarios a la ley o al orden público, se procederá a su inmediata retirada.
</p>

<p>
  <strong>Enlaces externos:</strong> Pueden existir enlaces a webs de terceros, sobre cuyo contenido <strong>Sara Castro Vicente</strong> no tiene control ni asume responsabilidad. En caso de detectar contenido ilegal en páginas enlazadas, se actuará con diligencia para retirarlos.
</p>

<p>
  <strong>Ley aplicable:</strong> Cualquier conflicto relacionado con este sitio web se regirá por la legislación española, siendo competentes los juzgados y tribunales del domicilio del usuario.
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
.aviso_legal-container {
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

.aviso_legal-title {
  font-size: 2rem;
  color: #b22222;
  text-align: center;
  margin-bottom: 1rem;
}

.aviso_legal-container p {
  font-size: 1.1rem;
  line-height: 1.6;
  color: #000;
}

.aviso_legal-container p strong {
  color: #FF2E2E;
}
</style>
