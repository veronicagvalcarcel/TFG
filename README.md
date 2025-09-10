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

El proyecto se puede ejecutar utilizando Docker. Primero, levantamos todos los contenedores en modo daemon para no ocupar la sesión de terminal:

```sh
docker compose up -d
```

Una vez los contenedores están activos, podemos ejecutar los servicios.

### Frontend

Para ejecutar el frontend:

```sh
docker compose exec vue bash
```

Ahora, es posible visitar la página desde https://localhost:5173.

### Backend

Para ejecutar el backend:

```sh
docker compose exec app bash
```

Una vez hecho esto, es posible utilizar las funciones de backend como el sistema de reservas.

## Database

Para entrar en la base de datos y poder consultarla:

```sh
docker compose exec db psql -U postgres -d "tatuadora-db"
```

Una vez logueado en la base de datos, se pueden ejecutar consultas como:

```sql
select * from citas;
select * from clientes;
```

#### Anexo: Simulación de envío de emails

Para verificar que la simulación del envio de email funciona correctamente, se puede entrar en el contenedor del backend y ejecutar el siguiente comando:

```sh
docker compose exec app tail -f storage/logs/laravel.log 
```

Esto mostratrá los logs del backend, incluyendo los envíos de email simulados y el link de confirmación de la cita.

## 🛠️ Tecnologías utilizadas

Frontend: Vue 3 + Vite

Estilos: CSS con diseño responsive y parallax

Routing interno: Scroll suave con navegación anclada

Backend: Laravel

Base de datos: PostgreSQL

## 📁 Ramas de desarrollo

El proyecto se organiza mediante ramas específicas para cada funcionalidad o componente. Esto facilita el trabajo en paralelo y el control de versiones.

### Cambiar a una rama específica

```bash
git checkout feature/nombre-de-la-rama