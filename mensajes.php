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
        <div class="btn-group w-100" role="group" aria-label="Basic example">
  <button type="button" class="btn btn-warning"><a href="productos.html" style="color: white; text-decoration: none;" >Productos / Servicios</a></button>
  <button type="button" class="btn btn-info"><a href="tienda.html" style="color: white; text-decoration: none;" >Tiendas</a></button>
  <button type="button" class="btn btn-primary"><a href="contactenos.php" style="color: white; text-decoration: none;" >Contactenos</a></button>

</div>
<br><br><br><br>    
    <center>
    <div class="col-8">
    <table class="table table-outline-danger table-striped">
  <thead>
    <tr>
      <th scope="col">Nombre</th>
      <th scope="col">Teléfono</th>
      <th scope="col"><center>Correo Electronico</center></th>
      <th scope="col"><center>Mensaje</center></th>
    </tr>
</thead>
<tbody>
<?php
$query="SELECT * FROM mensajes";
$resultat=mysqli_query($conn,$query);
while ($row=mysqli_fetch_array($resultat)){?>

<tr>
    <td><?php echo $row['Nombre'] ?> </td>
    <td><?php echo $row['telefono'] ?> </td>
    <td><?php echo $row['correo'] ?> </td>
    <td><?php echo $row['mensaje'] ?> </td>
    <td>

    </td>
</tr>

<?php } ?>

</tbody>    
</table>
    </div>
  </div>
</center>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
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