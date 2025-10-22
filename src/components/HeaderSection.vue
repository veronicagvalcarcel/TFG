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

        <!-- Botón reservas -->
        <router-link to="/reservas" class="reserva-btn-menu" role="button" @click="closeMenu">
          ¡Quiero tatuarme!
        </router-link>

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
.main-nav {
  position: fixed;
  top: 0;
  width: 100%;
  z-index: 1000;
  background-color: rgba(0, 0, 0, 0.6);
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

/* LOGO */
.logo-link {
  font-family: 'Pirata', cursive;
  color: #fff;
  font-size: 2rem;
  text-decoration: none;
}
.logo-link:hover { color: #ff0000; }

/* FILAS */
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

/* REDES */
.social-icons {
  display: flex;
  gap: 1rem;
}
.social-icon img {
  width: 24px;
  height: 24px;
  filter: brightness(0) invert(1);
}
.social-icon img:hover {
  filter: brightness(0) invert(0.6) sepia(1) hue-rotate(-20deg);
}

/* BOTÓN */
.reserva-btn-menu {
  background-color: #ff0000;
  color: #fff;
  padding: 0.6rem 1.2rem;
  border-radius: 8px;
  font-weight: bold;
  text-decoration: none;
}
.reserva-btn-menu:hover {
  background-color: #cc0000;
}

/* HAMBURGUESA */
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

/* MENÚ DESPLEGABLE */
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
.nav-links.open {
  transform: translateY(0);
}
.nav-links a {
  color: #fff;
  text-decoration: none;
  font-size: 1.2rem;
}
.nav-links a:hover { color: #ff0000; }

/* === ESCRITORIO === */
@media (min-width: 769px) {
  .nav-container { 
    flex-direction: row; 
    align-items: center; 
    justify-content: space-between; 
  }

  .nav-top, .nav-bottom { 
    flex-direction: row; 
    align-items: center; 
    margin-top: 0; 
  }

  /* 🔹 Aquí añadimos separación entre iconos y botón */
  .nav-bottom { 
    gap: 2rem; /* separa todos los elementos de nav-bottom */
  }

  /* 🔹 Botón con margen extra respecto a los iconos sociales */
  .reserva-btn-menu {
    margin-left: 1.5rem;
  }

  .hamburger { display: none; }

  .nav-links {
    position: static;
    transform: none;
    background: transparent;
    flex-direction: row;
    gap: 2rem;
    padding: 0;
  }
}

</style>
