<?php

class Empleado {
  
    
    private $telefonos=[];
    const SUELDO_TOPE =10000;
        // Constructor php 8 tiene las propiedades dentro
       
    public function __construct( private string $nombre,  private string $apellidos,  private int $sueldo=1000){}
	public function getNombre() {return $this->nombre;}

	public function getApellidos() {return $this->apellidos;}

	public function getSueldo() {return $this->sueldo;}


	public function setSueldo( $sueldo): void {$this->sueldo = $sueldo;}


    // Método para obtener el nombre completo
    public function getNombreCompleto(): string {
        return $this->nombre . ' ' . $this->apellidos;
    }

    // Método para determinar si debe pagar impuestos
    public function debePagarImpuestos(): bool {
        return $this->sueldo > 3333;
    }
    public function anyadirTelefono(int $tlf): void{
        $this->telefonos[] = $tlf;
    }
    public function listarTelefonos(): string {
        return implode(', ', $this->telefonos);  
    }
    public function vaciarTetelefonos(): string{
        $this->telefonos = [];
        return 'Todos los teléfonos han sido eliminados.';
    }
    public function pagaImpuestos(): string {
        return ($this->sueldo > self::SUELDO_TOPE) ? "Si" :"No";
    }

}

// Ejemplo de uso
$empleado = new Empleado("Ismael", "Barranco Carballo");
echo "Nombre completo: " . $empleado->getNombreCompleto() ."<br/>";
echo "¿Debe pagar impuestos? " . ($empleado->debePagarImpuestos() ? 'Sí' : 'No') . "<br/>";
$empleado->anyadirTelefono(666666666);
$empleado->anyadirTelefono(666666667);

echo $empleado->listarTelefonos() . "<br/>";
echo $empleado->vaciarTetelefonos()."<br/>";

echo $empleado->getSueldo()."<br/>";
$empleado->setSueldo(20030);
echo $empleado->getSueldo()."<br/>";
echo $empleado->pagaImpuestos();


