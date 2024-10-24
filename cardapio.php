<?php

$quantidade1 = $_POST["quantidade1"];
$quantidade2 = $_POST["quantidade2"];
$quantidade3 = $_POST["quantidade3"];
$quantidade4 = $_POST["quantidade4"];
$quantidade5 = $_POST["quantidade5"];
$quantidade6 = $_POST["quantidade6"];
$obs = $_POST["obs"];
$valortotal = 0.00;

if (isset($_POST["opcao1"])) {
    $valortotal = 8.30 * $quantidade1;
}

if (isset($_POST["opcao2"])) {
    $valortotal = 8.30 * $quantidade1;
}

if (isset($_POST["opcao3"])) {
    $valortotal = 8.30 * $quantidade1;
}

if (isset($_POST["opcao4"])) {
    $valortotal = 8.30 * $quantidade1;
}

if (isset($_POST["opcao5"])) {
    $valortotal = 8.30 * $quantidade1;
}

if (isset($_POST["opcao6"])) {
    $valortotal = 8.30 * $quantidade1;
}

if (isset($_POST["opcao7"])) {
    $valortotal = 8.30 * $quantidade1;
}

if (isset($_POST["opcao8"])) {
    $valortotal = 8.30 * $quantidade1;
}

if (isset($_POST["opcao9"])) {
    $valortotal = 8.30 * $quantidade1;
}

if (isset($_POST["opcao10"])) {
    $valortotal = 8.30 * $quantidade1;
}

if (isset($_POST["opcao11"])) {
    $valortotal = 8.30 * $quantidade1;
}

if (isset($_POST["opcao12"])) {
    $valortotal = 8.30 * $quantidade1;
}


echo "Pedido realizado com sucesso!";
echo "Sua conta ficou em R$: ", $valortotal;
echo "Obs", $obs;
echo "<br><a href='cardapio.html'>Voltar</a>";

?>