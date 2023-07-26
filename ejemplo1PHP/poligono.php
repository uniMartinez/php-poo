<?php
//definicion de clase abstracta 
abstract class poligono {
    protected  $lados;

    //definicion de metodos abstractos
    //se definen metodos abstractos porque a todos los poligonos se les puede calcular perimetro y area, pero dicho calculo es diferente para cada poligono es por ello que no se puede definir un metodo con cuerpo en la clase padre el cual funcione para todos los poligonos
    abstract protected function perimetro();

    abstract protected function area();

    //Metodo el cual si puede tener un cuerpo ya que su funcion (mostrar N.de lados de un poligono) es igual para todos los poligonos, es por ellos que se define en la clase padre con el fin de evitar volver a escribirlo en cada uno de los distintos poligonos
    public function lados(){

        return 'Un ' . get_called_class() . ' tiene ' . $this->lados. ' lados';
    }

}