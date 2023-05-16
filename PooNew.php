<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
// FINAL - 
// ABSTRACT -
// STATIC -

abstract class Barcos{
    protected $eslora;
    public $capacidad;
    private $color;
    public static $tipo = "menor";

    public function __construct($eslora, $capacidad, $color){
        $this->eslora = $eslora;
        $this->capacidad = $capacidad;
        $this->color = $color;
    }

    final public static function getTipo(){
        echo "El barco es de tipo " . self::$tipo;
    }

    public function getColor() : void{
        echo "la embarcacion es de color  $this->color";
    }

    public function getInfo() : void{
        echo "El barco tiene $this->eslora eslora, y tiene capacidad de:  $this->capacidad";
    }

    public function getEslora(): void{
        echo "El barco tiene $this->eslora de eslora";
    }
}

class Lancha extends Barcos{
    public $defensas;

    public function __construct($defensas = 0, $eslora = 0, $capacidad = 0, $color= 0)
    {
        $this->defensas = $defensas;
        parent::__construct($eslora, $capacidad, $color);
    }

    public function getInfo() : void{
        echo "La lancha tiene $this->eslora de eslora, capacidad de: $this->capacidad y $this->defensas defensas, y el tipo es: " . parent::$tipo;
    }
}

class Yate extends Barcos{
    public function getInfo() : void{
        echo "El yate tiene $this->eslora de eslora, capacidad de: $this->capacidad";
    }
}



$Lancha = new Lancha(6,50,6,"gris");
// $Lancha->eslora = 50;
$Lancha->getInfo();
echo "<br>";
$Lancha->getColor();
echo "<br>";
echo "<hr>";
$Yate = new Yate(60,10, "blanco");
$Yate->getInfo();
echo "<br>";
$Yate->getColor();

?>
