<?php 
//definicion clase padre
class Minilubo {
    public $pdv;
    public $pa;
    public $pm;
    protected $level = 90;


    public function __construct($pdv, $pa, $pm){
        $this->pdv = $pdv;
        $this->pa = $pa;
        $this->pm = $pm;
        
    }

    //metodo publico para acceder a propiedad protegida
    public function info_milubo(){
        return  print "$this->level";
    }

    public function Rabia(){
        
    }

    public function Olfaccion(){
        $this->pa = $this->pa + 2;
        return print "$this->pa";
    }

    public function Destripacion(){

    }
}
//definicion clase hija que extiende de la clase padre
//Al extender de la clase padre puede hacer uso de sus metodos y propiedades  definiendo dentro de su constructor el constructor de la clase padre mediante (parent::)
class MiniluboAlbino extends Minilubo {
    protected $level = 98;

    public function __construct($pdv, $pa, $pm){
        parent::__construct($pdv, $pa, $pm);
    }
}
//definicion clase final hija que extiende de la clase padre
//las clases finales no pueden heredarse a otras clases
final class MediuLubo extends Minilubo{
    public $level = 100;
    public $reconstitucion = true;

    public function __construct ($pdv, $pa, $pm){
        parent::__construct($pdv,$pa,$pm);
    }

//Redifinicion de metodo de la clase padre (poliformismo)
    public function info_milubo(){
        $hechizo= ($this->reconstitucion) ? 'tiene reconstitucion' : 'no tiene reconstitucion';
        return  print "$this->level ". 'y' . " $hechizo";

    }


}
//instanciacion de clase padre
$minilubo = new Minilubo (170,7,4);
$minilubo->Olfaccion();

//instanciacion de clase hija y uso de metodos de la clase padre
$miniLuboAlbino = new MiniluboAlbino(1500,9,5);
$miniLuboAlbino->olfaccion();

$mediulubo = new MediuLubo(2000,12,6);
$mediulubo->Olfaccion();

//acceso a una propiedad publica fuera de la clase (no hay problema)
print "$miniLuboAlbino->pdv";

//intento de acceso a una propiedad protegida directamente desde fuera de una clase, lo cual va a generar un error (generara error)
# print "$miniLuboAlbino->level";

//Acceso a una propiedad protegia a traves de un metodo publico (no hay problema)
$miniLuboAlbino->info_milubo();
$minilubo->info_milubo();
$mediulubo->info_milubo();

