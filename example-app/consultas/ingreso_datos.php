<?php include('../templates/header.html');   ?>

<body>
    <h1 align="center">Splinter app</h1>
<?php
  #Llama a conexión, crea el objeto PDO y obtiene la variable $db
  require("../config/conexion.php");
  $username = $_POST["username"];
  $nombre = $_POST["nombre"];
  $correo = $_POST["correo"];
  $direccion = $_POST["direccion"];
  $clave = $_POST["clave"];  
  $query = "SELECT count(nombre) FROM usuarios WHERE nombre LIKE '$nombre%' GROUP BY nombre;";
     
  $result = $db -> prepare($query);
  $result -> execute();
  $cuenta = $result -> fetch();
  $cuenta2 = $cuenta[0];
  echo "<h3>$cuenta2 este es el numero</h3>";
  if ($cuenta[0] == 0) {
    $numero_max = "SELECT MAX(user_id) FROM usuarios;";
    $num_grande = $db -> prepare($numero_max);
    $num_grande -> execute();
    $valor = $num_grande -> fetch();
    $valo = $valor[0] + 1;
    echo "<h3>$valo este es el numero</h3>";
    $ingresar_data = "INSERT INTO usuarios (user_id, username,nombre, correo, direccion) VALUES ($valo, $username, $nombre, $correo, $direccion);
    INSERT INTO claves (user_id, clave) VALUES ($valo, $clave, FALSE);";
    $ingresar_datos = $db -> prepare($ingresar_data);
    $ingresar_datos -> execute();
    echo "<h3>Sus datos fueron guardados</h3>";
    }else {
        echo "<h2> Usuario ya existente</h2>";
        echo "<h3> Inicie sesion:</h3>";
        echo '<form action="ingresar.php" method="get">
            <input type="submit" value="ingresar">
        </form>';  
    }


    ?>
<?php include('../templates/footer.html'); ?>