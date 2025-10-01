<?php

require_once('operaciones.php');

if(isset($_GET['primero']) && isset($_GET['segundo']) && isset($_GET['operador'])){
    $primero = (int)$_GET['primero'];
    $segundo = (int)$_GET['segundo'];
    $operador = $_GET['operador'];

    $operaciones = new Operaciones($primero, $segundo, $operador);

    $resultado = $operaciones->operaciones();    

    $mostrarResultado = '<div class="container"><h5>Resultado:</h5><div class="card m-4">
  <div class="card-body text-center"> <h3>' . $resultado['operacion'] . '=' . $resultado['resultado'] . '</h3> </div></div></div>';

    
}

?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/style.css">
    <title>Calculadora PHP OOP</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary mb-4">
        <div class="container-fluid d-flex justify-content-center p-4">
            <h1>Calculadora PHP</h1>
        </div>
    </nav>

    <div class="container d-flex justify-content-center">
        <div class="card">
            <form action="<?php $_SERVER['PHP_SELF'] ?>">
            <div class="card-body">
                <div class="container">
                <label for="input" class="form-label">Primer número:</label>
                <input type="number" class="form-control" name="primero" id="primero" required>
            </div>
            <div class="container">
                <label for="input" class="form-label">Segundo número:</label>
                <input type="number" class="form-control" name="segundo" id="segundo" required>
            </div>
            <div class="container">
                <label for="input" class="form-label">Operación (/ * - +)</label>
                <input type="text" class="form-control" name="operador" id="operador" pattern="[/*-+]" required>
            </div>
            </div>
            <div class="container d-flex justify-content-center mb-4">
                <button type="submit" class="btn btn-primary">Calcular</button>
            </div>
            </form>
            <?php if(isset($mostrarResultado)){
                echo $mostrarResultado;
            } ?>
        </div>

    </div>

    <script src="js/app.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>