<?php
class Arma{
    public $balas = 0;
  public function __construct() {
    $this->balas = 0;
  }
  public function recargar() {
    if ($this->balas == 0) {
      $this->balas = 8;
    }
  }
  
  public function disparar() {
    if ($this->balas > 0) {
      $this->balas = 8;
    }
  }
  
  public function getBalas() {
    return $this->balas;
  }
}
class Pistola extends Arma {
  public function __construct() {
   
  }
}
class Escopeta extends Arma {
  public function __construct() {
  
  }
}
class Rifle extends Arma {
  public function __construct() {
    
  }
}
class Ametralladora extends Arma {
  public function __construct() {
    
  }
}
$pistola = new Pistola();
$escopeta = new Escopeta();
$rifle = new Rifle();
$ametralladora = new Ametralladora();

$pistolaBalas = $pistola->getBalas();
$escopetaBalas = $escopeta->getBalas();
$rifleBalas = $rifle->getBalas();
$ametralladoraBalas = $ametralladora->getBalas();

echo "<form>";
echo "<h3>Pistola</h3>";
echo "<input type='number' value='$pistolaBalas' disabled>";
echo "<button type='button' onclick='recargarPistola()'>Recargar</button>";
echo "<button type='button' onclick='dispararPistola()'>Disparar</button>";

echo "<h3>Escopeta</h3>";
echo "<input type='number' value='$escopetaBalas' disabled>";
echo "<button type='button' onclick='recargarEscopeta()'>Recargar</button>";
echo "<button type='button' onclick='dispararEscopeta()'>Disparar</button>";

echo "<h3>Rifle</h3>";
echo "<input type='number' value='$rifleBalas' disabled>";
echo "<button type='button' onclick='recargarRifle()'>Recargar</button>";
echo "<button type='button' onclick='dispararRifle()'>Disparar</button>";

echo "<h3>Ametralladora</h3>";
echo "<input type='number' value='$ametralladoraBalas' disabled>";
echo "<button type='button' onclick='recargarAmetralladora()'>Recargar</button>";
echo "<button type='button' onclick='dispararAmetralladora()'>Disparar</button>";
echo "</form>";