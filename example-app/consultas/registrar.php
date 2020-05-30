<?php include('../templates/header.html');   ?>

<body>

<h1 align="center"> Eres nuevo en splinter?</h1>

<form align="center" action="ingreso_datos.php" method="post">
    username:
    <input type="text" name="Username">
    <br/>
    nombre:
    <input type="text" name="Nombre">
    <br/>
    correo:
    <input type="text" name="Correo">
    <br/>
    direccion:
    <input type="text" name="Direccion">
    <br/>
    clave:
    <input type="text" name="clave">
    <br/><br/>
    <input type="submit" value="registrarse">
  </form>
  
  <br>
  <br>
  <br>

  <br>
<br>
<form action="ingresar.php" method="get">
    <input type="submit" value="ingresar">
</form>
</body>

</html>

<br>
<br>
<br>


<?php include('../templates/footer.html'); ?>