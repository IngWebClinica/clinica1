<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="css/clinica.css">
    <title>Clinica Universitaria</title>
  </head>
  <body>
    <!--colocamos el menu de blanco-->
    <section class="container-fluid container-nav">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">Clinica Universitaria</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse d-flex justify-content-end" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                <a class="nav-item nav-link" href="#servicios">Servicios</a>
                <a class="nav-item nav-link" href="#">Especialidades</a>
                <a class="nav-item nav-link" href="#">contactanos</a>
                <a class="nav-item nav-link text-warning" href="/login">login</a>
                </div>
            </div>
            </nav>
    </section>
    <!--fin el menu de blanco-->
    <section class="container-fluid section-fluid d-flex align-items-center seccion-inicio">
        <div class="container">
            <h1 class="text-white"><span class="text-warning">Confia</span> en nosotros<br>Nos dedicamos al 100%<br> con nuestros <span class="text-warning">pacientes</span></h1>
            <p class="text-white">Una clinica totalmente modernisada<br>Con doctores completemente capacitados en cada area.</p>
            <button  type="button" class="btn btn-outline-warning btn-lg ">Contactanos</button>
        </div>
        
    </section>
    <!--inicio del MODULO DE SERVICIOS-->
    <section class="container-fluid"id="servicios">
        <div class="container">
            <h2 class="text-center m-5">Servicios <span class="text-warning">brindados</span></h2>
            <div class="row m-5">
                <div class="col d-flex flex-column justify-content-center align-items-center">
                    <i class="material-icons text-warning m-2 rounded-circle border border-warning p-3">airline_seat_flat</i>
                    <h6 class="text-center">Atencion<br><span class="text-warning">Personalizada</span></h6>
                </div>
                <div class="col d-flex flex-column justify-content-center align-items-center">
                    <i class="material-icons text-warning m-2 rounded-circle border border-warning p-3">local_shipping</i>
                    <h6 class="text-center">Contamos<br>con <span class="text-warning">unidades</span></h6>
                </div>
                <div class="col d-flex flex-column justify-content-center align-items-center">
                    <i class="material-icons text-warning m-2 rounded-circle border border-warning p-3">local_shipping</i>
                    <h6 class="text-center">Doctores<br><span class="text-warning">Personalizados</span></h6>
                </div>
                <div class="col d-flex flex-column justify-content-center align-items-center">
                    <i class="material-icons text-warning m-2 rounded-circle border border-warning p-3">blur_on</i>
                    <h6 class="text-center">Buenos<br><span class="text-warning">Implementos</span></h6>
                </div>
            </div>
        </div>
    </section>
    <!--fin del MODULO DE SERVICIOS-->
    <!--inicio del MODULO DE ESPECIALIDAD-->
    <section id="especialidad" class="container-fluid bg-light pt-4 pb-5">
        <div class="container">
            <h3 class="text-center m-5">Nuestras <span class="text-warning">Especialidades</span></h3>
            <div class="row m-2">
                <div class="col">
                    <div class="card">
                    <div class="card-body">
                        <h5 class="card-title text-warning">Cardiologia</h5>
                        <p class="card-text">Nuestra especialidad de Cardiología se centra en el diagnóstico, tratamiento y prevención de problemas de salud...</p>
                    </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                    <div class="card-body">
                        <h5 class="card-title text-warning">Odontologia</h5>
                        <p class="card-text">Tenemos la capacidad de devolverte la función, estética y armonía oral, mediante prótesis fijas o removibles...</p>
                    </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                    <div class="card-body">
                        <h5 class="card-title text-warning">Medicina</h5>
                        <p class="card-text">Tenemos la capacidad de devolverte la función, estética y armonía oral, mediante prótesis fijas o removibles...</p>
                    </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                    <div class="card-body">
                        <h5 class="card-title text-warning">Nutricionista</h5>
                        <p class="card-text">Tenemos la capacidad de devolverte la función, estética y armonía oral, mediante prótesis fijas o removibles...</p>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--fin del MODULO DE ESPECIALIDAD-->
    <footer class="page-footer bg-dark">
        <div class="container d-flex flex-column justify-content-center align-items-center">
            <div class="row m-4">
                <div class="col"><a class="text-white" href="#">Servicios</a></div>
                <div class="col"><a class="text-white" href="#">Especialidad</a></div>
                <div class="col"><a class="text-white" href="#">Cntactanos</a></div>
                <div class="col"><a class="text-white" href="#">login</a></div>  
            </div>
            <p class="text-white">Contruido por<a href="#">Alvaromoca</a></p>
        </div>
    </footer>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
<!--interesnte a que cambiar el diseño de toda esta web cmo se debe y modificar meterlo loes estilo
y tambien poner un area de contactanos-->