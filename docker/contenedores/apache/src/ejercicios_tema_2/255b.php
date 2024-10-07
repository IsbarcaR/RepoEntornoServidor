<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Codificador César</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            padding: 0;
        }
        textarea, input {
            display: block;
            margin: 10px 0;
            width: 300px;
            padding: 10px;
        }
        button {
            padding: 10px 20px;
            margin-right: 10px;
        }
    </style>
</head>
<body>

    <h1>Codificador César</h1>

    <!-- Área de texto para la entrada -->
    <label for="inputText">Texto para codificar/decodificar:</label>
    <textarea id="inputText" rows="5" placeholder="Escribe aquí el texto"></textarea>

    <!-- Input para especificar el desplazamiento -->
    <label for="shift">Desplazamiento:</label>
    <input type="number" id="shift" placeholder="Introduce el desplazamiento" min="1" value="3">

    <!-- Botones para codificar y decodificar -->
    <button id="encodeButton">Codificar</button>
    <button id="decodeButton">Decodificar</button>

    <!-- Área de texto para la salida -->
    <label for="outputText">Resultado:</label>
    <textarea id="outputText" rows="5" readonly></textarea>

    <!-- Script para manejar los botones y el proceso de codificación -->
    <script>
        function codificar(frase, desplazamiento, abc) {
    let frasecod = "";
    abc = abc.toLowerCase();
    let longitudAbc = abc.length;

    for (let i = 0; i < frase.length; i++) {
        let caracter = frase[i].toLowerCase();
        if (/[a-z]/.test(caracter)) {
            let posicion = abc.indexOf(caracter);
            let nuevaPosicion = (posicion + desplazamiento) % longitudAbc;
            
            // Asegurarse de que la nueva posición sea positiva
            if (nuevaPosicion < 0) {
                nuevaPosicion += longitudAbc;
            }
            
            let nuevoCaracter = abc[nuevaPosicion];
            if (frase[i] === frase[i].toUpperCase()) {
                nuevoCaracter = nuevoCaracter.toUpperCase();
            }
            frasecod += nuevoCaracter;
        } else {
            frasecod += frase[i];
        }
    }
    return frasecod;
}

function decodificar(frase, desplazamiento, abc) {
    // Se usa -desplazamiento para invertir el cifrado
    return codificar(frase, -desplazamiento, abc);
}


        // Event listeners para los botones
        document.getElementById('encodeButton').addEventListener('click', function() {
            let texto = document.getElementById('inputText').value;
            let desplazamiento = parseInt(document.getElementById('shift').value);
            let abc = "abcdefghijklmnopqrstuvwxyz";
            let resultado = codificar(texto, desplazamiento, abc);
            document.getElementById('outputText').value = resultado;
        });

        document.getElementById('decodeButton').addEventListener('click', function() {
            let texto = document.getElementById('inputText').value;
            let desplazamiento = parseInt(document.getElementById('shift').value);
            let abc = "abcdefghijklmnopqrstuvwxyz";
            let resultado = decodificar(texto, desplazamiento, abc);
            document.getElementById('outputText').value = resultado;
        });
    </script>

</body>
</html>
