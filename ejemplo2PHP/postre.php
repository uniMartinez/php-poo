<?php

require 'ingredientes.php';
require 'receta.php';

#CARACTERISTICAS DE LAS INTERFACES 

//No pueden tener el mismo nombre
//No pueden instanciarse porque no tienen referencias asociadas a objetos 
//No pueden definir propiedades
//Los metodos de una interfaz deben ser publicos, solo estar definidios y sin cuerpo
//Las clases que implementan una interfaz deben utilizar todos los metodos de la misma
//Diferentes interfaces no pueden tener nombre de metodos identicos si seran implementadas por una misma clase 

//definicion de clase que implementa las interfaces de ingredientes y receta
class postre implements ingredientes, receta {

    private $ingredientes;
    private $receta;

    public function establecer_ingredientes($lista){
        //la funcion explode dividie un string en varios string
        $this->ingredientes = explode(',', $lista);    
      
    }


    public function obtener_ingredientes(){  
        //la funcion count cuenta todos los elementos de un array u objeto      
        $num_ingredientes = count($this->ingredientes);
        //inicializacion  de una cadena vacia
        $arreglo = '';        
        
        for($i=0; $i < $num_ingredientes; $i++){
            //concatenacion de los diferentes string a la cadena vacia
            $arreglo .= $this->ingredientes[$i];
        }

        return print ($arreglo);

    }

    public function establecer_receta($pasos){

    }

    public function obtener_receta(){

    }
}

//instanciacion de objeto
$hot_cakes= new postre;

//uso de metodos a travès del objeto
$hot_cakes->establecer_ingredientes('
1 taza de harina para hot cakes,
1 huevo,
1/3 taza de leche,
10 gotas de vainilla,
3 cucharadas de mantequilla');

$hot_cakes->obtener_ingredientes();