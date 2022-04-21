<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Croquetnow - Profile page</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" media="screen" href="profile.css">
</head>
<body>
    <div class="head">
        <div class="image">
            <img src="media/img/image-profile.jpg">
            <a href="#" class="edit icon"><i class="material-icons">create</i></a>
        </div>
        <h2 id="name" class="name">Name</h2>
        <h3 id="user" class="user">Username</h3>
    </div>
    <main>
        <h2 class="subheading">Datos personales</h2>
        <ul class="info-list">
            <li>
                <h4>Nombre</h4>
                <input type="text" class="profile-name" id="profile-name" placeholder="Username" disabled></input>
                <a id="edit-name"><i class="material-icons">create</i></a>
                <button type="button" id="guardar-name" class="guardar btn">Guardar</button>
            </li>
            <li>
                <h4>Correo electrónico</h4>
                <input type="text" class="profile-email" id="profile-email" placeholder="example@email.com" disabled></input>
                <a id="edit-email"><i class="material-icons">create</i></a>
                <button type="button" id="guardar-email" class="guardar btn">Guardar</button>
            </li>
            <li>
                <h4>Número de contacto</h4>
                <input type="text" class="profile-phone" id="profile-phone" placeholder="999-999-999" disabled></input>
                <a id="edit-phone"><i class="material-icons">create</i></a>
                <button type="button" id="guardar-phone" class="guardar btn">Guardar</button>
            </li>
            <li>
                <h4>Contraseña</h4>
                <input type="password" class="profile-password" id="profile-password" placeholder="*********" disabled></input>
                <a id="edit-password" onclick="recuperar()"><i class="material-icons">create</i></a>
            </li>
        </ul>
    </main>
    <aside>
        <div class="slide-menu">
            <h3>Croquetnow</h3>
            <h4>Bienvenido/a</h4>
            <ul>
                <li>
                    <a href="home.php">
                        <i class="material-icons">home</i>
                        Inicio
                    </a>
                </li>
                <li>
                    <a href="profile.php">
                        <i class="material-icons">account_circle</i>
                        Perfil
                    </a>
                </li>
                <li>
                    <a href="mascotas.php">
                        <i class="material-icons">pets</i>
                        Mascotas
                    </a>
                </li>
                <li id="salir">
                    <a href="#">
                        <i class="material-icons">power_settings_new</i>
                        Salir
                    </a>    
                </li>
            </ul>
        </div>
    </aside>
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
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="js/main.js" type="module">
        //que traiga la información de la persona
        //que actualice la información de la persona
    </script>
    <script>
        function recuperar() {
            var div = document.getElementById("forgot-password");
            div.classList.toggle("show-forgot-password"); 
        }
    </script>
</body>
</html>