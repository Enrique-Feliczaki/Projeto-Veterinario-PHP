<?php
require_once "humano.php";
require_once "animal.php";
require_once "funcionario.php";
require_once "produto.php";

$humano1 = new Humano("Enrique", 18, "batata1234", 00000000);
$humano2 = new Humano("Roberto", 20, "Batata", 99999999);
$humano3 = new Humano("Emanuelly", 18, "batata-frita", 111111111111);
$humano4 = new Humano("João", 30, "batata-amassada", 4444444444);

$cavalo = new Cachorro("Cachorro", "PitBull", 4, "preto", 29, 50, $humano1);
$urubu = new Orangotango("Orangotango", "Marrom", 2, "Marrom", 60, "Medio-Alto", $humano2);
$loboGuara = new Peixinho("Peixinho", "Nemo", 0, "Preto-Escuro-Darkness", 10, 1, $humano3);

$produto1 = new Produto("Ração", 50.00);
$produto2 = new Produto("Shampoo", 30.00);
$produto3 = new Produto("Brinquedo", 20.00);

$venda1 = new Venda($humano1, [$produto1, $produto2]);
$venda2 = new Venda($humano2, [$produto3]);

$funcionari1 = new Funcionario($humano1);
$funcionari2 = new Funcionario($humano2);
$funcionari3 = new Funcionario($humano3);
$balconista = new Balconista(1300, $funcionari1);
$veterinario = new Veterinario(2500,$funcionari2);
$vendedor = new Vendedor(1900,$funcionari3);


// Impressão das informações
echo "========== Informações dos Humanos ==========\n";
echo $humano1;
echo "---------------------------------------------\n";
echo $humano2;
echo "---------------------------------------------\n";
echo $humano3;
echo "---------------------------------------------\n";
echo $humano4;
echo "\n\n";

echo "========== Informações dos Animais ==========\n";
echo $cavalo;
echo "Ação: "; 
$cavalo->falar();
echo "---------------------------------------------\n";
echo $urubu;
echo "Ação: ";
$urubu->falar();
echo "---------------------------------------------\n";
echo $loboGuara;
echo "Ação: ";
$loboGuara->falar();
echo "\n\n";

echo "========== Informações dos Funcionários ==========\n";
echo $balconista;
echo "---------------------------------------------\n";
echo $veterinario;
echo "---------------------------------------------\n";
echo $vendedor;
echo "---------------------------------------------\n";

echo "========== Informações das Vendas ==========\n";
echo $venda1;
echo "---------------------------------------------\n";
echo $venda2;
echo "\n\n";

