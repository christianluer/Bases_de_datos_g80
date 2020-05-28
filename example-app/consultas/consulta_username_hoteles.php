<?php include('../templates/header.html');   ?>

<body>

<?php
  #Llama a conexión, crea el objeto PDO y obtiene la variable $db
  require("../config/conexion.php");

	$tipo = $_POST["nombreusuario"];

 	$query = "SELECT paises.nombre FROM usuarios, reservar, en_hotel, se_ubica, paises, nacionalidad WHERE LOWER(usuarios.username) LIKE LOWER('%$tipo%') AND usuarios.user_id = reservar.user_id AND en_hotel.reserva_id = reservar.reserva_id AND se_ubica.hotel_id = en_hotel.hotel_id AND nacionalidad.ciudad_id = se_ubica.ciudad_id AND paises.pais_id = nacionalidad.pais_id;";
	$result = $db -> prepare($query);
	$result -> execute();
	$datos = $result -> fetchAll();
  ?>

	<table>
    <tr>
      <th>paises</th>
    </tr>
  <?php
	foreach ($datos as $data) {
  		echo "<tr> <td>$data[0]</td> </tr>";
	}
  ?>
	</table>

<?php include('../templates/footer.html'); ?>