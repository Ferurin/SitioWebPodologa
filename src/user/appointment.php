<?php
include("../validate.php");
if (!isset($_SESSION["nombre"])) {
    header("location: ../login.php");
    exit;
}
?>
<!doctype html>
<html lang="es">

<head>
    <title>Reserva de cita</title>
    <link rel="icon" type="image/png" href="../img/logo.png">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" type="../../image/png" href="img/logo.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../../css/appointment.css">
</head>

<body>
    <header id="navbar-container">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
            <div class="container">
                <a class="navbar-brand" href="../../index.php">Podología Marcela</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="../../index.php">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="administrar_cita.php">Registro de horas</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../log_out.php">Cerrar sesión</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <main>
        <div class="formbold-main-wrapper">
            <div class="formbold-form-wrapper">
                <form action="../cita.php" method="POST">
                    <div class="formbold-mb-5">
                        <label for="name" class="formbold-form-label formbold-form-label-2"> Motivo de consulta: </label>
                        <input type="text" name="consult" id="consult" placeholder="Motivo de consulta" class="formbold-form-input" />
                    </div>
                    <div class="formbold-mb-5">
                        <label for="phone" class="formbold-form-label formbold-form-label-2"> Comentarios: </label>
                        <input type="text" name="comment" id="comment" placeholder="Este campo es para detalles médicos importantes ej: Diabetes" class="formbold-form-input" />
                    </div>
                    <div class="flex flex-wrap formbold--mx-3">
                        <div class="w-full sm:w-half formbold-px-3">
                            <div class="formbold-mb-5 w-full">
                                <label for="date" class="formbold-form-label formbold-form-label-2"> Fecha: </label>
                                <input type="date" name="date" id="date" class="formbold-form-input" />
                            </div>
                        </div>
                        <div class="w-full sm:w-half formbold-px-3">
                            <div class="formbold-mb-5">
                                <label for="time" class="fformbold-form-label formbold-form-label-2"> Hora: </label>
                                <select type="time" name="time" id="time" placeholder="Horarios" class="formbold-form-input">
                                    <option value="12:00">12:00</option>
                                    <option value="14:00">14:00</option>
                                    <option value="16:00">16:00</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="formbold-mb-5 formbold-pt-3">
                        <label class="formbold-form-label formbold-form-label-2">
                            Dirección:
                        </label>
                        <div class="flex flex-wrap formbold--mx-3">
                            <div class="w-full sm:w-half formbold-px-3">
                                <div class="formbold-mb-5">
                                    <input type="text" name="direction" id="direction" placeholder="Dirección" class="formbold-form-input" />
                                </div>
                            </div>
                            <div class="w-full sm:w-half formbold-px-3">
                                <div class="formbold-mb-5">
                                    <select type="text" name="city" id="city" placeholder="Ciudad" class="formbold-form-input">
                                        <option value="San Pedro de la Paz">San Pedro de la Paz</option>
                                        <option value="Coronel">Coronel</option>
                                        <option value="Concepcion">Concepción</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <input type="submit" class="formbold-btn" value="Agendar cita">
                    </div>
                </form>
            </div>
        </div>
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
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
    </script>
</body>

</html>
