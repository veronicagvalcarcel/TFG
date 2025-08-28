import axios from "axios";

const API_URL = "http://localhost:8000/api"; 

// Crear una cita
export const createAppointment = async (appointmentData) => {
  try {
    const response = await axios.post(`${API_URL}/citas`, appointmentData);
    return response.data;
  } catch (error) {
    console.error("Error creando la cita:", error.response?.data || error.message);
    throw error;
  }
};

// Obtener todas las citas
export const getAppointments = async () => {
  try {
    const response = await axios.get(`${API_URL}/citas`);
    return response.data;
  } catch (error) {
    console.error("Error obteniendo las citas:", error.response?.data || error.message);
    throw error;
  }
};

// Obtener una cita por ID
export const getAppointmentById = async (id) => {
  try {
    const response = await axios.get(`${API_URL}/appointments/${id}`);
    return response.data;
  } catch (error) {
    console.error("Error obteniendo la cita:", error.response?.data || error.message);
    throw error;
  }
};

// Actualizar una cita
export const updateAppointment = async (id, updatedData) => {
  try {
    const response = await axios.put(`${API_URL}/citas/${id}`, updatedData);
    return response.data;
  } catch (error) {
    console.error("Error actualizando la cita:", error.response?.data || error.message);
    throw error;
  }
};

// Eliminar una cita
export const deleteAppointment = async (id) => {
  try {
    const response = await axios.delete(`${API_URL}/citas/${id}`);
    return response.data;
  } catch (error) {
    console.error("Error eliminando la cita:", error.response?.data || error.message);
    throw error;
  }
};
