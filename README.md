# Witch Tattoo

Proyecto de gestión de reservas y galería para estudio de tatuajes.

## Tecnologías

- **Frontend:** Vue 3 + Vite
- **Backend:** Laravel (API RESTful)

## Estructura del Proyecto

```
tatuadora-web/
├── src/                # Código fuente del frontend (Vue)
│   ├── views/          # Vistas principales (Home, Reservas, Galería, FAQ, Admin, Contacto)
│   ├── components/     # Componentes reutilizables
│   └── router/         # Configuración de rutas
├── tatuadora-backend/  # Backend en Laravel
└── README.md
```

## Funcionalidades principales

- Página de inicio con vista previa de trabajos y enlaces rápidos.
- Reservas online con calendario y formulario.
- Galería de imágenes categorizadas y filtrables.
- Panel de administración para gestión de citas.
- Página de preguntas frecuentes y políticas.
- Formulario de contacto.

## Instalación y uso

### Frontend

```bash
cd tatuadora-web
npm install
npm run dev
```

### Backend

```bash
cd tatuadora-backend
composer install
cp .env.example .env
php artisan key:generate
php artisan migrate
php artisan serve
```

## Autoría

Proyecto desarrollado por [Verónica G. Valcárcel](https://github.com/veronicagvalcarcel) para TFG de DAM.

---

¡Gracias por visitar Witch Tattoo!
