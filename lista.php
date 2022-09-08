<?php
include_once('lib/conexao.php');

$conn = $GLOBALS['conn'];

$sql = "SELECT codigo, Modelo, Placa, Motorista, Origem, Destino, Km_percorrido, Litros_gasto, Preco_combustivel from `dados_viagem`";
$consulta = $conn->prepare($sql);
$resultado = $consulta->execute();
$dados = $conn->query($sql);


?>



<div class='table-responsive'>
    <?php
    echo "<table class='table table-striped table-light'>";
    echo "<tr>";
    echo "<td>Modelo</td>";
    echo "<td>Placa</td>";
    echo "<td>Motorista</td>";
    echo "<td>Local de Origem</td>";
    echo "<td>Local de Destino</td>";
    echo "<td>KM Percorrido</td>";
    echo "<td>Combustível Gasto</td>";
    echo "<td>Preço do Combustível</td>";
    echo "<td>Ação</td>";
    echo "</tr>";
    foreach ($dados as $linha) {
        echo "<tr id='l" . $linha['codigo'] . "'>";
        echo "<td><input class='form-control' type='text' readonly id='m" . $linha['codigo'] . "' ondblclick='fAlterarValor(this,\"" . $linha["codigo"] . "\")' value='" . $linha["Modelo"] . "'></td>";
        echo "<td><input class='form-control' type='text' readonly id='p" . $linha['codigo'] . "' ondblclick='fAlterarValor(this,\"" . $linha["codigo"] . "\")' value='" . $linha["Placa"] . "'></td>";
        echo "<td><input class='form-control' type='text' readonly id='n" . $linha['codigo'] . "' ondblclick='fAlterarValor(this,\"" . $linha["codigo"] . "\")' value='" . $linha["Motorista"] . "'></td>";
        echo "<td><input class='form-control' type='text' readonly id='o" . $linha['codigo'] . "' ondblclick='fAlterarValor(this,\"" . $linha["codigo"] . "\")' value='" . $linha["Origem"] . "'></td>";
        echo "<td><input class='form-control' type='text' readonly id='d" . $linha['codigo'] . "' ondblclick='fAlterarValor(this,\"" . $linha["codigo"] . "\")' value='" . $linha["Destino"] . "'></td>";
        echo "<td><input class='form-control' type='text' readonly id='k" . $linha['codigo'] . "' ondblclick='fAlterarValor(this,\"" . $linha["codigo"] . "\")' value='" . $linha["Km_percorrido"] . "'></td>";
        echo "<td><input class='form-control' type='text' readonly id='l" . $linha['codigo'] . "' ondblclick='fAlterarValor(this,\"" . $linha["codigo"] . "\")' value='" . $linha["Litros_gasto"] . "'></td>";
        echo "<td><input class='form-control' type='text' readonly id='v" . $linha['codigo'] . "' ondblclick='fAlterarValor(this,\"" . $linha["codigo"] . "\")' value='" . $linha["Preco_combustivel"] . "'></td>";
        printf("<td><input type='button' value='Deletar' class='btn btn-danger' onclick='fExcluirInteressado(\"%s\",%u)'></td>", $linha["codigo"], $linha['codigo']);
        echo "</tr>";
    }

    echo "</table>";
    ?>
</div>;
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script language="JavaScript">
    function fAlteraValor(valor, codigo) {
        $("#" + valor.id).removeAttr("readonly");
        $("#" + valor.id).attr("class", "altera");
        let campo = valor.id.slice(0, 1);
        $("#" + valor.id).change(function() {
            let acao = "alteravalor.php?codigo=" + codigo + "&valor=" + $("#" + valor.id).val() + "&campo=" + campo;
            $.get(acao, function(dados, status) {
                if (status == "success") {
                    $("#" + valor.id).attr("readonly");
                    $("#" + valor.id).removeAttr("class");
                }
            });
        });
        $("#" + valor.id).blur(function() {
            $("#" + valor.id).attr("readonly");
            $("#" + valor.id).removeAttr("class");
        });
    }

    function fExcuirDados(codigo, l) {
        let acao = "deletar.php?codigo=" + codigo;

        $.get(acao, function(dados, status) {
            if (status == "success") {
                $("#l" + l).remove();
            }
        });
    }
</script>
</script>