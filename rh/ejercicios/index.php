<?php
    require_once("ClassOperacion.php");

    $operacion1=new Operacion(10,2); //Instanciando la clase Operacion

    $resultadoSuma=$operacion1->getSuma(); //llamando al metodo suma
    $resultadoResta=$operacion1->getResta(); //llamando al metodo resta
    $resultadoMultiplicacion=$operacion1->getMultiplicacion(); //llamando al metodo multiplicacion
    $resultadoDivision=$operacion1->getDivision(); //llamando al metodo division

    echo "Total Suma:".$resultadoSuma."<br>";
    echo "Total Resta:".$resultadoResta."<br>";
    echo "Total Multiplicacion:".$resultadoMultiplicacion."<br>";
    echo "Total División:".$resultadoDivision."<br>";
?>