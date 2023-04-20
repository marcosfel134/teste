<?php
//Conexão ao banco de dados, através de usuario, senha, database e hostname.

$usuario = 'epiz_32976793';
$senha = 'bvC5uGCInZQDGF';
$database = 'epiz_32976793_interview';
$host = 'sql112.epizy.com';

$mysqli = new mysqli($host, $usuario, $senha, $database);

if($mysqli->error) {
    die("Falha ao conectar ao banco de dados: " . $mysqli->error);
}