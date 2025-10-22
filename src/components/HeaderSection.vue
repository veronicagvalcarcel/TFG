<template>
  <nav class="main-nav" role="navigation" aria-label="Menú principal">
    <div class="nav-container">
      <!-- Fila superior -->
      <div class="nav-top">
        <router-link :to="{ path: '/', hash: '#Home' }" class="logo-link">
          Witch Tattoo Studio
        </router-link>
      </div>

      <!-- Fila inferior -->
      <div class="nav-bottom">
        <!-- Redes sociales -->
        <div class="social-icons">
          <a href="https://www.instagram.com/witch_tatto/" target="_blank" rel="noopener noreferrer" class="social-icon">
            <img src="/Logos/instagram.svg" alt="Instagram" />
          </a>
          <a href="https://wa.me/34633852858" target="_blank" rel="noopener noreferrer" class="social-icon">
            <img src="/Logos/whatsapp.svg" alt="WhatsApp" />
          </a>
        </div>

        <!-- Botón reservas -> apunta a WhatsApp -->
        <a href="https://wa.me/34633852858" target="_blank" rel="noopener noreferrer" class="reserva-btn-menu">
          ¡Quiero tatuarme!
        </a>

        <!-- Menú hamburguesa -->
        <button
          class="hamburger"
          @click="toggleMenu"
          aria-label="Abrir menú"
          :aria-expanded="menuOpen.toString()"
        >
          <span :class="{ open: menuOpen }"></span>
          <span :class="{ open: menuOpen }"></span>
          <span :class="{ open: menuOpen }"></span>
        </button>
      </div>

      <!-- Enlaces del menú -->
      <div class="nav-links" :class="{ open: menuOpen }">
        <router-link :to="{ path: '/', hash: '#Carrusel' }" @click="closeMenu">Galería</router-link>
        <router-link :to="{ path: '/', hash: '#ServicesSection' }" @click="closeMenu">Servicios</router-link>
        <router-link :to="{ path: '/', hash: '#FAQ' }" @click="closeMenu">FAQ</router-link>
      </div>
    </div>
  </nav>
</template>

<script>
export default {
  name: 'HeaderSection',
  data() {
    return { menuOpen: false };
  },
  methods: {
    toggleMenu() { this.menuOpen = !this.menuOpen },
    closeMenu() { this.menuOpen = false }
  }
};
</script>

<style scoped>
/* =====================
   Layout original
===================== */
.main-nav {
  position: fixed;
  top: 0;
  width: 100%;
  z-index: 1000;
  background-color: rgba(0,0,0,0.6);
  backdrop-filter: blur(8px);
}
.nav-container {
  width: 90%;
  max-width: 1200px;
  margin: 0 auto;
  padding: 0.8rem 0;
  display: flex;
  flex-direction: column;
}
.nav-top {
  display: flex;
  justify-content: center;
  align-items: center;
}
.nav-bottom {
  display: flex;
  justify-content: space-between;
  align-items: center;
  flex-wrap: wrap;
  margin-top: 0.4rem;
}
.logo-link {
  font-family: 'Pirata', cursive;
  color: #fff;
  font-size: 2rem;
  text-decoration: none;
}
.logo-link:hover { color: #ff0000; }

/* =====================
   Botón estilo ReservasSection
===================== */
.reserva-btn-menu {
  position: relative;
  overflow: hidden; /* evita que el brillo se salga */
  display: inline-block;
  color: #F5F5F5;
  background: linear-gradient(45deg, #FF2E2E, #6A4A8A);
  border-radius: 12px;
  text-decoration: none;
  text-transform: uppercase;
  letter-spacing: 1px;
  box-shadow: 0 0 15px rgba(255,46,46,0.6);
  padding: 0.6rem 1.2rem;
  font-weight: bold;
  font-size: 1rem;
  transition: transform 0.3s ease, box-shadow 0.3s ease;
}
.reserva-btn-menu::before {
  content: '';
  position: absolute;
  top: -50%;
  left: -50%;
  width: 200%;
  height: 200%;
  background: rgba(255, 255, 255, 0.2);
  transform: rotate(45deg);
  transition: all 0.5s ease;
  pointer-events: none;
}
.reserva-btn-menu:hover {
  transform: scale(1.05);
  box-shadow: 0 0 25px rgba(255,46,46,0.8);
}
.reserva-btn-menu:hover::before {
  top: -10%;
  left: -10%;
}

/* =====================
   Iconos sociales estilo footer
===================== */
/* =====================
   Iconos sociales estilo footer
===================== */
.social-icons {
  display: flex;
  gap: 1.5rem;
  align-items: center;
}

.social-icon {
  display: inline-flex;
  position: relative;
  width: 36px;
  height: 36px;
  border-radius: 50%;
  overflow: visible;
  transition: transform 0.3s ease;
}

.social-icon img {
  width: 100%;
  height: 100%;
  display: block;
  position: relative;
  z-index: 2;
  filter: brightness(0) invert(1); /* icono normal */
  transition: filter 0.3s ease, text-shadow 0.3s ease, transform 0.3s ease;
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


.social-icon:hover {
  transform: scale(1.1);
}

.social-icon:hover img {
  filter: brightness(2) invert(1) drop-shadow(0 0 8px #fff);
}

/* =====================
   Menú hamburguesa y links
===================== */
.hamburger {
  display: flex;
  flex-direction: column;
  gap: 4px;
  background: none;
  border: none;
  cursor: pointer;
  z-index: 1100;
}
.hamburger span {
  width: 25px;
  height: 3px;
  background-color: #fff;
  border-radius: 2px;
  transition: all 0.3s;
}
.hamburger span.open:nth-child(1) { transform: rotate(45deg) translateY(8px); }
.hamburger span.open:nth-child(2) { opacity: 0; }
.hamburger span.open:nth-child(3) { transform: rotate(-45deg) translateY(-8px); }
.nav-links {
  position: absolute;
  top: 100%;
  left: 0;
  right: 0;
  background-color: rgba(0, 0, 0, 0.95);
  display: flex;
  flex-direction: column;
  align-items: center;
  padding: 1rem 0;
  gap: 1.2rem;
  transform: translateY(-200%);
  transition: transform 0.3s ease;
}
.nav-links.open { transform: translateY(0); }
.nav-links a {
  color: #fff;
  text-decoration: none;
  font-size: 1.2rem;
}
.nav-links a:hover { color: #ff0000; }

/* =====================
   Escritorio
===================== */
@media (min-width: 769px) {
  .nav-container { flex-direction: row; align-items: center; justify-content: space-between; }
  .nav-top, .nav-bottom { flex-direction: row; align-items: center; margin-top: 0; }
  .nav-bottom { gap: 2rem; }
  .hamburger { display: none; }
  .nav-links { position: static; transform: none; background: transparent; flex-direction: row; gap: 2rem; padding: 0; }
  .reserva-btn-menu { margin-left: 1.5rem; font-size: 1.1rem; padding: 0.6rem 1.8rem; }
}
</style>
