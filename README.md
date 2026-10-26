# Lakitas Proyección

Sitio web de la comparsa **Lakitas de Arica Proyección**: historia, integrantes, galerías y el primer disco de la agrupación, disponible para escuchar en línea o descargar en alta calidad.

El proyecto fue financiado por el Fondo Nacional de Desarrollo Cultural y de las Artes (FONDART), convocatoria 2022. Forma parte de una línea de registro y difusión de las comparsas de lakitas del extremo norte de Chile.

## Stack

- PHP 8.5 y Laravel 12
- Laravel Mix (Less, Bootstrap 5, jQuery, PhotoSwipe)
- MySQL (configuración por defecto; el sitio público no depende de base de datos)

## Páginas

| Ruta | Contenido |
| --- | --- |
| `/` | Portada y patrocinadores |
| `/proyecto` | Contexto de la producción fonográfica |
| `/historia` | Historia de la comparsa |
| `/musica` | Repertorio, reproducción y descarga |
| `/integrantes` | Integrantes e instrumentos |
| `/galerias` | Galerías fotográficas (Making of, Alto Ramírez 2019) |
| `/creditos` | Créditos de la producción |
| `/contacto` | Teléfono, correo y redes sociales |

## Requisitos

- PHP 8.5+
- Composer
- Node.js y npm
- Extensiones PHP habituales de Laravel (`mbstring`, `openssl`, `pdo`, `tokenizer`, `xml`, `ctype`, `json`, `fileinfo`)

## Instalación

```bash
git clone git@github.com:Lakitas-de-Arica/proyeccion.git
cd proyeccion
composer install
cp .env.example .env
php artisan key:generate
npm install
npm run dev
php artisan serve
```

Para assets de producción:

```bash
npm run production
```

El servidor de desarrollo queda en `http://localhost:8000`.

## Desarrollo

El frontend se compila con Laravel Mix (`webpack.mix.js`):

- Estilos propios en `resources/less/app.less`
- Vistas Blade en `resources/views/`
- Rutas en `routes/web.php`
- Contenido de música, integrantes y galerías en `app/Http/Controllers/HomeController.php`
- Imágenes y audio en `public/images/` y `public/mp3/`

```bash
npm run watch
php artisan test
vendor/bin/pint
```

## Contacto

- Correo: [lakitasdearicaproyeccion@gmail.com](mailto:lakitasdearicaproyeccion@gmail.com)
- Teléfono: +56 9 9549 3368
- Arica, Chile
- [Facebook](https://web.facebook.com/LakitasProyeccion) · [Instagram](https://www.instagram.com/lakitasproyeccion/) · [YouTube](https://www.youtube.com/@lakitasdearicaproyeccion1122)
