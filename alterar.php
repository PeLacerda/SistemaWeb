<?php
if (!isset($_GET['titulo']) || trim($_GET['titulo']) == '') {
    die('ERRO: Título não informado.');
}

$titulo = trim($_GET['titulo']);
$bd = mysqli_connect("localhost", "root", "", "repertorio") or die("Erro na conexão!");
$titulo = mysqli_real_escape_string($bd, $titulo);

$sql = "SELECT * FROM musicas WHERE titulo = '$titulo' LIMIT 1";
$consulta = mysqli_query($bd, $sql);

if (!$consulta) {
    die("Erro na consulta SQL: " . mysqli_error($bd));
}

$reg = mysqli_fetch_array($consulta);

if (!$reg) {
    die("ERRO - Registro não existe.");
}

// Inclui o HTML, passando os dados para ele
include 'alterar.html';
?>
