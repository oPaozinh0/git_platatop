<?php
  header('Access-Control-Allow-Origin: *');
  require_once('db_connect.php');

  $sql=('SELECT * FROM pontos ORDER BY ponto DESC limit 5');
  $stmt = $PDO->query($sql);
 
  while($rows = $stmt->fetch(PDO::FETCH_ASSOC)){
  	echo $rows['nome'] . " | " . $rows['ponto'] . " |";
  }

?>
