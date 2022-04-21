<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Croquetnow - Register page</title>
    <link rel="stylesheet" media="screen" href="registrar.css">
</head>
<body>
    <h1 class="title"><a href="index.php">Croquetnow</a></h1>
    <div class="registrarse">
        <img src="media/img/spaniel-puppy-playing-in-studio-cute-doggy-or-pet-is-sitting-isolated-on-blue-background-the-cavalier-king-charles-negative-space-to-insert-your-text-or-image-concept-of-movement-animal-rights.jpg" alt="pet-img">
        <form id="registrar-form">
            <h2>Crear cuenta</h2>
            <input type="text" placeholder="Nombre" id="registrar-nombre" required>
            <input type="text" placeholder="Email" id="registrar-email" required>
            <input type="password" placeholder="Password" id="registrar-contraseña" required>
            <p class="p1">La contraseña debe tener al menos 5 caracteres.</p>
            <button type="submit" class="registrar btn">Registrar</button>
            <p class="p2">Ya tiene una cuenta?</p>
            <button type="button" class="facebook btn" id="facebook">Facebook</button>
            <button type="button" class="google btn" id="google">Google</button>
        </form>
    </div>

    <script src="js/main.js" type="module">
        // la contraseña debe tener al menos 5 caracteres
        // ingresa un correo valido
        // storage el nombre de la persona en el perfil
        // mensaje de que ya se tiene una cuenta con ese correo electronico
        //cuando inicie sesion con facebook o google, los datos de estos providers deben ponerse en los datos de perfil de la persona
    </script>
</body>
</html>

