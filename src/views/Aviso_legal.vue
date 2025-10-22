<template>
  <div class="bg-container">
    <!-- Header importado -->
    <HeaderSection />

    <!-- Contenido principal -->
    <main class="politicas-container">
      <h1 class="politicas-title">Aviso Legal</h1>

      <p>
        <strong>Titular del sitio web:</strong> Sara Castro Vicente, responsable del sitio web Witch Tattoo Studio.
      </p>

      <p>
        <strong>Objeto:</strong> Este sitio web tiene como finalidad mostrar los servicios de tatuajes, la galería de trabajos, y permitir la gestión de reservas y contacto con la responsable.
      </p>

      <p>
        <strong>Propiedad intelectual:</strong> Todos los contenidos del sitio web, incluyendo textos, imágenes, fotografías, diseños, logotipos y demás elementos, son propiedad de Sara Castro Vicente o de terceros que han autorizado su uso. Queda prohibida su reproducción, distribución, comunicación pública o transformación sin autorización expresa.
      </p>

      <p>
        <strong>Responsabilidad:</strong> Sara Castro Vicente no se hace responsable de los daños o perjuicios derivados del uso indebido del sitio web o de la información publicada, incluyendo enlaces a terceros.
      </p>

     <p>
      <strong>Protección de datos:</strong> La recogida y tratamiento de datos personales se realiza conforme a la 
      <a href="/proteccion_datos" target="_blank" rel="noopener noreferrer">Política de Protección de Datos</a>
      y la
      <a href="/politicas" target="_blank" rel="noopener noreferrer">Política de Privacidad</a>.
    </p>


      <p>
        <strong>Modificaciones:</strong> Sara Castro Vicente se reserva el derecho de modificar el contenido de este aviso legal en cualquier momento para adaptarlo a cambios legales o de funcionamiento del sitio web.
      </p>
    </main>

    <!-- Footer importado -->
    <FooterSection />
  </div>
</template>

<script setup>
import HeaderSection from '../components/HeaderSection.vue'
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

/* Contenido principal */
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

.politicas-container p a {
  color: #b22222;
  font-weight: bold;
  text-decoration: underline;
}
</style>
