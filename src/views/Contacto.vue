<template>
  <section class="contacto">
    <h1>Contacto</h1>
    <form class="contact-form">
      <label>
        Nombre:
        <input type="text" required />
      </label>
      <label>
        Email:
        <input type="email" required />
      </label>
      <label>
        Mensaje:
        <textarea required></textarea>
      </label>
      <button type="submit">Enviar</button>
    </form>
  </section>
</template>

<script setup>
</script>

<style scoped>
.contacto {
  max-width: 500px;
  margin: 2rem auto;
  padding: 1rem;
}
.contact-form label {
  display: block;
  margin-bottom: 1rem;
}
.contact-form input,
.contact-form textarea {
  width: 100%;
  padding: 0.5rem;
  margin-top: 0.25rem;
  border-radius: 4px;
  border: 1px solid #ccc;
}
button {
  background: #222;
  color: #fff;
  border: none;
  padding: 0.75rem 1.5rem;
  border-radius: 4px;
  cursor: pointer;
}
</style>