<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Entorno Servidor</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }

        h1 {
            text-align: center;
            color: #2c3e50;
        }

        ul {
            list-style-type: none;
            padding: 0;
            max-width: 600px;
            margin: 20px auto;
        }

        ul li {
            background-color: #ecf0f1;
            margin: 10px 0;
            padding: 15px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            transition: background-color 0.3s ease;
        }

        ul li:hover {
            background-color: #3498db;
        }

        ul li a {
            text-decoration: none;
            color: #2c3e50;
            font-weight: bold;
            font-size: 16px;
            display: block;
        }

        ul li:hover a {
            color: white;
        }

        @media (max-width: 600px) {
            ul {
                padding: 0 10px;
            }

            ul li {
                font-size: 14px;
            }
        }
    </style>
</head>
<body>
    <h1>Ejercicios del tema 2</h1>
    <ul>
        <li><a href="/ejercicios_tema_2/201tresfrases.php">Ejercicio 201</a>
        <li><a href="/ejercicios_tema_2/202calculos.php">Ejercicio 202</a>
        <li><a href="/ejercicios_tema_2/203datosPersonales.php">Ejercicio 203</a>
        <li><a href="/ejercicios_tema_2/204datospersonales.html">Ejercicio 204</a>
        <li><a href="/ejercicios_tema_2/205madlib.html">Ejercicio 205</a>
        <li><a href="/ejercicios_tema_2/206anyos.php">Ejercicio 206</a>
        <li><a href="/ejercicios_tema_2/207dinero.php">Ejercicio 207</a>
        <li><a href="/ejercicios_tema_2/208posnegcero.php">Ejercicio 208</a>
        <li><a href="/ejercicios_tema_2/209mayor3.php">Ejercicio 209</a>
        <li><a href="/ejercicios_tema_2/209mayor3c.php">Ejercicio 209c</a>
        <li><a href="/ejercicios_tema_2/210nombreEdad.php">Ejercicio 210</a>
        <li><a href="/ejercicios_tema_2/211reloj.php">Ejercicio 211</a>
        <li><a href="/ejercicios_tema_2/212calendario.php">Ejercicio 212</a>
        <li><a href="/ejercicios_tema_2/213ecuacion2g.php">Ejercicio 213</a>
        <li><a href="/ejercicios_tema_2/214_215.php">Ejercicios 214 y 215</a>
        <li><a href="/ejercicios_tema_2/220pares050.php">Ejercicios 220</a>
        <li><a href="/ejercicios_tema_2/220paresAB.php">Ejercicios 220AB</a>
        <li><a href="/ejercicios_tema_2/221suma110.php">Ejercicio 221</a>
        <li><a href="/ejercicios_tema_2/221sumaAB.php">Ejercicio 221ab</a>
        <li><a href="/ejercicios_tema_2/222potencia.php">Ejercicio 222</a>
        <li><a href="/ejercicios_tema_2/222potenciaWhile.php">Ejercicio 222 While</a>
        <li><a href="/ejercicios_tema_2/222potenciaDoWhile.php">Ejercicio 222 DoWhile</a>
        <li><a href="/ejercicios_tema_2/223tabladeMultiplicar.php">Ejercicio 223</a>
        <li><a href="/ejercicios_tema_2/224formulario.html">Ejercicio 224</a>
        <li><a href="/ejercicios_tema_2/225formulario.html">Ejercicio 225</a>
        <li><a href="/ejercicios_tema_2/226formulario.html">Ejercicio 226</a>
        <li><a href="/ejercicios_tema_2/227formulario.html">Ejercicio 227</a>
        <li><a href="/ejercicios_tema_2/228cuadradoMultiplicar.php">Ejercicio 228</a>
        <li><a href="/ejercicios_tema_2/230aleatorios50.php">Ejercicio 230</a>
        <li><a href="/ejercicios_tema_2/231bola8.html">Ejercicio 231</a>
        <li><a href="/ejercicios_tema_2/232mates.php">Ejercicio 232</a>
        <li><a href="/ejercicios_tema_2/233sexos.php">Ejercicio 233</a>
        <li><a href="/ejercicios_tema_2/234monedas.php">Ejercicio 234</a>
        <li><a href="/ejercicios_tema_2/235alturas.php">Ejercicio 235</a>
        <li><a href="/ejercicios_tema_2/236personas.php">Ejercicio 236</a>
        <li><a href="/ejercicios_tema_2/238leerCantidad.html">Ejercicio 238</a>
        <li><a href="/ejercicios_tema_2/239tablaDistintos.php">Ejercicio 239</a>
        <li><a href="/ejercicios_tema_2/240arrayPar.php">Ejercicio 240</a>
        <li><a href="/ejercicios_tema_2/241parametrosVariables.php">Ejercicio 241</a>
        <li><a href="/ejercicios_tema_2/242matematicas.php">Ejercicio 242</a>
        <li><a href="/ejercicios_tema_2/243arrayFunciones.php">Ejercicio 243</a>
        <li><a href="/ejercicios_tema_2/244calculadoraEuros.php">Ejercicio 244</a>
        <li><a href="/ejercicios_tema_2/245preparaTiquetCompra.php">Ejercicio 245a</a>
        <li><a href="/ejercicios_tema_2/245imprimeTiquetCompra.php">Ejercicio 245b</a>
        <li><a href="/ejercicios_tema_2/246preparaCompra.php">Ejercicio 246a</a>
        <li><a href="/ejercicios_tema_2/246listaCompra.php">Ejercicio 246b</a>
        <li><a href="/ejercicios_tema_2/247login.php">Ejercicio 247</a>
        <li><a href="/ejercicios_tema_2/250fraseImpares.php">Ejercicio 250</a>
        <li><a href="/ejercicios_tema_2/251vocales.php">Ejercicio 251</a>
        <li><a href="/ejercicios_tema_2/252analizador.php">Ejercicio 252</a>
        <li><a href="/ejercicios_tema_2/252analizadorWC.php">Ejercicio 252b</a>
        <li><a href="/ejercicios_tema_2/253cani.php">Ejercicio 253</a>
        <li><a href="/ejercicios_tema_2/254palindromo.php">Ejercicio 254</a>
        <li><a href="/ejercicios_tema_2/255codificar.php">Ejercicio 255</a>
        <li><a href="/ejercicios_tema_2/255b.php">Ejercicio 255b Esta en proceso</a>
        <li><a href="/ejercicios_tema_2/256filtrado.hmtl">Ejercicio 256</a>
        <li><a href="/ejercicios_tema_2/257investiga.php">Ejercicio 257</a>
        <li><a href="/ejercicios_tema_2/260generador.php">Ejercicio 260</a>
        <li><a href="/ejercicios_tema_2/261generadorContrasenya.php">Ejercicio 261</a>
        <li><a href="/ejercicios_tema_2/262quinielas.php">Ejercicio 262</a>















    </ul>
</body>
</html>