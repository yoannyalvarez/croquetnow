<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Croquetnow - Pets page</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" media="screen" href="mascotas.css">
</head>
<body>
    <main>
        <div class="header">
            <h2>Listado de Mascotas</h2>
            <p>Detalle de mascotas creadas</p>
        </div>
        <div class="lista">
            <button type="button" class="crear btn" id="crear" onclick="mascota()">Crear mascota</button>
            <div class="listado-wrapper">
                <table class="table" id="table">
                    <tr class="pet-table" id="pet-table">
                        <th id="name-table">Nombre</th>
                        <th id="peso-table">Peso (kg)</th>
                        <th id="edad-table">Edad (años)</th>
                        <th id="inicio-table">Inicio</th>
                        <th id="raciones-table">Raciones</th>
                        <th id="cantidad-table">Cantidad (kg)</th>
                        <th id="activacion-table">Activación Manual</th>  
                    </tr>
                </table>

            </div>
        </div>
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
    <div class="addpet" id="addpet">
        <div class="addpet-wrapper">
            <form class="addpet-form" id="addpet-form">
                <h2>Añadir nueva mascota</h2>
                <label for="petname">Nombre:</label>
                <input type="text" placeholder="Bobby" style="opacity: 0.9;" class="petname" id="petname" required>
                <label for="petweight">Peso (kg):</label>
                <input type="text" placeholder="10 kg" style="opacity: 0.9;" class="petweight" id="petweight" required>
                <label for="petnage">Edad (años):</label>
                <input type="text" placeholder="10" style="opacity: 0.9;" class="petage" id="petage" required>
                <label for="petstart">Hora de inicio:</label>
                <input type="text" placeholder="10:00" style="opacity: 0.9;" class="petstart" id="petstart" required>
                <label for="petdelay">Intervalo de tiempo entre comidas (horas):</label>
                <input type="text" placeholder="4" style="opacity: 0.9;" class="petdelay" id="petdelay" required>
                <label for="pettimes">Número raciones:</label>
                <input type="text" placeholder="3" style="opacity: 0.9;" class="pettimes" id="pettimes" required>
                <label for="petfood">Cantidad de ración (kg):</label>
                <input type="text" placeholder="1.5" style="opacity: 0.9;" class="petfood" id="petfood" required>
                <button type="button" class="cancelar btn" id="cancelar" onclick="mascota()">Cerrar</button>
                <button type="submit" class="enviar btn" id="enviar">Enviar</button>
            </form>
        </div>
    </div>
    <script src="js/main.js" type="module">
    </script>
    <script>
        function mascota() {
            var div = document.getElementById("addpet");
            div.classList.toggle("show-addpet"); 
        }
    </script>
</body>
</html>