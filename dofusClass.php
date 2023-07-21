<?php 

//definicion de clase
class dofusClass {
//definicion de atributos 
public $nombreClase;
public $fuerza;
public $vitalidad;
public $agilidad;
public $sexo;
//atributos privados: estos pueden ser accedidos unicamente dentro de la clase donde fueron definidos, pero tambien pueden ser accedidos a traves de metodos publicos
private $color;

//definicion de constructor
//el constructor recibe los parametros que son eviados por el usuario cuando instacia nuevos objetos de la clase y los asigna a los atributos establecidos dentro de la clase
public function __construct($nombreClase, $fuerza, $vitalidad, $agilidad, $sexo, $color){
    $this->nombreClase = $nombreClase;
    $this->fuerza = $fuerza;
    $this->vitalidad = $vitalidad;
    $this->agilidad = $agilidad;
    $this->sexo = ($sexo) ? 'masculino' : 'femenino';
    $this->color = $color;
}
//definicion de destructor
public function __destruct(){

}

//definicion de metodos
//la definicion de variables dentro de cada metodo es de ambito local
//el punto es usado en php para concatenar varias variables o mensajes
public function ataque_cuerpo_cuerpo(){
    $atacar = $this->nombreClase.' ha usado ataque cuerpo a cuerpo';
    echo "$atacar";
}
public function hechizo_llamilla(){
    $atacar = $this->nombreClase.' ha usado el hechizo de llamilla';
    echo "$atacar";
}
public function hechizo_dispersion(){
    $atacar = $this->nombreClase.' ha usado el hechizo de dispersion';
    echo "$atacar";
}
//metodo publico que permite el acceso a un atributo privado
public function color(){
    $mostrarColor = 'el personaje es de color'. $this->color ;
    echo  "$mostrarColor";
}

//utilizacion de metodos dentro de otros metodos
//pueden utilizarse las siguientes tres maneras para llamar a los metodos que tiene la clase
public function ataque_y_hechizo(){
    $this->ataque_cuerpo_cuerpo();

    self::ataque_cuerpo_cuerpo();

    dofusClass::ataque_cuerpo_cuerpo();
}


}

//instanciacion de objetos de la clase 
$sacrogrito = new dofusClass('sacrogrito',100,200,0,true,'verde');
$aniripsa = new dofusClass('aniripsa',0,100,200,false,'blanco');

//uso de metodos a traves del objeto de la clase
$sacrogrito->ataque_cuerpo_cuerpo();
$aniripsa->ataque_cuerpo_cuerpo();
$aniripsa->color();
$sacrogrito->ataque_y_hechizo();