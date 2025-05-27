<template>
  <header class="header-nav">
    <div class="logo">Witch Tattoo</div>
    <nav>
      <router-link to="/">Inicio</router-link>
      <router-link to="/reservas">Reservas</router-link>
      <router-link to="/galeria">Galería</router-link>
      <router-link to="/faq">FAQ</router-link>
      <router-link to="/contacto">Contacto</router-link>
    </nav>
  </header>
</template>

<style scoped>
.header-nav {
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding: 1.5rem 2rem;
  background: #f5ede6;
}
.logo {
  font-weight: bold;
  font-size: 1.5rem;
  letter-spacing: 2px;
}
nav a {
  margin-left: 1.5rem;
  text-decoration: none;
  color: #222;
  font-weight: 500;
}
nav a.router-link-active {
  color: #b48a78;
}
</style>