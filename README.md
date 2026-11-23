\# API REST «Hola Mundo» — PHP y Laravel



API REST básica construida con \*PHP\* y \*Laravel\* que expone el endpoint GET /api/hola y responde en formato JSON.



\## Requisitos previos

\- PHP

\- Composer

\- Git

\- Postman (para pruebas)



\## Instalación y configuración

```bash

git clone \[https://github.com/TU\_USUARIO/api-hola-mundo-laravel.git](https://github.com/TU\_USUARIO/api-hola-mundo-laravel.git)

cd api-hola-mundo-laravel

composer install

cp .env.example .env

php artisan key:generate

Ejecución del servidor local
Bash
php artisan serve --host=127.0.0.1 --port=8000
Prueba del endpoint
Método HTTP: GET

URL: http://127.0.0.1:8000/api/hola

Código esperado: 200 OK

Ejemplo de respuesta JSON
JSON
{
  "mensaje": "Hola Mundo",
  "lenguaje": "PHP",
  "framework": "Laravel"
}

---

### Paso 5. Subir el proyecto a GitHub desde la terminal
Asegúrate de estar dentro de la carpeta del proyecto (api-hola-mundo)[cite: 2] y corre estos comandos uno por uno:

```bash
git init
git add .
git commit -m "feat: API REST Hola Mundo con PHP y Laravel"
git branch -M main
git remote add origin https://github.com/TU_USUARIO/api-hola-mundo-laravel.git
git push -u origin main
Si al hacer git push se abre una ventana de inicio de sesión o te pide credenciales: inicia sesión en tu cuenta de GitHub desde la ventana emergente del navegador/Git Credential Manager o usa tu token/cuenta vinculada. Si te sale algún mensaje en rojo al hacer push, pégalo aquí y te digo exactamente qué hacer.

Paso 6. Verificar que otro pueda clonarlo y ejecutarlo (Ítem 7)
Abre otra carpeta (por ejemplo en tu Escritorio o en una carpeta temporal) y prueba clonarlo desde cero:

Bash
git clone https://github.com/TU_USUARIO/api-hola-mundo-laravel.git prueba-clon
cd prueba-clon
composer install
cp .env.example .env
php artisan key:generate
php artisan serve --host=127.0.0.1 --port=8000
