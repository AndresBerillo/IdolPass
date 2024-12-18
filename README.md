# IdolPass

IdolPass es una aplicación web diseñada para la venta de entradas de eventos, ofreciendo una plataforma intuitiva tanto para organizadores como para asistentes.

## Características

- **Gestión de Eventos**: Permite a los organizadores crear, editar y eliminar eventos.
- **Compra de Entradas**: Los usuarios pueden explorar eventos y adquirir entradas de manera sencilla.
- **Panel de Administración**: Acceso a estadísticas y gestión de usuarios y eventos para los administradores.

## Tecnologías Utilizadas

- **Framework**: Laravel 9.x
- **Frontend**: Blade Templates, Bootstrap
- **Base de Datos**: MySQL
- **Autenticación**: Laravel Breeze para la gestión de usuarios

## Requisitos Previos

- PHP >= 8.0
- Composer
- Node.js y npm
- MySQL

## Instalación

1. **Clonar el repositorio**:

   ```bash
   git clone https://github.com/AndresBerillo/IdolPass.git
   cd IdolPass
   ```

2. **Instalar dependencias de PHP**:

   ```bash
   composer install
   ```

3. **Instalar dependencias de Node.js**:

   ```bash
   npm install
   ```

4. **Configurar el archivo de entorno**:

   Duplicar el archivo `.env.example` y renombrarlo a `.env`. Luego, configurar las variables de entorno, especialmente las relacionadas con la base de datos y las credenciales de servicios externos.

5. **Generar la clave de la aplicación**:

   ```bash
   php artisan key:generate
   ```

6. **Migrar y sembrar la base de datos**:

   ```bash
   php artisan migrate --seed
   ```

7. **Compilar los activos front-end**:

   ```bash
   npm run dev
   ```

## Uso

- **Iniciar el servidor de desarrollo**:

  ```bash
  php artisan serve
  ```

  La aplicación estará disponible en `http://localhost:8000`.

## Pruebas

- **Ejecutar pruebas**:

  ```bash
  php artisan test
  ```


## Contacto

Para preguntas o sugerencias, por favor contacta a [andresberillo.01@gmail.com].

