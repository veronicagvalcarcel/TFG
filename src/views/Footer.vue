<template>
  <footer class="FooterSection">
    <div class="footer-links">
      <router-link to="/FAQ">FAQ</router-link>
      <router-link to="/ReservasForm">Reservas</router-link>
      <router-link to="/Carrusel">Galería</router-link>
    </div>
    <div class="footer-logo">Witch Tattoo</div>
    <div class="footer-social">
      <a href="#" target="_blank">Instagram</a>
      <a href="#" target="_blank">Facebook</a>
    </div>
  </footer>
</template>

<style scoped>
.FooterSection {
  background: #e0d6ce;
  padding: 2rem 1rem;
  display: flex;
  flex-wrap: wrap;
  justify-content: space-between;
  align-items: center;
  font-size: 1rem;
}
.footer-links, .footer-social {
  display: flex;
  gap: 1.5rem;
}
.footer-logo {
  font-weight: bold;
  font-size: 1.3rem;
  letter-spacing: 2px;
}
a {
  color: #222;
  text-decoration: none;
}
a:hover {
  color: #b48a78;
}
</style>