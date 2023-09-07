<?php

use Telefono as GlobalTelefono;

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

//Herencia: Crear clases a partir de otra con todos sus atributos y metodos.

class TelefonoPro extends Telefono {
    //Atributos adicionales de la nueva clase hijo(TelefonoPro)
    public $camaraPro;
    
    //Constructor
    public function __construct($camara, $modelo, $marca)
    {
        parent::__construct($modelo, $marca);
        $this->camaraPro = $camara;
    }

    public function printTelefonoPro()
    {
        return parent::printTelefono(). "Ademas tego una camara: {$this->camaraPro}.\n";
    }
}

$pixelPro = new TelefonoPro("HDR, 50Mpx camara pro", "Pixel Pro 2023", "Google");
echo $pixelPro->printTelefonoPro();
echo $pixelPro->modelo . "\n";

?>