<?php
    class Operacion{ //creación de la clase
        public $cantidadUno=0; //propiedad de la clase
        public $cantidadDos=0; //propiedad de la clase
        public $resultado=0; //propiedad de la clase

        function __construct($intCant1, $intCant2){ //Metodo constructor de la clase
            $this->cantidadUno=$intCant1;
            $this->cantidadDos=$intCant2;
        }

        public function getSuma(){ //Metodo suma
            $this->resultado=$this->cantidadUno+$this->cantidadDos;
            return $this->resultado;
        }

        public function getResta(){ //Metodo resta
            $this->resultado=$this->cantidadUno-$this->cantidadDos;
            return $this->resultado;
        }

        public function getMultiplicacion(){ //Metodo multiplicacion
            $this->resultado=$this->cantidadUno*$this->cantidadDos;
            return $this->resultado;
        }

        public function getDivision(){ //Metodo division
            $this->resultado=$this->cantidadUno/$this->cantidadDos;
            return $this->resultado;
        }
    }
?>