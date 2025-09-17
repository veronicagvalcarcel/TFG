# 💉 Witch Tattoo - Web SPA

**Proyecto de sitio web para estudio de tatuajes** desarrollado como Single Page Application (SPA) con Vue.js y Vite.

## 🌐 Características principales

- Diseño responsive y visualmente atractivo.
- Efecto de parallax con video de fondo en el header.
- Navegación por secciones (`Inicio`, `Carrusel`, `Servicios`, `Reservas`, `FAQ`) mediante anclas internas.
- Scroll suave y experiencia fluida en dispositivos móviles.
- Integración de componentes reutilizables (`Header`, `Footer`, `ReservasForm`, etc.).
- Estructura clara y mantenible del código frontend.
- Preparado para conectar con backend Laravel (estructura incluida en el repositorio).

## 🧱 Estructura del proyecto

```
🧱 Frontend (Vue.js) estructura de carpetas:

src/
tatuadora-web/
├── public/                   # Archivos estáticos (imágenes, vídeos, favicon, fonts)
├── src/
│   ├── assets/               # Archivos estáticos usados en el frontend (CSS)
│   │   └── main.css          # Estilos globales
│   ├── api/                  # Configuración de Axios y llamadas a APIs
│   │   └── axios.js
│   ├── components/       # Componentes reutilizables (secciones y bloques UI)
│   │   ├── AboutSection.vue
│   │   ├── CarruselSection.vue
│   │   ├── FAQSection.vue
│   │   ├── FooterSection.vue
│   │   ├── HeaderSection.vue
│   │   ├── ReservasSection.vue
│   │   └── ServicesSection.vue
│   ├── router/               # Configuración de rutas (Vue Router)
│   │   └── router.js
│   ├── services/             # Servicios para lógica de negocio o llamadas a API
│   │   └── citaService.js
│   ├── views/                # Vistas principales (páginas del sitio)
│   │   ├── About.vue
│   │   ├── Aviso_legal.vue
│   │   ├── Carrusel.vue
│   │   ├── FAQ.vue
│   │   ├── Home.vue
│   │   ├── Politicas.vue
│   │   ├── Proteccion_datos.vue
│   │   ├── Reservas.vue
│   │   └── Services.vue
│   ├── App.vue               # Componente raíz de la aplicación
│   └── main.js               # Punto de entrada de la app Vue
├── index.html                # HTML principal
├── package.json              # Dependencias y scripts del proyecto
└── vite.config.js            # Configuración de Vite

🧱 Backend (Laravel) estructura principal:

src/
tatuadora-backend/
├── app/
│   ├── Http/
│   │   └── Controllers/      # Controladores de la lógica (CitaController, etc.)
│   ├── Mail/             # Clases para envío de correos (MailAvisoCita, MailConfirmaCita)
│   ├── Models/               # Modelos Eloquent (Cliente, Cita, Usuario)
│   └── Providers/            # Proveedores de servicios
├── bootstrap/                # Archivos de arranque de Laravel
├── config/                   # Configuración de la app (base de datos, mail, etc.)
├── database/
│   ├── factories/            # Fábricas para tests/seeds
│   ├── migrations/           # Migraciones de base de datos
│   └── seeders/              # Seeders para poblar la base de datos
├── public/                   # Punto de entrada web (index.php)
├── resources/
│   ├── css/                  # CSS 
│   ├── js/                   # JS (bootstrap.js, etc.)
│   └── views/                # Vistas Blade (emails, welcome.blade.php, etc.)
├── routes/                   # Definición de rutas (web.php, api.php)
├── storage/                  # Archivos generados (logs, caché, etc.)
├── tests/                    # Tests automáticos
├── vendor/                   # Dependencias Composer
├── .env                      # Configuración de entorno
├── artisan                   # CLI de Laravel
├── composer.json             # Dependencias PHP
├── package.json              # Dependencias JS (si usas Laravel Mix/Vite)
└── README.md                 # Documentación del proyecto

```



## 🚀 Cómo ejecutar el proyecto

1. Clona el repositorio:
2. Instala las dependencias:
```bash
git clone https://github.com/tu-usuario/tatuadora-web.git
cd tatuadora-web
```
## 🐳 DOCKER 

El proyecto se puede ejecutar utilizando Docker. Primero, levantamos todos los contenedores en modo daemon para no ocupar la sesión de terminal:

```sh
docker compose up -d
```

Una vez los contenedores están activos, podemos ejecutar los servicios.

### Frontend (opcional)

Para entrar en el contenedor del frontend:

```sh
docker compose exec vue bash
```

Ahora, es posible visitar la página desde http://localhost:5173/.

### Backend (Opcional)

Para entrar en el contenedor del backend:

```sh
docker compose exec app bash
```

Desde aquí, se pueden ejecutar comandos de Artisan, migraciones, etc.

## 📁 DATABASE

Para entrar en la base de datos y poder consultarla:

```sh
docker compose exec db psql -U postgres -d "tatuadora_db"
```

📂📆 Una vez dentro en la base de datos, se pueden ejecutar CONSULTAS como:

```sql
select * from citas;
select * from clientes;
```

#### 📫✉️ Simulación de envío de emails

Para verificar que la simulación del envio de email funciona correctamente, se puede entrar en el contenedor del backend y ejecutar el siguiente comando:

```sh
docker compose exec app tail -f storage/logs/laravel.log 
```

📓 Esto mostratrá los logs del backend, incluyendo los envíos de email simulados y el link de confirmación de la cita. ✔️

## 🛠️ Tecnologías utilizadas

Frontend: Vue 3 + Vite + Bootstrap 5

Estilos: CSS con diseño responsive y parallax

Routing interno: Scroll suave con navegación anclada

Backend: Laravel

Base de datos: PostgreSQL

## 📁 Ramas de desarrollo

El proyecto se organiza mediante ramas específicas para cada funcionalidad o componente. Esto facilita el trabajo en paralelo y el control de versiones.

### Cambiar a una rama específica

```bash
git checkout feature/nombre-de-la-rama