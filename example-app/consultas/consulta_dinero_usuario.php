<?php include('../templates/header.html');   ?>

<body>
<?php
  #Llama a conexión, crea el objeto PDO y obtiene la variable $db
  require("../config/conexion.php");

  $id_usuario = $_POST["nombreusuario"];

 	$query = "SELECT usuarios.nombre, sum(viajes.precio) FROM usuarios, viajes, comprar, ticket_viaje WHERE $id_usuario = usuarios.user_id AND comprar.user_id = usuarios.user_id AND ticket_viaje.ticket_id = comprar.ticket_id AND viajes.viaje_id = ticket_viaje.viaje_id GROUP BY usuarios.nombre;";
	$result = $db -> prepare($query);
	$result -> execute();
	$datos = $result -> fetchAll();
  ?>
	<table>
    <tr>
      <th>nombre</th>
      <th>monto</th>
    </tr>
  <?php
	foreach ($datos as $data) {
  		echo "<tr><td>$data[0]</td><td>$data[1]</td></tr>";
	}
  ?>
	</table>

<?php include('../templates/footer.html'); ?>