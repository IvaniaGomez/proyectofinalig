<?php include("bd.php"); 
?>
<!doctype html>
<html lang="en">
  <head>
   
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" href="ima/logo.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"rel="stylesheet">

    <title>Artesanías</title>
  </head>
  <body>
  <link rel="stylesheet" href="diseño.css">
  <hr>
  <img src="ima/portada.jpg" width="1519px">
      <div class="btn-group w-100" role="group" aria-label="Basic example">
    <button type="button" class="btn btn-warning"><a href="index.html" style="color: white; text-decoration: none;" >Inicio</a></button>
  <button type="button" class="btn btn-info"><a href="tienda.html" style="color: white; text-decoration: none;" >Tiendas</a></button>
  <button type="button" class="btn btn-primary"><a href="contactenos.php" style="color: white; text-decoration: none;" >Contáctenos</a></button>
  <button type="button" class="btn btn-dark"><a href="mensajes.html" style="color: white; text-decoration: none;" >Ver Mensaje</a></button>
      </div>
  <br><br><br>
  <div class="link-dark"><h3>Contáctenos</h3></div>
      <br><br>
      <form action="guardar.php" method="POST">
      <div class="container">
  <div class="row">
    <div class="col-12">
    <h4>Nombres*</h4>
    <div class="form-floating mb-3">
  <input type="text" class="form-control" id="floatingInput" placeholder="Id_Cliente" name="nombre">
  <label for="floatingInput">Ingrese el Nombre y Apellido</label>
</div>
<h4>Teléfono/Celular</h4>
<div class="form-floating">
  <input type="text" class="form-control" id="floatingPassword" placeholder="Nombre" name="tel">
  <label for="floatingPassword">Ingrese Número Telefonico, debe contar con 8 Digítos</label>
</div>  
<br>
<h4>Correo Electronico*</h4>
<div class="form-floating">
  <input type="text" class="form-control" id="floatingPassword" placeholder="Apellido" name="corr">
  <label for="floatingPassword">Ingrese Correo Electronico</label>
  <br>
  <h4>Mensaje*</h4>
  <div class="form-floating">
  <input type="text" class="form-control" id="floatingPassword" placeholder="Correo Electronico" name="men">
  <label for="floatingPassword">Ingrese Mensaje</label>
 <br>
</div> 
<br>
<center>
    <input type="submit" class="btn btn-primary" name="enviarr"></button>
</center>
</div> 
    </div>
    </form>
</div>
</div>
 <br>
<br><br><br>
<table class="table">
<thead>
<tr class="table-primary">
<th scope="col">PBX: 12345678 Direccion: 1a. Avenida Norte 16</th>
<th scope="col">Carne: 2021-40392</th>
<th scope="col">Nombre: Ivania Elizabeth Gomez Grijalva</th>
</tr>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>

</body>
</html>
</body>
</html>  
      
      
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

   
  </body>
</html>