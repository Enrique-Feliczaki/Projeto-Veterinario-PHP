<?php
require_once "humano.php";
require_once "animal.php";
require_once "funcionario.php";

$humano1 = new Humano("Enrique", 18, "batata1234", 00000000);
$humano2 = new Humano("Roberto" , 20, "Batata", 99999999);
$humano3 = new Humano("Emanuelly", 18, "batata-frita", 111111111111);
$humano4 = new Humano("João", 30, "batata-amassada", 4444444444);
$cavalo = new Cachorro("Cachorro", "PitBull", 4, "preto", 29, 50, $humano1 );
$cavalo->falar();

$urubu = new Orangotango("Orangotango", "Marrom", 2, "Marrom", 60, "Medio-Alto", $humano2 );
$urubu->falar();

$loboGuara = new Peixinho("Peixinho", "Nemo", 0, "Preto-Escuro-Darkness", 10, 1, $humano3);
$loboGuara->falar();



echo $bandido;

$funcionario1 = new Funcionario("balconista", $bandido);
echo $funcionario;