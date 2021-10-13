<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="js/code.js"></script>
    <title>Ciclo de un triangulo</title>
</head>

<body>
    <form id="form" onsubmit="generarTriangulo(); return false">
        <p>Número de Filas</p>
        <input type="text" id="filas" size="40">
        <p>
            <input type="submit" value="Generar" size="40">
        </p>
    </form>
    <div id="tri" class="tri">

    </div>
</body>

</html>