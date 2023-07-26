<?php

class hexagono extends poligono {
    private $lado;
    private $apotema;
  

    public function __construct($l, $a){
        $this->lados = 6;
       $this->lado = $l;
       $this->apotema = $a;
    }

    public function perimetro(){

        return $this->lados * $this->lado ;
    }

    public function area(){
        //uso de self:: para llamar un metodo que esta dentro de la misma clase
        return (self::perimetro() * $this->apotema) /2;
    }

  

}