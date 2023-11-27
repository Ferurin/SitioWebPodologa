<script>
    document.getElementById("mostrarAlerta").addEventListener("click", function() {
        fetch("validate.php", {
                method: "POST",
                body: new FormData(document.querySelector("form")),
            })
            .then(response => response.json())
            .then(data => {
                if (data.message) {
                    alert(data.message);
                }
            })
            .catch(error => {
                console.error("Error:", error);
            });
    });
</script>

<!doctype html>
<html lang="es">

<head>
    <title>Registro</title>
    <link rel="icon" type="image/png" href="../img/logo.png">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>
    <link href="../css/register.css" rel="stylesheet">
</head>

<body class="text-center">
    <header id="navbar-container">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
            <div class="container">
                <a class="navbar-brand" href="../index.php" meth>Podología Marcela</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="../index.php">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="user/appointment.php">Reserva de Horas</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../src/login.php">Inicio de sesión</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <main class="form-signin">
        <form action="signUp.php" method="POST" name="registerUsuario">
            <img class="logInLogo" src="../img/logo.png" alt="290" width="100" height="100">
            <h1 class="h3 mb-3 fw-normal">Crea una cuenta</h1>
            <div>
                <div class="form-floating">
                    <label for="floatingInput">Ingrese su Nombre:</label>
                    <input type="name" class="form-control" name="nombre" id="floatingName" placeholder="Juan Carlos">
                </div>
                <div class="form-floating">
                    <label for="floatingInput">Ingrese su apellido:</label>
                    <input type="name" class="form-control" name="apellido" id="floatingName" placeholder="bodoque">
                </div>
                <div class="form-floating">
                    <label for="floatingInput">Ingrese su R.U.N:</label>
                    <input type="RUN" class="form-control" name="RUN" id="floatingRUN" placeholder="19888777-5">
                </div>
                <div class="form-floating">
                    <label for="floatingInput">Ingrese su correo electrónico:</label>
                    <input type="email" class="form-control" name="correo" id="floatingEmail" placeholder="juanca@31min.com">
                </div>
                <div class="form-floating">
                    <label for="floatingPassword">Ingrese su contraseña:</label>
                    <input type="password" class="form-control" name="contrasegna" id="floatingPassword" placeholder="Contraseña">
                </div>
                <div class="form-floating">
                    <label for="floatingInput">Ingrese su fecha de nacimiento:</label>
                    <input type="date" class="form-control" name="fecha_nacimiento" id="floatingDate" placeholder="Día Mes Año">
                </div>
                <div class="form-floating">
                    <label for="floatingInput">Ingrese su teléfono:</label>
                    <input type="Telephone" class="form-control" name="telefono" id="floatingTelephone" placeholder="9 4444 3333">
                </div>
            </div>
            <button class="w-100 btn btn-lg btn-primary" type="submit">Registrarte</button>
        </form>
    </main>
    <footer class="footer">
        <div class="copy">2023</div>
        <div class="bottom-links">
            <div class="links">
                <span>Contacto</span>
                <a href="https://web.whatsapp.com/">+56 9 1111 9999</a>
                <a href="#">Instagram</a>
            </div>
            <div class="links">
                <span>Social Links</span>
                <a href="https://www.facebook.com/login/?locale=es_LA"><i class="fab fa-facebook"></i></a>
                <a href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a>
            </div>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
    </script>
</body>

</html>