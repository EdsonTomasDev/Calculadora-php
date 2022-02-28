<?php

    class Calculadora{

        private $total;
        private $numero1;
        private $numero2;

        function __construct(){

            $this->total   = 0;
            $this->numero1 = 0;
            $this->numero2 = 0;
        }

        public function setNumero1($param_num1){
                $this->numero1 = $param_num1;
        }

        public function setNumero2($param_num2){
            $this->numero2 = $param_num2;
    }
    }

?>