<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Podología Marcela</title>
  <link rel="icon" type="image/png" href="img/logo.png">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
  <link rel="stylesheet" href="css/index.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/navbar-fixed/">
  <?php
  include("src/validate.php");
  ?>
</head>

<body style="min-height: 75rem; padding-top: 4.5rem;">'
  <header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="index.php">Podología Marcela</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="index.php">Inicio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="src/user/appointment.php">Reserva de Horas</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="src/login.php">Inicio de sesión</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>
  <main>
    <div class="intro">
      <h1>Atención podológica</h1>
      <p>a domicilio</p>
      <button onclick="location.href='src/user/appointment.php';">Reservar hora</button>
    </div>
    <div class="achievements">
      <div class="work">
        <i class="fa-solid fa-house-medical-flag fa-fade"></i>
        <p class="work-heading">Atención profesional</p>
        <p class="work-text">Podologia marcela es una pyme la cual se centra en el cuidado del pie
          mediante el corte de uñas, extraccion de uñas encarnadas, pulido de talones,desbaste de talones,entre otros
          tratamientos para el cuidado del pie.</p>
      </div>
      <div class="work">
        <i class="fa-solid fa-briefcase-medical fa-fade"></i>
        <p class="work-heading">Urgencias médicas</p>
        <p class="work-text">Usted debera agendar una hora dentro del horario de atencion disponible, previo a su hora
          agendada
          le llegara un recordatorio de cita. El dia de su hora agendada sera atendido por la Podologia la cual llegara
          a su hogar para ser evaluado, en la primera sesion se realizara un examen fisico y evaluacion general del su
          pie
          para diagnosticar y hacer el tratamiento conveniente.
          El instrumental de trabajo cumple con las normas de asepsia y antisepcia para cumplir con las normas del
          ministerio
          de salud. De esta manera le brindo una atencion de calidad y seguridad.</p>
      </div>
    </div>
    <div class="about-me">
      <div class="about-me-text">
        <h2>Sobre la profesional</h2>
        <p>La podóloga es egresada de auxiliar de enfermeria en el 2001 en Enac, caritas chile, posteriormente obtuvo su titulo de TENS en el año
          2010 en el Instituto valle central 3 años más tarde sacaria el titulo de podologia clinica. Junto con ello desde el año
          2001 ha trabajo en diferentes instituciones de salud tales como, Hospital Padre Hurtado, Consultorio Doctor Edelberto
          Elgueta, Clinica Universitaria.</p>
      </div>
      <img src="img/imgPodologa.png">
    </div>
    <hr />
    <div id="carouselExample" class="carousel slide" data-ride="carousel">
      <!--Carousel Indicators-->
      <ol class="carousel-indicators">
        <li data-target="#carouselExample" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExample" data-slide-to="1"></li>
        <li data-target="#carouselExample" data-slide-to="2"></li>
      </ol>
      <!--Carousel Slides-->
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="img/foot.jpeg" alt="instrumentos-1">
          <div class="carousel-caption">
            <h5>Respecto a la instrumental</h5>
            <p>Se trabaja con material esteril, según las normas del ministerio de salud.</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="img/instruments.jpg" alt="instrumentos-2">
          <div class="carousel-caption">
            <h5>Respecto a la instrumental</h5>
            <p>Se cuentan con los instrumentos necesarios para dar la atención específica que necesite.</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="img/pills.png" alt="instrumentos-3">
          <div class="carousel-caption">
            <h5>Respecto a la instrumental</h5>
            <p>Durante la atención podologica se tratará con asepcia y antisepcia. Junto con la administracion del</p>
            <p>medicamento tópico según la patología (clotrimazol, ternibafinafina, ciclopirox, o similiares).</p>
          </div>
        </div>
      </div>
      <!--Carousel Previous Next Controls-->
      <a class="carousel-control-prev" href="#carouselExample" data-slide="prev">
        <span class="carousel-control-prev-icon"></span>
      </a>
      <a class="carousel-control-next" href="#carouselExample" data-slide="next">
        <span class="carousel-control-next-icon"></span>
      </a>
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
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>
</body>

</html>