<?php 

    spl_autoload_register(function($clase){

        /**
         * str_replace(a remplazar, el remplazo, el string):
         * sustituye una parte del string por la que se indique.
         */
        $ruta = "api/" . str_replace("\\", "/", $clase) . ".php";

        //si is_readable existe.
        if(is_readable($ruta)){
            require_once $ruta;
        }else {
            echo "ese archivo no existe";
        }
    });


    /**
     * copiamos primero el nombre del namespace
     * indicado en el archivo php que requerimos
     */
    models\Persona::hola();
    echo "<br>";
    controllers\personasController::hola();

?>