<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="css/main.css">
    <title>login</title>
  </head>
  <body>
    <div class="container-fluid seccion">
        <!--menu de arriba-->
        <div class="container-fluid menu--ariba fixed-top">
            <ul class=" nav justify-content-end">
                <li class="nav-item">
                    <a class="nav-link disabled" href="#">Usuario1</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="#">Salir</a>
                </li>
            </ul>
        </div>
        <div class="row seccion">
            <div class="col-2 align-items-stretch menu--lateral">
                    <ul class="nav flex-column menu_lateral">
                        <li class="nav-item d-flex  align-items-center menu_lateral--item">
                            <i class="material-icons">home</i>
                            <a class="nav-link" href="/inicio">Inicio</a>
                        </li>
                        <li class="nav-item d-flex  align-items-center menu_lateral--item">
                            <i class="material-icons">supervisor_account</i>
                            <a class="nav-link" href="/usuario">Usuarios</a>
                        </li>
                        <li class="nav-item d-flex align-items-center menu_lateral--item">
                            <i class="material-icons">perm_contact_calendar</i>
                            <a class="nav-link" href="/pacientes">Pacientes</a>
                        </li>
                        <li class="nav-item d-flex  align-items-center menu_lateral--item">
                            <i class="material-icons">face</i>
                            <a class="nav-link" href="#">Medicos</a>
                        </li>
                        <li class="nav-item d-flex  align-items-center menu_lateral--item">
                            <i class="material-icons">description</i>
                            <a class="nav-link" href="#">Atenciones</a>
                        </li>
                        <li class="nav-item d-flex  align-items-center menu_lateral--item">
                            <i class="material-icons">find_in_page</i>
                            <a class="nav-link" href="#">Reportes</a>
                        </li>
                    </ul>
            </div>
            <!-- el contenedor de los contenidos -->
            <div class="col-10 contenedor align-items-stretch d-flex justify-content-center align-items-center">
                <seccion class="container contenedor--contenido">
                    <seccion class="row contenedor--contenido_titulo">
                        <div class="col">
                            <h3>Lista de Pacientes</h3>
                        </div>
                    </seccion>
                    <hr>
                    <seccion class="row">
                        <div class="col-3">
                            <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#nuevopaciente">+ nuevo Paciente</button>
                        </div>
                        <div class="col-9 d-flex justify-content-end">
                            <form class="form-inline">
                                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
                              </form>
                        </div>
                    </seccion>
                    <seccion class="seccion-tabla">
                        <table class="table table-striped">
                            <thead>
                              <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nombre</th>
                                <th scope="col">Apellido</th>
                                <th scope="col">Direccion</th>
                                <th scope="col">genero</th>
                                <th scope="col">Accion</th>
                              </tr>
                            </thead>
                            <tbody>
                                @foreach ($pacientes as $paciente)
                                    <tr>
                                        <th scope="row">{{ $paciente->id_paciente }}</th>
                                        <td>{{ $paciente->nombre }}</td>
                                        <td>{{ $paciente->apellido }}</td>
                                        <td>{{ $paciente->direccion }}</td>
                                        <td>{{ $paciente->genero }}</td>
                                        <td>
                                            <button type="button" class="btn btn-outline-warning">Editar</button>
                                            <button type="button" class="btn btn-outline-danger">Eliminar</button>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </seccion>
                    
                </seccion>
            </div>
        </div>
    </div>
    <!--modales-->
    <div id="nuevopaciente" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalPopoversLabel" style="display: none;" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalPopoversLabel">Nuevo Paciente</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
              </button>
            </div>
            <div class="modal-body">
              <!--contedor-modal--conteido-->
              <form action="/pacientes" method="POST">
                {{ csrf_field() }}
                <div class="form-group">
                  <label for="recipient-name" class="col-form-label">Nombres</label>
                  <input type="name" name="nombre"  class="form-control" id="recipient-name">
                </div>
                <div class="form-group">
                    <label for="recipient-name" class="col-form-label">Apellidos</label>
                    <input type="lastname" name="apellido" class="form-control" id="recipient-name">
                </div>
                <div class="form-group">
                    <label for="recipient-name" class="col-form-label">DNI</label>
                    <input type="text" name="dni" class="form-control" id="recipient-name">
                </div>
                <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Celular</label>
                        <input type="text" name="celular" class="form-control" id="recipient-name">
                </div>
                <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Fecha de nacimiento</label>
                        <input type="text" name="fech_naci" class="form-control" id="recipient-name">
                </div>
                <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Direccion</label>
                        <input type="text" name="direccion" class="form-control" id="recipient-name">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Estado civil</label>
                    <select class="form-control" name="estado_civil" id="exampleFormControlSelect1">
                      <option>Soltero(a)</option>
                      <option>Casado(a)</option>
                      <option>Viudo(a)</option>
                      <option>Divorciado(a)</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Genero</label>
                    <select class="form-control" name="genero" id="exampleFormControlSelect1">
                        <option>Hombre</option>
                        <option>Mujer</option>
                        <option>Compliado</option>
                    </select>
                </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-primary">Gardar</button>
                  </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="js/main.js"></script>
  </body>
</html>