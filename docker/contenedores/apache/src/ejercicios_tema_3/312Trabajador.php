<?php
abstract class Trabajador {
    protected array $telefonos = [];

    public function anyadirTelefono(int $telefono): void {
        $this->telefonos[] = $telefono;
    }

    public function listarTelefonos(): string {
        return implode(', ', $this->telefonos);
    }

    abstract public function calcularSueldo(): float;
}

class Empleado extends Trabajador {
    private float $horasTrabajadas;
    private float $pagoPorHora;

    public function __construct(float $horasTrabajadas, float $pagoPorHora) {
        $this->horasTrabajadas = $horasTrabajadas;
        $this->pagoPorHora = $pagoPorHora;
    }

    public function calcularSueldo(): float {
        return $this->horasTrabajadas * $this->pagoPorHora;
    }
}

class Gerente extends Trabajador {
    private float $salario;
    private int $edad;

    public function __construct(float $salario, int $edad) {
        $this->salario = $salario;
        $this->edad = $edad;
    }

    public function calcularSueldo(): float {
        return $this->salario + $this->salario * $this->edad / 100;
    }
}
?>
