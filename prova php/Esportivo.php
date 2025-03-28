<?php


// Classe Esportivo herdando de Carro
class Esportivo extends Carro {
    public function acelerar() {
        echo "Acelerando rápido\n";
    }
}



// Instâncias
$c1 = new Esportivo("Ferrari", "F8");
$c2 = new Popular("Fiat", "Uno");

$c1->acelerar(); // "Acelerando rápido"
$c2->acelerar(); // "Acelerando devagar" 

?>