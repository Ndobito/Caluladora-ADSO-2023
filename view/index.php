<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style-login.css">
    <link rel="stylesheet" href="assets/css/notify.css">
    <title>Calculadora</title>
</head>

<body>
    <h1>Iniciar Sesion</h1>

    <form method="post" action="?x=index&y=fnValidarUsuario">

        <div>
            <label for="">Usuario:</label>
        </div>
        <div>
            <input type="text" name="nick" id="" >
        </div>
        <div>
            <label for="">Contraseña:</label>
        </div>
        <div>
            <input type="text" name="pass" >
        </div>

        <div class="button-submit">
            <button type="submit">Iniciar Sesion</button>
        </div>

    </form>
</body>

</html>