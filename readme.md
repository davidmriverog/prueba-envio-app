## Respuesta de examen (David Rivero)

Saludos, ingreso en este repositorio las respuesta asociada a la prueba que me indicaste.

Adicionalmente deberás seguir los siguientes pasos para la instalación y ejecución del mismo.


### Paso 1 (Indicaciones previas)
* Tener instalado un servidor web de preferencia (Wamp, Xamp, LAMP, Valet, Nginx y otros).
* Clonar el proyecto mediante la URL suministrada desde Github.
* Abrir la terminal o consola de preferencia segun su sistema operativo.
* Ubicar la carpeta del proyecto clonado.

### Paso 2 (Ejecutar en el CMD o Terminal)
```
composer install
```

### Paso 3 (Generamos la App Key de Laravel)
```
php artisan key:generate
```

### Paso 4 (Ejecutamos las migraciones producto del enunciado)

Paso previo contar con un motor de base datos, configurado desde el fichero .env y con la base de datos ya creada.
```
php artisan migrate
```

### Paso 5 (Ejecutar script para la carga inicial de datos)
```
php artisan db:seed
```

### Paso 5 (Ejecutar script para la carga de encryptacion de tokens con passport)
```
php artisan passport:install
```
