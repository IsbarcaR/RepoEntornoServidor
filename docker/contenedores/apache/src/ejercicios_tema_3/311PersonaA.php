<?php
abstract class Persona {
    protected string $nombre;
    protected string $apellidos;
    protected int $edad;

    public function __construct(string $nombre, string $apellidos, int $edad) {
        $this->nombre = $nombre;
        $this->apellidos = $apellidos;
        $this->edad = $edad;
    }

    abstract public static function toHtml(Persona $p): string;
}

class Empleado extends Persona {
    private float $sueldo;
    private array $telefonos = [];

    public function __construct(string $nombre, string $apellidos, int $edad, float $sueldo = 1000) {
        parent::__construct($nombre, $apellidos, $edad);
        $this->sueldo = $sueldo;
    }

    public static function toHtml(Persona $p): string {
        if ($p instanceof Empleado) {
            $telefonosHtml = '<ol>';
            foreach ($p->telefonos as $telefono) {
                $telefonosHtml .= '<li>' . $telefono . '</li>';
            }
            $telefonosHtml .= '</ol>';

            return "<p>{$p->getNombreCompleto()}</p>" . $telefonosHtml;
        }
        return "<p>{$p->getNombreCompleto()}</p>";
    }
}
?>
