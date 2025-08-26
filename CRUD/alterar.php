<HTML>
<HEAD>
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
 <TITLE>Alteração</TITLE>
</HEAD>
<?php

if (!isset($_GET['id']) || trim($_GET['id']) == '') {
  die (' ERRO: titulo não informado. ');
}

$id = trim($_GET['id']);

$bd = mysqli_connect("localhost", "root", "", "repertorio") or die("Erro na conexão!");

$titulo = mysqli_real_escape_string($bd, $titulo);

$sql = "SELECT * FROM musicas WHERE titulo = '$titulo' LIMIT 1";

$consulta = mysqli_query($bd, $sql);

if (!$consulta) {
  die("Erro na consulta SQL: " . mysqli_error($bd));
}

$reg = mysqli_fetch_array($consulta);

if (!$reg) {
  die("ERRO - Registro não Existe.");
}

?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="utf-8" />
<title>Alteração</title>

?>
</body>
</html>
</head>
<body>
<center><h2>Alterar Registros</h2></center>
<?php echo "Título: " . htmlspecialchars($reg["titulo"]) . "<br><br>" ?>
<form method="POST" action="regrava.php">
<input type="hidden" name="titulo" value ='<?php echo htmlspecialchars($reg["titulo"]); ?>'>
<p>Artista: <input type="text" size="40" name="artista" value ='<?php echo htmlspecialchars($reg["artista"]); ?>'></p>
<p>Álbum: <input type="text" size="50" name="album" value ='<?php echo htmlspecialchars($reg["album"]); ?>'></p>
<p>Gênero: <input type="text" size="20" name="genero" value ='<?php echo htmlspecialchars($reg["genero"]); ?>'></p>
<p>Ano de Lançamento: <input type="number" size="20" name="ano_lancamento" value ='<?php echo htmlspecialchars($reg["ano_lancamento"]); ?>'></p>
<p>Duração de Segundos: <input type="number" size="20" name="duracao_segundos" value ='<?php echo htmlspecialchars($reg["duracao_segundos"]); ?>'></p>
<p>Gravadora: <input type="text" size="20" name="gravadora" value='<?php echo htmlspecialchars($reg["gravadora"]); ?>'></p>
<p>Compositor: <input type="text" size="20" name="compositor" value='<?php echo htmlspecialchars($reg["compositor"]); ?>'></p>
<p>Letra: <input type="text" size="40" name="letra" value ='<?php echo htmlspecialchars($reg["letra"]); ?>'></p>
<p>Caminho do Arquivo: <input type="text" size="40" name="caminho_arquivo" value ='<?php echo htmlspecialchars($reg["caminho_arquivo"]); ?>'></p>
<p>Data de Cadastro: <input type="date" size="40" name="data_cadastro" value ='<?php echo date("Y-m-d", strtotime($reg["data_cadastro"])); ?>'></p>
<input type="submit" name="B1" value="Alterar">
