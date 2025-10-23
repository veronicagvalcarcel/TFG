
💉 Witch Tattoo - Web SPA

Sitio web para estudio de tatuajes, desarrollado como Single Page Application (SPA) con Vue 3 y Vite.
El objetivo es ofrecer una experiencia visual fluida, moderna y funcional, con navegación por secciones dentro de una sola página.

🌐 Características principales

🌈 Diseño responsive y visualmente atractivo.

🎥 Efecto parallax con video de fondo en el header.

🔗 Navegación fluida entre secciones (Inicio, Carrusel, Servicios, Reservas, FAQ) mediante anclas internas.

🧭 Scroll suave y comportamiento SPA (sin recarga de página).

🧩 Componentes reutilizables: Header, HeroSection, ReservasSection, Footer, etc.

⚙️ Código modular y mantenible, organizado por secciones.

💡 Preparada para una futura integración con backend (Laravel u otro framework si se desea).

🧱 Estructura del proyecto

tatuadora-web/
├── public/                     # Archivos estáticos (imágenes, vídeos, fuentes, favicon)
├── src/
│   ├── api/                    # Configuración de Axios u otras conexiones externas (vacío o futuro uso)
│   ├── assets/                 # Recursos estáticos usados en el frontend
│   │   ├── main.css            # Estilos globales
│   │   └── vue.svg
│   ├── components/             # Componentes reutilizables (bloques o secciones)
│   │   ├── AboutSection.vue
│   │   ├── CarruselSection.vue
│   │   ├── FAQSection.vue
│   │   ├── FooterSection.vue
│   │   ├── HeaderSection.vue
│   │   ├── HeroSection.vue
│   │   ├── ReservasSection.vue
│   │   └── ServicesSection.vue
│   ├── router/                 # Configuración de rutas internas (páginas legales y SPA)
│   │   └── router.js
│   ├── views/                  # Vistas principales del sitio
│   │   ├── About.vue
│   │   ├── Aviso_legal.vue
│   │   ├── Carrusel.vue
│   │   ├── FAQ.vue
│   │   ├── Home.vue
│   │   ├── Politicas.vue
│   │   ├── Proteccion_datos.vue
│   │   ├── Reservas.vue
│   │   └── Services.vue
│   ├── App.vue                 # Componente raíz
│   └── main.js                 # Punto de entrada de la app Vue
├── index.html                  # HTML principal
├── package.json                # Dependencias y scripts
├── package-lock.json           # Bloqueo de versiones
└── vite.config.js              # Configuración de Vite

🚀 Cómo ejecutar el proyecto localmente

Asegúrate de tener instalados:
Node.js
 (versión 18 o superior)
npm
 o pnpm

🔧 Instalación
1. Clona el repositorio

```bash
git clone https://github.com/tu-usuario/tatuadora-web.git
cd tatuadora-web
```

2. Instala las dependencias
```bash
npm install
```
3. Ejecuta el servidor de desarrollo
```bash
npm run dev
```
4. Abre tu navegador y visita [`http://localhost:5173`](http://localhost:5173)


🐳 Docker

Para ejecutarlo dentro de un contenedor Docker:

Levanta el entorno:
```bash
docker compose up -d
```

Accede a la app desde tu navegador en:

[`http://localhost:5173`](http://localhost:5173)

Para detener los contenedores:

```bash
docker compose down
```

🛠️ Tecnologías utilizadas
Tipo	Herramienta
Framework principal	Vue 3
Compilador / servidor local	Vite
Estilos	CSS3 (estructura modular y responsive)
Animaciones	Parallax y scroll suave con CSS y Vue
Gestión de rutas	Vue Router
Gestión de dependencias	npm
Contenedores (opcional)	Docker Compose

📁 Navegación y secciones

Inicio: Presentación con video de fondo y efecto parallax.

Carrusel: Galería visual o muestra de trabajos.

Servicios: Lista de servicios del estudio.

Reservas: Formulario informativo sin conexión a base de datos.

FAQ: Preguntas frecuentes con diseño tipo acordeón.

Páginas legales: Aviso Legal, Política de Privacidad y Protección de Datos.


## 📁 Ramas de desarrollo

El proyecto se organiza mediante ramas específicas para cada funcionalidad o componente. Esto facilita el trabajo en paralelo y el control de versiones.

### Cambiar a una rama específica

```bash
git checkout feature/nombre-de-la-rama
```

### Crear una rama nueva

```bash
git checkout -b feature/nueva-rama
``` 
