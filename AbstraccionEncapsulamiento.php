<?php
// Objetos: Representan cosas.
// Atributos: Caracteristicas o propiedades que tiene un objeto.
// Metodos: funciones o acciones que puede realizar un objeto.
// Clases: funcionan como plantillas para crear nuevos objetos.

/*
Visibilidad o Acceso: Atributos y a los metodos

public: accesibles dentro y fuera de la clase.
protected: son accesibles dentro de la clase que los define y sus subclases.
private: son accesibles solo dentro de la clase que los define.

*/

class Telefono {
    //Atributos
    public $modelo;
    public $marca;
    protected $password = '0000';
    private $huellaDigital;

    //Metodos

    //1. Especial: Constructor
    public function __construct($modelo, $marca)
    {
        $this->modelo = $modelo;
        $this->marca = $marca;
    }

    //Demas metodos

    public function printTelefono()
    {
        return "Soy un telofono marca: {$this->marca} y modelo: {$this->modelo}.\n";
    }

    public function setHuella($password, $huella)
    {
        if ($password === $this->password) {
            $this->huellaDigital = $huella;
            return "Huella almacenada correctamente\n";
        }
        return "Error: Contraseña incorrecta!\n La huella no se guardo.\n";
    }
}

//Abtraccion: Generar objetos a traves de una clase(plantila): Instanciar
$pixel = new Telefono("Pixel One", "Google");
echo $pixel->modelo."\n"; //No usar acceso directo para modificar, para mostrar esta bien.
echo $pixel->printTelefono();
//$pixel->modelo = "Pixel Two";
//echo $pixel->printTelefono();

//Encapsulamiento: Definir la forma de acceso y visibilidad de metodos y atributos. (seguridad de acceso)
echo $pixel->setHuella('1234', '(~S~)');
echo $pixel->setHuella('0000', '(~S~)');
?>