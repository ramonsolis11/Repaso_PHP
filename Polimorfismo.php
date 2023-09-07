<?php
/*
Ejercicios Polimorfismo:
4.1. Define una interfaz llamada "Forma" con un método "calcularÁrea()".
 ... Luego, crea clases que implementen esta interfaz, como "Círculo" y "Rectángulo".
 ... ¿Cómo puedes usar el polimorfismo para calcular el área de diferentes formas geométricas ...
 ... con una sola función?

4.2. Desarrolla un juego de ajedrez en PHP utilizando OOP. Cada tipo de pieza de ajedrez ... 
 ... (rey, reina, torre, etc.) puede moverse de manera diferente. Implementa un método ...
 ... "mover()" en cada clase de pieza que refleje sus reglas de movimiento únicas. ...
 ... Luego, utiliza el polimorfismo para mover las piezas en el tablero sin conocer ...
 ... previamente su tipo específico. Esto demuestra cómo el polimorfismo permite tratar ...
 ... objetos de diferentes clases de manera uniforme.


*/

//Polimorfismo: Lo vemos cuando tenemos metodos en distintas clases que se llaman igual pero realizan
// ... procesos diferentes.
//Interfaz: Es una declaracion de todos los metodos que debe implementar una clase.
//Clases Abstractas: Clases especiales que no sirven para Instanciar, solo para heredar.

interface IMover {
    public function mover();
}

class Rey implements IMover {
    public function mover()
    {
        return "Puedo moverme una casilla en cualquier direccion.\n";
    }
}

class Reina implements IMover {
    public function mover()
    {
        return "Puedo moverme cualquier cantidad de casillas en cualquier direccion.\n";
    }
}

class Torre implements IMover {
    public function mover()
    {
        return "Puedo moverme cualquier cantidad de casillas horizontal o verticalmente.\n";
    }
}

$reinaBlanca = new Reina();
$reyNegro = new Rey();

echo $reyNegro->mover();
echo $reinaBlanca->mover();

?>