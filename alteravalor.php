<?php
require_once('lib/conexao.php');
    echo "<script>alert(".$_GET["campo"].")<script>";
    if ($_GET["campo"]=="md") {
        $sql = "UPDATE dados_viagem set Modelo = :valor where codigo = :codigo";
    } elseif ($_GET["campo"]=="pl") {
        $sql = "UPDATE dados_viagem set Placa = :valor where codigo = :codigo";
    } elseif ($_GET["campo"]=="mt") {
        $sql = "UPDATE dados_viagem set Motorista = :valor where codigo = :codigo";
    } elseif ($_GET["campo"]=="or") {
        $sql = "UPDATE dados_viagem set Origem = :valor where codigo = :codigo";
    } elseif ($_GET["campo"]=="ds") {
        $sql = "UPDATE dados_viagem set Destino = :valor where codigo = :codigo";
    } elseif ($_GET["campo"]=="km") {
        $sql = "UPDATE dados_viagem set Km_percorrido = :valor where codigo = :codigo";
    } elseif ($_GET["campo"]=="lt") {
        $sql = "UPDATE dados_viagem set Litros_gasto = :valor where codigo = :codigo";
    } elseif ($_GET["campo"]=="pc") {
        $sql = "UPDATE dados_viagem set Preco_combustivel = :valor where codigo = :codigo";
    }
     echo $sql;
     try {
      $consulta = $conn->prepare($sql);
      $consulta->execute(array('valor' => $_GET['valor'], 'codigo' =>$_GET['codigo']));
     } catch(PDOException $e) {
      echo 'ERROR: ' . $e->getMessage();
     }
