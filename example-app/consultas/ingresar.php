<?php include('../templates/header.html');   ?>

<h1 align="center"> Inicio Sesion</h1>

<body>

<h3 align="center"> Ingrese datos:</h3>

<form align="center" action="consultas/inicio_sesion.php" method="post">
    nombre:
    <input type="text" name="Nombre">
    <br/>
    clave:
    <input type="text" name="clave">
    <br/><br/>
    <input type="submit" value="iniciar sesion">
  </form>
  
  <br>
  <br>
  <br>

  <br>
<br>
<h3 align="center"> No tiene cuenta?:</h3>

<form action="registrar.php" method="get">
    <input type="submit" value="registrarse">
</form>
</body>

</html>

<br>
<br>
<br>


<?php include('../templates/footer.html'); ?>