<?php

class Empleado {
    // Propiedades
    private $nombre;
    private $apellidos;
    private $sueldo;

    // Constructor
    public function getNombre() {return $this->nombre;}

	public function getApellidos() {return $this->apellidos;}

	public function getSueldo() {return $this->sueldo;}

	public function setNombre( $nombre): void {$this->nombre = $nombre;}

	public function setApellidos( $apellidos): void {$this->apellidos = $apellidos;}

	public function setSueldo( $sueldo): void {$this->sueldo = $sueldo;}

	public function __construct( $nombre,  $apellidos,  $sueldo){$this->nombre = $nombre;$this->apellidos = $apellidos;$this->sueldo = $sueldo;}
	
    // Método para obtener el nombre completo
    public function getNombreCompleto(): string {
        return $this->nombre . ' ' . $this->apellidos;
    }

    // Método para determinar si debe pagar impuestos
    public function debePagarImpuestos(): bool {
        return $this->sueldo > 3333;
    }
}

// Ejemplo de uso
$empleado = new Empleado("Ismael", "Barranco Carballo", 3500);
echo "Nombre completo: " . $empleado->getNombreCompleto() . "\n";
echo "¿Debe pagar impuestos? " . ($empleado->debePagarImpuestos() ? 'Sí' : 'No') . "\n";
