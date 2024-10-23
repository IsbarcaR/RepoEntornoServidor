<?php
class Persona {
    protected string $nombre;
    protected string $apellidos;
    protected int $edad;

    public function __construct(string $nombre, string $apellidos, int $edad) {
        $this->nombre = $nombre;
        $this->apellidos = $apellidos;
        $this->edad = $edad;
    }

    public function __toString(): string {
        return "Nombre: {$this->nombre}, Apellidos: {$this->apellidos}, Edad: {$this->edad}";
    }
}

class Empleado extends Persona {
    private float $sueldo;
    private array $telefonos = [];

    public function __construct(string $nombre, string $apellidos, int $edad, float $sueldo = 1000) {
        parent::__construct($nombre, $apellidos, $edad);
        $this->sueldo = $sueldo;
    }

    public function __toString(): string {
        $telefonosStr = implode(', ', $this->telefonos);
        return parent::__toString() . ", Sueldo: {$this->sueldo}, Teléfonos: {$telefonosStr}";
    }

    public function anyadirTelefono(int $telefono): void {
        $this->telefonos[] = $telefono;
    }

    public function listarTelefonos(): string {
        return implode(', ', $this->telefonos);
    }
}
?>
