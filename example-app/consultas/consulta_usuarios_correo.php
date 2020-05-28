<?php include('../templates/header.html');   ?>

<body>

<?php
  #Llama a conexión, crea el objeto PDO y obtiene la variable $db
  require("../config/conexion.php");

	
 	$query = "SELECT username, correo FROM usuarios";
	$result = $db -> prepare($query);
	$result -> execute();
	$datos = $result -> fetchAll();
?>

	    <table>
    <tr>
      <th>username</th>
      <th>correos</th>
    </tr>
<?php
	  foreach ($datos as $data) {
  	  	echo "<tr> <td>$data[0]</td> <td>$data[1]</td> </tr>";
	  }
?>
	  </table>

<?php include('../templates/footer.html'); ?>
