<template>
  <div class="bg-container">
    <!-- Header importado -->
    <HeaderSection />

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
