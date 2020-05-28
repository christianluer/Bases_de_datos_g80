<?php include('templates/header.html');   ?>

<body>
  <h1 align="center">Entrega 3: App design and development</h1>
  <p style="text-align:center;">Poner contexto aca......</p>

  <br>

  <h3 align="center"> Para registrarse ingrese sus datos:</h3>

  <form align="center" action="consultas/ingreso_datos.php" method="post">
    nombre:
    <input type="text" name="Nombre">
    <br/>
    correo:
    <input type="text" name="Correo">
    <br/>
    direccion:
    <input type="text" name="Direccion">
    <br/><br/>
    <input type="submit" value="Buscar">
  </form>
  
  <br>
  <br>
  <br>

  <h3 align="center"> Las ciudades que pertenecen al pais:</h3>

  <form align="center" action="consultas/consulta_ciudad_pais.php" method="post">
    nombrepais:
    <input type="text" name="nombredelpais">
    <br/><br/>
    <input type="submit" value="Buscar">
  </form>
  
  <br>
  <br>
  <br>

  <h3 align="center"> Hospedajes en hoteles del usuario:</h3>

  <form align="center" action="consultas/consulta_username_hoteles.php" method="post">
    username:
    <input type="text" name="nombreusuario">
    <br/><br/>
    <input type="submit" value="Buscar">
  </form>

<br>
<br>
<br>
  

<h3 align="center"> dinero gastado en viajes por usuario:</h3>

<form align="center" action="consultas/consulta_dinero_usuario.php" method="post">
  ID_usuario:
  <input type="text" name="nombreusuario">
  <br/><br/>
  <input type="submit" value="Buscar">
</form>

<br>
<br>
<br>


<h3 align="center">Informacion de reservas desde  1/1/2020 hasta 31/3/2020:</h3>

<form align="center" action="consultas/consulta_reservas.php" method="post">
  seleccionar:
  <input type="submit" value="Buscar">
</form>

<br>
<br>
<br>


<h3 align="center"> Fijar fechas para ver gastos de usuarios formato: YYYY-MM-DD</h3>

  <form align="center" action="consultas/consulta_gasto_fechas.php" method="post">
    Fecha_inicial:
    <input type="text" name="fecha_inicial">
    <br/>
    Fecha_final:
    <input type="text" name="fecha_final">
    <br/><br/>
    <input type="submit" value="Buscar">
  </form>

 

  <br>
  <br>
  <br>
  <br>
</body>
</html>
