<?php
include_once "Soporte.php"; // Asegúrate de que este archivo existe
include_once "Juego.php"; // Asegúrate de que este archivo existe
include_once "Dvd.php"; // Asegúrate de que este archivo existe
include_once "CintaVideo.php"; // Asegúrate de que este archivo existe
include_once "Cliente.php";
class Videoclub {
    private array $productos = []; // Array de Soporte
    private array $socios = []; // Array de Cliente
    private string $direccion;

    public function __construct(string $direccion) {
        $this->direccion = $direccion;
    }

    // Método privado para incluir un producto
    private function incluirProducto(Soporte $soporte): void {
        $this->productos[] = $soporte; // Agrega el soporte al array de productos
    }

    // Método para incluir un juego
    public function incluirJuego(string $titulo, float $precio, string $consola, int $minNumJugadores, int $maxNumJugadores): void {
        $juego = new Juego($titulo, "J" . (count($this->productos) + 1), $precio, $consola, $minNumJugadores, $maxNumJugadores);
        $this->incluirProducto($juego);
    }

    // Método para incluir un DVD
    public function incluirDvd(string $titulo, float $precio, string $idioma, string $formatoPantalla): void {
        $dvd = new Dvd($titulo, "D" . (count($this->productos) + 1), $precio, $idioma, $formatoPantalla);
        $this->incluirProducto($dvd);
    }

    // Método para incluir una cinta de video
    public function incluirCintaVideo(string $titulo, float $precio, int $duracion): void {
        $cinta = new CintaVideo($titulo, "C" . (count($this->productos) + 1), $precio, $duracion);
        $this->incluirProducto($cinta);
    }

    // Método privado para incluir un cliente
    private function incluirCliente(Cliente $cliente): void {
        $this->socios[] = $cliente; // Agrega el cliente al array de socios
    }

    // Método para incluir un socio
    public function incluirSocio(string $nombre, int $maxAlquilerConcurrente = 3): void {
        // Asignamos el número de socio directamente como un entero
        $numeroSocio = count($this->socios) + 1; // Obtiene el siguiente número entero disponible
        $socio = new Cliente($nombre, $numeroSocio, $maxAlquilerConcurrente); // No se usa "S"
        $this->incluirCliente($socio);
    }

    // Método para alquilar un producto a un socio
    public function alquilarSocioProducto(int $socioIndex, int $productoIndex): bool {
        if (isset($this->socios[$socioIndex]) && isset($this->productos[$productoIndex])) {
            $socio = $this->socios[$socioIndex];
            $soporte = $this->productos[$productoIndex];

            return $socio->alquilar($soporte); // Llama al método de alquiler del socio
        }
        return false; // Producto o socio no encontrado
    }

    // Método para listar productos
    public function listarProductos(): void {
        echo "<h2>Productos disponibles:</h2>";
        foreach ($this->productos as $producto) {
            $producto->muestraResumen();
            echo "<br>";
        }
    }

    // Método para listar socios
    public function listarSocios(): void {
        foreach ($this->socios as $socio) {
            echo "Socio: " . $socio->nombre . "<br>";
            echo "Alquileres: " . count($socio->soportesAlquilados) . "<br>"; // Accediendo directamente
            // También puedes listar los soportes alquilados si lo deseas
        }
    }
}

?>
