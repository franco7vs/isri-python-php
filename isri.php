<?php
class Persona {
    public $nombre;
    public $edad;
    public $rol;

    public function __construct($nombre, $edad, $rol) {
        $this->nombre = $nombre;
        $this->edad = $edad;
        $this->rol = $rol;
    }

    public function __toString() {
        return "Nombre: {$this->nombre}, Edad: {$this->edad}, Rol: {$this->rol}";
    }
}

$gerente = new Persona("Laura Pérez", 45, "Gerente");
$dueno = new Persona("Carlos Gómez", 50, "Dueño");
$administrativo = new Persona("Ana Martínez", 30, "Administrativo");
$docente = new Persona("Luis Hernández", 35, "Docente");
$maestranza = new Persona("José Rodríguez", 40, "Maestranza");

$personas = [$gerente, $dueno, $administrativo, $docente, $maestranza];
foreach ($personas as $persona) {
    echo $persona . "<br>";
}
?>
