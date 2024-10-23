<?php
class Empresa {
    private string $nombre;
    private string $direccion;
    private array $trabajadores = [];

    public function __construct(string $nombre, string $direccion) {
        $this->nombre = $nombre;
        $this->direccion = $direccion;
    }

    public function getNombre(): string {
        return $this->nombre;
    }

    public function setNombre(string $nombre): void {
        $this->nombre = $nombre;
    }

    public function getDireccion(): string {
        return $this->direccion;
    }

    public function setDireccion(string $direccion): void {
        $this->direccion = $direccion;
    }

    public function anyadirTrabajador(Trabajador $t): void {
        $this->trabajadores[] = $t;
    }

    public function listarTrabajadoresHtml(): string {
        $html = "<h2>Trabajadores</h2><ul>";
        foreach ($this->trabajadores as $trabajador) {
            $html .= '<li>' . $trabajador::toHtml($trabajador) . '</li>';
        }
        $html .= '</ul>';
        return $html;
    }

    public function getCosteNominas(): float {
        $coste = 0;
        foreach ($this->trabajadores as $trabajador) {
            $coste += $trabajador->calcularSueldo();
        }
        return $coste;
    }
}
?>
