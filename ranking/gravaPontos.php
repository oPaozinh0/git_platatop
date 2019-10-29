<?php
require_once("db_connect.php");

if(isset($_GET['nome']) && isset($_GET['pontos']))
{
     try{
          $nome = ($_GET['nome']);
          $pontos = ($_GET['pontos']);
          $stmt = $PDO->prepare("INSERT INTO pontos(nome, ponto) values(:nome, :pontos)");
          $stmt->bindParam(':nome', $nome, PDO::PARAM_STR);
          $stmt->bindParam(':pontos', $pontos, PDO::PARAM_INT);
          $result = $stmt->execute();
     }
     catch (PDOException $result){
          if ($result === false ) {
               echo "Erro ao cadastrar!";
           }
           else {
               echo "Cadastrado!";
     }
}
}
?>
