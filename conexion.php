<?php
    error_reporting(E_ALL);
    ini_set('display_errors', '1');
    
    try{
        $base=new PDO('mysql:host=localhost;dbname=curso_sql','root','');
        $base->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        $base->exec("SET CHARACTER SET UTF8");
    }
    catch(Exception $e){
        echo "Error: " . $e->getMessage() . "<br>";
        echo "Línea del error: " . $e->getLine();
        die(); // Si deseas detener la ejecución aquí
    }

?>