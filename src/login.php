<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Inicio de Sesión</title>
    <link rel="icon" type="image/png" href="../img/logo.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Incluye tu propio archivo CSS -->
    <link rel="stylesheet" href="../css/login.css">
</head>

<body>
    <header id="navbar-container">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
            <div class="container">
                <a class="navbar-brand" href="../index.php" meth>Podología Marcela</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="../index.php">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="User/appointment.php">Reserva de Horas</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="login.php">Inicio de sesión</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="User/administrar_cita">Horas Reservadas</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <main class="d-flex flex-column align-items-center mt-5">
        <form class="form-signin" action="validate.php" method="POST">
            <img class="logInLogo" src="../img/logo.png" alt="290" width="100" height="100">
            <h1 class="h3 mb-4 fw-normal">Iniciar sesión</h1>

            <div class="form-floating">
                <label for="floatingInput">Correo electrónico</label>
                <input type="email" name="correo" class="form-control" id="correo" placeholder="name@example.com">

            </div>
            <div class="form-floating">
                <label for="floatingPassword">Contraseña</label>
                <input type="password" name="contrasegna" class="form-control" id="contrasegna" placeholder="Password">

            </div>
            <button id="mostrarAlerta" class="w-100 btn btn-lg btn-primary" type="submit">Iniciar sesión</button>
            <!-- <script>
                document.getElementById("mostrarAlerta").addEventListener("click", function() {
                    // Ejecuta el código PHP y muestra el mensaje de alerta
                    /*php
                    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                        echo 'alert("Reingrese los datos");';
                    }*/
                    
                });
            </script> -->
            <p class="mt-3">¿No tienes una cuenta? <a href="register.php">Regístrate</a></p>
        </form>
    </main>

    <footer class="footer">
        <div class="copy">2023</div>
        <div class="bottom-links">
            <div class="links">
                <span>Contacto</span>
                <a href="https://web.whatsapp.com/">+56 9 8153 9650</a>
                <a href="#">Instagram</a>
            </div>
            <div class="links">
                <span>Social Links</span>
                <a href="https://www.facebook.com/login/?locale=es_LA"><i class="fab fa-facebook"></i></a>
                <a href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a>
            </div>
        </div>
    </footer>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"></script>
    <!-- <script>
    document.getElementById("mostrarAlerta").addEventListener("click", function(e) {
        e.preventDefault();
        
        var correo = document.getElementById("correo").value;
        var contrasegna = document.getElementById("contrasegna").value;
        
        var xhr = new XMLHttpRequest();
        xhr.open("POST", "validate.php", true);
        xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        
        xhr.onreadystatechange = function() {
            if (xhr.readyState === 4 && xhr.status === 200) {
                var response = JSON.parse(xhr.responseText);
                alert(response.message); 
                
                if (response.success) {
                    window.location.href = response.redirect; 
                }
            }
        };
        
        var data = "correo=" + correo + "&contrasegna=" + contrasegna;
        xhr.send(data);
    });
</script> -->
</body>

</html>