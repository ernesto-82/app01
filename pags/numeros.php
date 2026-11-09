<!DOCTYPE html>
<html lang="es" data-bs-theme="dark">
<head>
    <meta charset="UTF-8">
    <title>4. Números Ascendentes y Descendentes</title>
    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
</head>
<body class="bg-dark">
    <nav class="navbar navbar-expand-lg bg-black border-bottom border-secondary mb-4">
        <div class="container">
            <a class="navbar-brand text-white fw-bold" href="../index.html">Ejercicios IAW</a>
            <div class="navbar-nav">
                <a class="nav-link text-light" href="calculadora_basica.php">1. Calculadora</a>
                <a class="nav-link text-light" href="calculadora_cientifica.php">2. Científica</a>
                <a class="nav-link text-light" href="mayoria_edad.php">3. Edad</a>
                <a class="nav-link text-light" href="numeros.php">4. Números</a>
            </div>
        </div>
    </nav>
    <div class="container mt-4">
        <h1>4. Números Ascendentes y Descendentes</h1>
        
        <div id="resultado" class="alert alert-info mt-3" style="display: none;"></div>

        <form id="formulario">
            <div class="mb-3" style="max-width: 300px;">
                <label>Introduce un número límite:</label>
                <input type="number" id="limite" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">Mostrar</button>
        </form>
    </div>

    <script>
        document.getElementById("formulario").onsubmit = function(evento) 
            {
            evento.preventDefault();
            var limite = document.getElementById("limite").value;

            var peticion = new XMLHttpRequest();
            peticion.open("POST", "../PHP/ej4_numeros.php", true);
            peticion.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            
            peticion.onload = function() 
                {
                var caja = document.getElementById("resultado");
                caja.style.display = "block";
                caja.innerHTML = peticion.responseText;
                caja.className = "alert alert-success mt-3";
                };
            peticion.send("limite=" + limite);
            };
    </script>
</body>
</html>