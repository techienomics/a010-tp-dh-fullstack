<?php
  class Producto {
    private $Precio;
    private $Tamano;
    private $Tipo;
    private $EstaPreparado;

    public function __construct($Tipo, $Tamano="M") {
      $this->Tamano=$Tamano;
      $this->Tipo=$Tipo;
      $this->EstaPreparado=false;
      $this->RecalcularPrecio();
    }

    public function setEstaPreparado() {
      $this->EstaPreparado = true;
    }

    private function RecalcularPrecio() {
      if ($this->Tamano=="C") {
          $this->Precio=80;
      } else {
        if ($this->Tamano=="M") {
          $this->Precio=100;
        } else {
          $this->Precio=120;
        }
      }
    }

    public function getTipo() {
      return $this->Tipo;
    }

    public function setTamano($NuevoTamano) {
        $this->Tamano=$NuevoTamano;
        $this->RecalcularPrecio();
        $this->EstaPreparado = false;
    }

  }

?>

<?php
  #require_once("Producto.php"); se invoca la clase

  $MiHamburguesa=new Producto("BigMac");
  $OtraHamburguesa=new Producto("Cuarto de Libra");

  echo "El nombre es {$MiHamburguesa->getTipo()}";


  //var_dump($MiHamburguesa);

  $MiHamburguesa->setEstaPreparado();

  //var_dump($MiHamburguesa);

  $MiHamburguesa->setTamano("G");

  //var_dump($MiHamburguesa);

?>

