<p align="center"><a href="https://laravel.com" target="_blank"><img src="logotipoEventRoute.png" width="200"></a></p>

## Participantes
    Francisco Álvarez Ordóñez
    Inma González Díaz
    Maximiliano Lobos
    César Martínez
    David Soto
    

## Event-Route 

Nuestra app de eventos muestra una selección de festivales de distintos géneros en los que un/a usuari@ registrado puede inscribirse. También tendrá la opción de ver todos los eventos en los que se ha inscrito. 
<br>
El usuario no registrado no tendrá la opción de inscribirse a un proyecto, se le ofrecerá registrarse en la web para poder realizar otras acciones.
<br>
El administrador podrá editar y borrar eventos, así como crear eventos nuevos y añadir los eventos existentes al carrusel de la página de inicio.


## Ejecutar el proyecto

1. Clonar el proyecto
2. Una vez abierto en el procesador de texto, ejecutar los siguientes comandos: 

`composer update` 
<br>
`npm install` 
<br>
`npm update`

3. Crear un archivo .env que contenga la misma información que el archivo .env.example, a excepción del nombre de la base de datos: 
    db_database: event-route

4. Ejecutar los siguientes comandos: 
`php artisan migrate:fresh --seed` 
<br>

5. En una terminal nueva, ejecutar:
`npm run dev` 
<br>

6. En una terminal nueva, ejecutar:
`php artisan serve`


## Stack used

PHP Laravel 9 + Bootstrap + Tailwind

### Previews





