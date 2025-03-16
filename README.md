# Sistema de Gestión de Inventarios (IMS)

Este repositorio contiene un **Sistema de Gestión de Inventarios (IMS)**, desarrollado para demostrar mis habilidades en el desarrollo de software. El proyecto incluye funcionalidades para gestionar productos, controlar el stock y realizar operaciones de entrada y salida, permitiendo así llevar un control eficiente del inventario.

## Características principales

- **Gestión de productos**: Crear, editar y eliminar productos.
- **Control de stock**: Actualización en tiempo real del inventario.
- **Operaciones de entrada y salida**: Registrar movimientos de productos dentro y fuera del inventario.
- **Interfaz amigable**: Acceso a través de una interfaz intuitiva para facilitar el uso del sistema.

## Tecnologías utilizadas

- **Backend**: PHP (Laravel)
- **Base de datos**: MySQL 
- **Frontend**: HTML, CSS, Bootstrap

## Instalación

Para comenzar con el proyecto, sigue estos pasos:

1. Clona este repositorio:

    ```bash
    git clone https://github.com/tu_usuario/tu_repositorio.git
    ```

2. Instala las dependencias necesarias utilizando **Composer**:

    ```bash
    composer install
    ```

3. Configura el archivo `.env` con las credenciales de tu base de datos:

    ```bash
    cp .env.example .env
    ```

4. Genera la clave de la aplicación:

    ```bash
    php artisan key:generate
    ```

5. Realiza las migraciones para crear las tablas de la base de datos:

    ```bash
    php artisan migrate
    ```

6. Ejecuta el servidor de desarrollo:

    ```bash
    php artisan serve
    ```

7. Accede a la aplicación en tu navegador en `http://127.0.0.1:8000/`.

## Propósito

Este proyecto tiene como objetivo principal demostrar mis habilidades en el desarrollo de sistemas completos, desde el backend hasta la interacción con bases de datos. A través de este proyecto, quiero mostrar mi capacidad para implementar un sistema funcional y bien estructurado, utilizando buenas prácticas de desarrollo y tecnologías modernas.
--
Gracias por visitar este repositorio. ¡Espero que encuentres útil este proyecto y cualquier sugerencia para mejorarlo es bienvenida!
