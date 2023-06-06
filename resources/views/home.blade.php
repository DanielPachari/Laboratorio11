@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-info" role="alert">
                                A simple info alert with <a href="#" class="alert-link">an example link</a>. give it a click if you like.
                        </div>
                    @endif
                    <div class="alert alert-info" role="alert">
                                A simple info alert with <a href="#" class="alert-link">an example link</a>. give it a click if you like.
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!doctype html>
<html lang="es">
  <head>
    <title>Peluqueria "PAMPLONA"</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.0.2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- cdn icnonos-->
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.min.css" rel="stylesheet">
  </head>
  <body>
      <div class="container-fluid bg-danger">
          <div class="row">
              <div class="col-md">
                  <header class="py-3">
                      <h3 class="text-center">🐾 Peluqueria Canina " PAMPLONA " 🐾</h3>
                  </header>
              </div>
          </div>
      </div>
<style>
    body {
        background-image: url("img/fondodog.jpg");
        background-repeat: no-repeat;
        background-position: center center;
        background-attachment: fixed;
        background-size: cover;
    }

</style>
    <div class="container my-5">
        <h1 class="text-center">BIENVENIDOS</h1>
        <div class="row justify-content-center">
            <div class="col-md-9">
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Raza</th>
                            <th scope="col">Vacunas</th>
                            <th scope="col">Estilista</th>
                            <th scope="col">Tipo de servicio</th>
                            <th scope="col">Fecha de atención</th>
                            <th scope="col">Celular Dueño</th>
                            <th scope="col">Acciones</th>
                        </tr>
                    </thead>
                    
                </table>
                <div class="text-end">
                    <a href="registrar.php" class="btn btn-success"><i class="bi bi-plus"></i> Registrar nueva mascota</a>
                </div>
            </div>
        </div>
    </div>
    <footer class="container-fluid bg-success fixed-bottom">
        <div class="row">
            <div class="col-md text-light text-center py-1">
               Gracias por su visita 🐩
            </div>
        </div>
    </footer>
      
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  </body>
</html>
@endsection
