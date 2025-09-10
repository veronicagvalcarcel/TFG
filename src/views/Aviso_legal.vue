<template>
  <div class="bg-container">
    <!-- Menú fijo -->
    <nav class="main-nav" role="navigation" aria-label="Menú principal">
      <div class="nav-container">
        <!-- Logo -->
        <router-link :to="{ path: '/', hash: '#Home' }" class="logo-link">
          Witch Tattoo Studio
        </router-link>

        <!-- Botón hamburguesa solo visible en móvil/tablet -->
        <button class="hamburger" @click="menuOpen = !menuOpen" aria-label="Abrir menú" :aria-expanded="menuOpen">
          <span :class="{ open: menuOpen }"></span>
          <span :class="{ open: menuOpen }"></span>
          <span :class="{ open: menuOpen }"></span>
        </button>

        <!-- Enlaces del menú -->
        <div class="nav-links" :class="{ open: menuOpen }">
          <router-link :to="{ path: '/', hash: '#Carrusel' }" @click="menuOpen = false">Galería</router-link>
          <router-link :to="{ path: '/', hash: '#ServicesSection' }" @click="menuOpen = false">Servicios</router-link>
          <router-link :to="{ path: '/', hash: '#FAQ' }" @click="menuOpen = false">FAQ</router-link>
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
import { ref } from 'vue'
import FooterSection from '../components/FooterSection.vue'
const menuOpen = ref(false)
</script>

<style scoped>
/* ===============================
   Contenedor general y fondo
=============================== */
.bg-container {
  display: flex;
  flex-direction: column;
  min-height: 100vh;
  background: url('/Carrusel/Fondo_reservas/reservas.webp') no-repeat center center fixed;
  background-size: cover;
  overflow-x: hidden;
}

/* Contenido principal */
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

/* ===============================
   Menú principal
=============================== */
.main-nav {
  width: 100%;
  background: #2E1A47;
  box-shadow: 0 2px 8px rgba(0,0,0,0.4);
  position: fixed;
  top: 0;
  left: 0;
  z-index: 200;
}

.nav-container {
  display: flex;
  align-items: center;
  justify-content: space-between;
  max-width: 1200px;
  margin: 0 auto;
  padding: 1rem 2rem;
  position: relative;
}

/* Logo hereda tamaño de Home */
.logo-link {
  font-family: 'Pirata', serif;
  color: #FF2E2E;
  text-decoration: none;
  letter-spacing: 2px;
  font-weight: bold;
  z-index: 1002;
  text-shadow: 1px 1px 0 #000;
}

/* Enlaces desktop */
.nav-links {
  display: flex;
  gap: 2rem;
  align-items: center;
}
.nav-links a {
  color: #F5F5F5;
  text-decoration: none;
  font-weight: 600;
}
.reserva-btn-menu {
  background: linear-gradient(45deg, #490368, #dac0f5);
  color: #fff;
  font-weight: bold;
  padding: 0.6rem 1.8rem;
  border-radius: 12px;
  text-decoration: none;
  display: inline-block;
  box-shadow: 0 0 10px rgba(218,192,245,0.3);
}

/* Iconos sociales */
.social-icons {
  display: flex;
  gap: 1rem;
  align-items: center;
}

/* Hamburger oculto en desktop */
.hamburger {
  display: none;
  flex-direction: column;
  gap: 4px;
  background: none;
  border: none;
  cursor: pointer;
  z-index: 1001;
}
.hamburger span {
  width: 28px;
  height: 3px;
  background: #fff;
  border-radius: 2px;
  transition: all 0.3s;
}
.hamburger span.open:nth-child(1) { transform: rotate(45deg) translate(5px,5px); }
.hamburger span.open:nth-child(2) { opacity: 0; }
.hamburger span.open:nth-child(3) { transform: rotate(-45deg) translate(6px,-6px); }

/* ===============================
   Responsive
=============================== */
@media (max-width: 900px) {
  .hamburger {
    display: flex;
    position: absolute;
    right: 1rem;
    top: 50%;
    transform: translateY(-50%);
  }
  .nav-links {
    position: absolute;
    top: 60px;
    left: 0;
    right: 0;
    flex-direction: column;
    gap: 1rem;
    padding: 1rem 2rem;
    background: #2E1A47;
    border-radius: 0 0 18px 18px;
    display: none;
    z-index: 1000;
  }
  .nav-links.open {
    display: flex;
  }
  .nav-links a {
    color: #fff !important;
    font-size: 1.15rem;
    font-weight: 600;
  }
  .reserva-btn-menu {
    width: 100%;
    margin-top: 1rem;
    text-align: center;
    background: linear-gradient(45deg, #490368, #dac0f5);
    color: #fff !important;
    padding: 0.8rem 0;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(218,192,245,0.3);
  }
  .bg-container {
    padding-top: 70px; /* deja espacio para nav fijo */
  }
}
</style>
