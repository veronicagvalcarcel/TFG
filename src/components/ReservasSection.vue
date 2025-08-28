<template>
  <div>
    <h1>Formulario de Reservas</h1>
    <form @submit.prevent="enviarReserva">
      <label>Nombre:</label>
      <input type="text" v-model="nombre" required>
      <br>

      <label>Apellido:</label>
      <input type="text" v-model="apellido" required>
      <br>

      <label>Correo electrónico:</label>
      <input type="email" v-model="correo" required>
      <br>

      <label>Teléfono:</label>
      <input type="tel" v-model="telefono" required>
      <br>

      <label>Fecha de reserva:</label>
      <input type="date" v-model="fecha" required>
      <br>

      <label>Hora de reserva:</label>
      <input type="time" v-model="hora" required>
      <br>

      <button type="submit">Enviar reserva</button>
    </form>

    <p v-if="mensaje" style="margin-top: 1rem; color: green;">{{ mensaje }}</p>
    <p v-if="error" style="margin-top: 1rem; color: red;">{{ error }}</p>
  </div>
</template>

<script>
import axios from "axios";

export default {
  data() {
    return {
      nombre: '',
      apellido: '',
      correo: '',
      telefono: '',
      fecha: '',
      hora: '',
      mensaje: '',
      error: ''
    }
  },
  methods: {
    async enviarReserva() {
      try {
        this.mensaje = '';
        this.error = '';

        const response = await axios.post("http://localhost:8000/api/citas", {
          nombre: this.nombre,
          apellido: this.apellido,
          correo: this.correo,
          telefono: this.telefono,
          fecha: this.fecha,
          hora: this.hora,
        });

        this.mensaje = "Reserva enviada con éxito ✅";
        console.log("Respuesta del servidor:", response.data);

        // Limpiar formulario
        this.nombre = '';
        this.apellido = '';
        this.correo = '';
        this.telefono = '';
        this.fecha = '';
        this.hora = '';
      } catch (err) {
        console.error("Error al enviar la reserva:", err);
        this.error = "❌ Hubo un problema al enviar la reserva.";
      }
    }
  }
}
</script>