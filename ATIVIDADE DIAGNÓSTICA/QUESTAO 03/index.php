<<?php

$cliente = readline("Digite o nome do cliente:\n");

echo "CARDAPIO\n";
echo "1 - X-Burguer - 18\n";
echo "2 - X-Salada - 20\n";
echo "3 - Batata Frita - 15\n";
echo "4 - Refrigerante - 8\n";
echo "5 - Suco Natural - 10\n";

$codigo = readline("Digite o codigo do produto:\n");
$quantidade = readline("Digite a quantidade:\n");

$produto = "";
$preco = 0;

if ($codigo == 1) {
    $produto = "X-Burguer";
    $preco = 18;
} elseif ($codigo == 2) {
    $produto = "X-Salada";
    $preco = 20;
} elseif ($codigo == 3) {
    $produto = "Batata Frita";
    $preco = 15;
} elseif ($codigo == 4) {
    $produto = "Refrigerante";
    $preco = 8;
} elseif ($codigo == 5) {
    $produto = "Suco Natural";
    $preco = 10;
} else {
    echo "Codigo invalido\n";
    exit;
}

$total = $preco * $quantidade;

echo "Total: $total\n";

$valorPago = readline("Digite o valor pago:\n");

$troco = $valorPago - $total;


echo "Cliente: $cliente\n";
echo "Produto: $produto\n";
echo "Quantidade: $quantidade\n";
echo "Total: $total\n";
echo "Valor pago: $valorPago\n";
echo "Troco: $troco\n";