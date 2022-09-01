<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Informações</title>
</head>
<body>
    <h1>Cadastro de Informações</h1>

    <?php
        function fValida($valores) {
            $msg = "";
            $valido = true;
            if(empty($valores['modelocarro'])) {
                $msg = "Modelo Inválido";
                $valido = false;
            } elseif(empty($valores['placacarro'])) {
                $msg = "Placa Inválida";
                $valido = false;
            } elseif(empty($valores['motorista'])) {
                $msg = "Motorista Inválido";
                $valido = false;
            } elseif(empty($valores['origem'])) {
                $msg = "Local de Origem Inválido";
                $valido = false;
            } elseif(empty($valores['destino'])) {
                $msg = "Local de Destino Inválido";
                $valido = false;
            } elseif(empty($valores['km'])) {
                $msg = "KM Percorrido Inválido";
                $valido = false;
            } elseif(empty($valores['combustivel'])) {
                $msg = "Combustivel Gasto Inválido";
                $valido = false;
            } elseif(empty($valores['valorcombustivel'])) {
                $msg = "Preço do Combustível Inválido";
                $valido = false;
            }
            echo "<h3>".$msg."</h3>";
            return $valido;
        }

        if (isset($_POST['bSalvar'])) {
            $valores = array("Modelo" => $_POST['modelocarro'],
                             "Placa" => $_POST['placacarro'],
                             "Motorista" => $_POST['motorista'],
                             "Origem" => $_POST['origem'],
                             "Destino" => $_POST['destino'],
                             "Km_percorrido" => $_POST['km'],
                             "Litros_gasto" => $_POST['combustivel'],
                             "Preco_combustivel" => $_POST['valorcombustivel']);
        }

    ?>
</body>
</html>