<!-- el comando php artisan migrate va a recorrer uno a uno las migraciones que 
hemos creado y va a ejecutar el metodo up ...teniendo bien configurado el .env -->

<!-- LARAVEL> 
para crear migracion
php artisan make:migration <nombre>

para crear migracion siguiendo la convencion que nos crea a lavez el up y el down
php artisan make:migration create_<nombre>_table

para realizar migración 
php artisan migrate

para revertir los datos de la ultima migracion hecha
php artisan migrate:rollback

para actualizar las modificaciones de las tablas .... lo que hace es recorrer las tablas y ejecuta los dropIfExist
OJO ... el metodo fresh es destructivo 
php artisan migrate:fresh
 -->

 <!-- MODIFICAR UNA TABLA YA CREADA CON INFORMACION EN ELLA
para agregar una columna en una tabla que ya tiene datos 
php artisan make:migration add_<nombre columna>_to_<nombre de Tabla a agregar>_table 
    ya creada la migracion adicionar los campos requeridos en el up y en el down-->

<!-- 1 si queremos modificar los atributos de las columnas 
composer require doctrine/dbal

2 ahora debemos crear una migracion
php artisan make:migration cambiar_propiedades_to_<nombre de la tabla>_table -->
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

// la clase CreateUsersTable se extiende de otra clase llamada Migration
class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /*se ejecuta un metodo create de la clase esquema
        el metodo create va a recibir como parametro una cadena
        esta cadena viene a ser el nombre de la tabla al que yo quiero crear
        en este caso la tabla que se va crear con este metodo es la tabla user
        como segundo parametro de este metodo se le pasa una funcion anonima
        la cual espera como parametro un objeto de tipo Blueprint que sirve para
        crear las columnas de las tablas 
        Al llamar al metodo id del objeto table lo que va a ser es crearme una nueva
        columna con las siguientes propiedades: (Integer Unsigned Increment)
        ahora el nombre que le va a asignar a esta columna va a ser id
        Por otro lado cuando ejecute el metodo string lo que hace es crear una nueva
        columna y le agrega la propiedad (varchar con 250 por defecto) tambien se puede
        asignar el tamanio con , 100......ahora si quisieramos que fuera mas de 250
        el tipo de dato que debemos especificar es text
        LA propiedad unique se utiliza para proteger a nivel base de datos y decirle
        lo que almacenemos en el campo email debe ser unico 
        El metodo timestamp me crea una columna y crea la propiedad timestamp, es cua
        se utiliza para guardar fechas 
        La propiedad nullable es porque a la hora de realizar el registro este campo
        va a quedar vacio 
        El metodo rememberToken crea una columna de tipo varchar pero de tamanio 100 y
        le da el nommbre de rememberToken en esta columna se va almacenar un token 
        y se va almacenar cada que a la hora de iniciar sesion marque la opcion de mantener
        la sesion iniciada
        el Metodo timestamps me crea no una sino dos columnas de tipo timestamp 
        hablamos de las columnas created_at y updated_at  para que cada que introduzcamos un
        nuevo registro en la columna created se queda almacenado la fecha y la hora de creacion del registro
        y si actualizamos el registro se almacena el la culumna updated la fecha en la que se modifico
        COMO LAS migraciones son un control de versiones de nuestra BD */
        Schema::create('users', function (Blueprint $table) {
            $table->id(); //Integer Unsigned Increment
            $table->string('name'); //varchar
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps(); //created_at updated_at
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // el metodo dropIfExists elimina la tabla users
        Schema::dropIfExists('users');
    }
}
