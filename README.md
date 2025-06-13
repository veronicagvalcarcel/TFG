# 💉 Witch Tattoo - Web SPA

**Proyecto de sitio web para estudio de tatuajes** desarrollado como Single Page Application (SPA) con Vue.js y Vite.

## 🌐 Características principales

- Diseño responsive y visualmente atractivo.
- Efecto de parallax con video de fondo en el header.
- Navegación por secciones (`Inicio`, `Galería`, `Servicios`, `Reservas`, `FAQ`, `Contacto`) mediante anclas internas.
- Scroll suave y experiencia fluida en dispositivos móviles.
- Integración de componentes reutilizables (`Header`, `Footer`, `ReservasForm`, etc.).
- Estructura clara y mantenible del código frontend.
- Preparado para conectar con backend Laravel (estructura incluida en el repositorio).

## 🧱 Estructura del proyecto

```
tatuadora-web/
├── public/
│   └── 1.mp4                 # Video para header con parallax
├── src/
│   ├── components/           # Componentes Vue reutilizables
│   ├── views/                # Vistas como Home.vue (SPA principal)
│   ├── assets/               # Imágenes y recursos estáticos
│   ├── App.vue               # Entry point
│   └── main.js               # Configuración de Vue
├── tatuadora-backend/       # Carpeta backend (Laravel)
├── package.json
└── README.md
```



## 🚀 Cómo ejecutar el proyecto

1. Clona el repositorio:
2. Instala las dependencias:
```bash
git clone https://github.com/tu-usuario/tatuadora-web.git
cd tatuadora-web
```

2. Instala las dependencias:
```bash
npm install

3. Inicia el servidor de desarrollo:
```bash
npm run dev
```
4. Abre tu navegador en http://localhost:5173


🛠️ Tecnologías utilizadas
Frontend: Vue 3 + Vite

Estilos: CSS con diseño responsive y parallax

Routing interno: Scroll suave con navegación anclada

Backend (opcional): Laravel (incluido en /tatuadora-backend)

## 📁 Ramas de desarrollo

El proyecto se organiza mediante ramas específicas para cada funcionalidad o componente. Esto facilita el trabajo en paralelo y el control de versiones.

| Rama                               | Descripción                                                      |
|------------------------------------|------------------------------------------------------------------|
| `feature/single-page-layout`       | Estructura general como SPA con navegación por secciones         |
| `feature/reservations-form`        | Formulario de reservas integrado y funcional                     |
| `feature/faq-section`              | Sección de preguntas frecuentes con estructura tipo acordeón     |
| `feature/contact-form`             | Formulario de contacto funcional y accesible                     |
| `feature/gallery-section`          | Galería de imágenes categorizadas y filtrables                   |
| `feature/services-section`         | Vista con los servicios ofrecidos                                |
| `feature/header-footer-components` | Encabezado y pie de página reutilizables                         |
| `feature/parallax-video-header`    | Efecto parallax con video en el encabezado                       |
| `feature/responsive-design`        | Adaptaciones visuales para todos los tamaños de pantalla         |
| `feature/vue-components-structure` | Organización del código con componentes reutilizables            |

### Cambiar a una rama específica

```bash
git checkout feature/nombre-de-la-rama




