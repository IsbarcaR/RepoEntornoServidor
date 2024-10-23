<?php
class Persona {
    protected string $nombre;
    protected string $apellidos;

    public function __construct(string $nombre, string $apellidos) {
        $this->nombre = $nombre;
        $this->apellidos = $apellidos;
    }

    public static function toHtml(Persona $p): string {
        return "<p>{$p->getNombreCompleto()}</p>";
    }

    public function getNombreCompleto(): string {
        return $this->nombre . ' ' . $this->apellidos;
    }
}

class Empleado extends Persona {
    private float $sueldo;
    private array $telefonos = [];

    public function __construct(string $nombre, string $apellidos, float $sueldo = 1000) {
        parent::__construct($nombre, $apellidos);
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
        return parent::toHtml($p);
    }

    public function anyadirTelefono(int $telefono): void {
        $this->telefonos[] = $telefono;
    }

    public function listarTelefonos(): string {
        return implode(', ', $this->telefonos);
    }
}
?>


