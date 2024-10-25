<?php
namespace Dwes\ProyectoVideoclub;
include_once "Soporte.php";
class Cliente
{
    public array $soportesAlquilados = [];
    private int $numSoportesAlquilados = 0;
    private int $maxAlquilerConcurrente=3;
    function __construct(
        public string $nombre,
        public int $numero,
      

    ) {}

    public function getNumero(): int
    {
        return $this->numero;
    }
    public function setNumero($numero): void
    {
        $this->numero = $numero;
    }
    public function getNumSoportesAlquilado()
    {
        return $this->numSoportesAlquilados;
    }
    public function muestraResumen(): void
    {
        echo "Nombre del cliente: " . $this->nombre;
        echo "<br>Cantidad de alquileres: " . count($this->soportesAlquilados);
    }
    public function alquilarSoporte(Soporte $soporte): void
    {
        if (count($this->soportesAlquilados) < $this->maxAlquilerConcurrente) {
            $this->soportesAlquilados[] = $soporte;
            $this->numSoportesAlquilados++;
        } else {
            echo "Límite de alquileres concurrentes alcanzado.";
        }
    }
    public function tieneSoporte(Soporte $s): bool
    {
        foreach ($this->soportesAlquilados as $soporte) {
            if ($soporte === $s) { 
                return true; 
            }
        }
        return false; 
    }
    
    public function alquilar(Soporte $s){
        if($this->tieneSoporte($s)){
            echo ("El cliente ya tiene alquilado el soporte:". $s->titulo ."<br>");
        }else if(count($this->soportesAlquilados)>= $this->maxAlquilerConcurrente){
            echo("Este cliente ya tiene ".$this->maxAlquilerConcurrente ." elementos alquilados. No puede alquilar más en este videoclub hasta que no devuelva algo");
        }else{
            $this->soportesAlquilados[]=$s;
            $this->numSoportesAlquilados++;
            echo "Soporte alquilado exitosamente: " . $s->titulo . ".<br>";
            $s->muestraResumen();
        }      
        return $this;
    }
    public function devolver(int $numSoporte): bool {
        if ($numSoporte < 0 || $numSoporte >= count($this->soportesAlquilados)) {
            echo "Número de soporte inválido para devolver.<br>";
            return false; // Número de soporte no válido
        }

        // Comprobar si el soporte está alquilado
        $soporte = $this->soportesAlquilados[$numSoporte] ?? null;
        if ($soporte === null) {
            echo "No se puede devolver un soporte que no está alquilado.<br>";
            return false; // El soporte no está alquilado
        }

        // Eliminar el soporte del array de alquileres
        unset($this->soportesAlquilados[$numSoporte]);
        $this->soportesAlquilados = array_values($this->soportesAlquilados); // Reindexar el array
        $this->numSoportesAlquilados--; // Decrementar el contador
        echo "Soporte devuelto exitosamente: " . $soporte->titulo . ".<br>";
        return true; // Devolución exitosa
    }

    // Método para listar los alquileres
    public function listaAlquileres(): void {
        echo "El cliente " . $this->nombre . " tiene " . count($this->soportesAlquilados) . " alquiler(es):<br>";
        if (count($this->soportesAlquilados) === 0) {
            echo "No hay alquileres activos.<br>";
            return;
        }

        foreach ($this->soportesAlquilados as $soporte) {
            echo "- " . $soporte->titulo . "<br>"; // Muestra el título de cada soporte alquilado
        }
    }









}
?>