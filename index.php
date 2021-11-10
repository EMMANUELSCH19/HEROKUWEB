<!DOCTYPE html>
<html lang="es-MX">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>BELLALOVERS</title>
</head>

<body>

    <div class="container">

        <div class="title">
            <h1>Hello world! Registro</h1>
        </div>

        <div class="container-form">
            <form action="registros.php" method="post">
                <div class="form">
                    <div class="columnas">
                        <label class="etiqueta" for="">Nombre:</label>
                        <div class="container-campo">
                            <input name="nombre" class="campo" type="text" placeholder="Nombre..." >
                        </div>
                    </div>

                    <div class="columnas">
                        <label class="etiqueta" for="apellido">Apellidos:</label>
                        <div class="container-campo">
                            <input name="apellido" class="campo" type="text" placeholder="Apellidos..." >
                        </div>
                    </div>

                    <div class="columnas">
                        <label class="etiqueta" for="correo">Correo Electronico:</label>
                        <div class="container-campo">
                            <input name="email" class="campo" type="email" placeholder="Email..." >
                        </div>
                    </div>

                    <div class="columnas">
                        <label class="etiqueta" for="celular">Celular:</label>
                        <div class="container-campo">
                            <input name="celular" class="campo" type="text" placeholder="Celular...">
                        </div>
                    </div>

                    <div class="columnas">
                        <label class="etiqueta" for="fecha">Fecha de Nacimiento:</label>
                        <div class="container-campo">
                            <input name="fecha" class="campo" type="date">
                        </div>
                    </div>

                    <div class="columnas">
                        <label class="etiqueta" for="sexo">Sexo:</label>
                        <div class="container-campo">
                            <select name="sexo" class="campo" name="sexo">
                                <option value="">Seleccione una opción</option>
                                <option value="mujer">Mujer</option>
                                <option value="hombre">Hombre</option>
                                <option value="otro">Elle</option>
                            </select>
                        </div>
                    </div>

                    <div class="columnas">
                        <label class="etiqueta" for="contraseña">Contraseña:</label>
                        <div class="container-campo">
                            <input name="contrasena" class="campo" type="password" placeholder="Contraseña...">
                        </div>
                    </div>

                    <div class="container-btn">
                        <input class="boton" type="submit" value="Enviar">
                    </div>
                </div>
            </form>
        </div>

    </div>


</body>

</html>