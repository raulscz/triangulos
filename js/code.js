function generarTriangulo() {
    let maxLenght = document.getElementById('filas').value;
    //alert(maxLenght);
    let resultado = ' ';
    let piramide = ' ';
    for (var i = 1; i <= maxLenght; i++) {
        piramide += '*';
        resultado += "<p>" + piramide + "<p>";
    }
    document.getElementById("tri").innerHTML = resultado;

    //Otra forma de hacerlo
    /*for (var i = 1; i <= maxLenght; i++) {
        for (var j = 1; j <= i; j++) {
            document.write("*");
        }
        document.write("<br>");

    }*/
}