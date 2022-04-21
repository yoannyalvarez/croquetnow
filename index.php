<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Croquetnow - Sign in page</title>
    <link rel="stylesheet" media="screen" href="inicio.css">
</head>
<body>
    <h1 class="title" id="title" onclick="welcome()">Croquetnow</h1>
    <div id="box" class="iniciar-sesion">
        <img src="media/img/beautiful-dog-raising-up-his-head.jpg" alt="pet-img">
        <form id="iniciar-sesion-form">
            <h2>Iniciar Sesión</h2>
            <input type="text" placeholder="Email" style="opacity: 0.9;" id="email" required>
            <input type="password" placeholder="Password" style="opacity: 0.9;" id="contraseña" required>
            <button type="submit" class="ingresar btn" id="ingresar" >Iniciar Sesión</button>
            <button type="button" class="registrarse btn" id="registrar" onclick="location='registrar.php'">Registrarse</button>
            <p class="p1">Olvidó su <a href="#" id="recuperarContraseña" onclick="recuperar()">Contraseña</a>?</p> 
            <p class="p2">O iniciar sesión con:</p>
            <button type="button" class="facebook btn" id="facebook">Facebook</button>
            <button type="button" class="google btn" id="google">Google</button>
        </form>
    </div>
    <div class="forgot-password" id="forgot-password">
        <div class="forgot-wrapper">
            <form class="forgot-form" id="forgot-form">
                <h2>¿Olvidaste tu contraseña?</h2>
                <p>Porfavor ingresa tu correo electrónico y enviaremos un email con información para recuperar tu contraseña.</p>
                <input type="text" placeholder="Ingresar correo electrónico" style="opacity: 0.9;" class="forgot-input" id="recuperaEmail" required>
                <button type="button" class="cancelar btn" id="cancelar" onclick="recuperar()">Cancelar</button>
                <button type="submit" class="recuperar btn" id="enviarEmail">Enviar</button>
            </form>
        </div>
    </div>


    <script src="js/main.js"type="module">
    </script>

    <script>
        function welcome() {
            var title = document.getElementById("title");
            var body = document.getElementById("box");
            title.classList.toggle("welcome");
            body.classList.toggle("appear");
        }
        
        function recuperar() {
            var div = document.getElementById("forgot-password");
            div.classList.toggle("show-forgot-password"); 
        }
    </script>
</body>
</html>