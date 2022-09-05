<?php
  require_once('lib/conexao.php');
  $sql = "DELETE from dados_viagem where codigo = :codigo";

  try {
    $consulta = $conn->prepare($sql);
    $consulta->execute(array('codigo' => $_GET['codigo']));
  } catch(PDOException $e) {
    echo 'ERROR: ' . $e->getMessage();
  }
