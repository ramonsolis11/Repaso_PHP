<?php

abstract class Transformarse {
    //metodos abstractos, solo se definen
    abstract protected function transformar();

    //metodos comunes a todos los que hereden
    public function mostrarTransformar() {
        return "Realizar transformacion: " . $this->transformar() . "\n";
    }

}

// Se transforman en autobots
class Autobot extends Transformarse {
    protected function transformar()
    {
        return "Me transformo en auto.";
    }


}

// Se transforman en bestias o animales
class Beastbot extends Transformarse {
    protected function transformar()
    {
        return "Me transformo en bestia.";
    }
}

$bumblebee = new Autobot;
$gorilla = new Beastbot;

echo $bumblebee->mostrarTransformar();
//echo $gorilla->mostrarTransformar();


?>