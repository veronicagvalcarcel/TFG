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
  </div>
</template>

<script>
export default {
  data() {
    return {
      nombre: '',
      apellido: '',
      correo: '',
      telefono: '',
      fecha: '',
      hora: ''
    }
  },
  methods: {
    enviarReserva() {
      // Aquí hay que agregar la lógica para enviar la reserva
      console.log('Reserva enviada');
    }
  }
}
</script>