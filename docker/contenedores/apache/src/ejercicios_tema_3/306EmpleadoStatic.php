<?php
class Empleado {
    private array $telefonos = [];
    private static float $sueldoTope = 3333;

    public function __construct(
        private string $nombre,
        private string $apellidos,
        private float $sueldo = 1000
    ) {}

    public function getNombreCompleto(): string {
        return $this->nombre . ' ' . $this->apellidos;
    }

    public function getTelefonos(): array {
        return $this->telefonos;
    }

    public function debePagarImpuestos(): bool {
        return $this->sueldo > self::$sueldoTope;
    }

    public function anyadirTelefono(int $telefono): void {
        $this->telefonos[] = $telefono;
    }

    public function vaciarTelefonos(): void {
        $this->telefonos = [];
    }

    public static function toHtml(Empleado $emp): string {
        $telefonosHtml = '<ol>';
        foreach ($emp->getTelefonos() as $telefono) {
            $telefonosHtml .= '<li>' . $telefono . '</li>';
        }
        $telefonosHtml .= '</ol>';

        return "<p>{$emp->getNombreCompleto()}</p>" . $telefonosHtml;
    }
}
?>
