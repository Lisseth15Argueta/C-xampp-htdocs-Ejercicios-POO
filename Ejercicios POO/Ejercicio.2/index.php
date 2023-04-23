<?php
class EvaluadorTemperatura {
    public $temperatura;

    public function __construct($temperatura) {
        $this->temperatura = $temperatura;
    }

    public function getTemperatura() {
        return $this->temperatura;
    }

    public function setTemperatura($temperatura) {
        $this->temperatura = $temperatura;
    }

    public function evaluar() {
        if ($this->temperatura <= 0) {
            echo "<p style='color: blue;'>Temperatura máximamente FRIA</p>";
        } else if ($this->temperatura <= 30) {
            echo "<p style='color: yellow;'>Temperatura estable</p>";
        } else {
            echo "<p style='color: red;'>Temperatura máximamente CALIENTE</p>";
        }
    }
}
$evaluador = new EvaluadorTemperatura(15);
echo "La temperatura es de " . $evaluador->getTemperatura() . " grados temperatura.<br>";
$evaluador->evaluar();

$evaluador->setTemperatura(-5);
echo "La temperatura es de " . $evaluador->getTemperatura() . " grados temperatura.<br>";
$evaluador->evaluar();

$evaluador->setTemperatura(35);
echo "La temperatura es de " . $evaluador->getTemperatura() . " grados temperatura.<br>";
$evaluador->evaluar();
?>