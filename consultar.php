<HTML>
<BODY>
<?php

$bd = mysqli_connect("localhost", "root", "", "repertorio") or die("Errona conexão!");

$titulo          = isset($_POST["titulo"])          ? mysqli_real_escape_string($bd,$_POST["titulo"]) : '';
$artista         = isset($_POST["artista"])         ? mysqli_real_escape_string($bd,$_POST["artista"]) : '';
$album           = isset($_POST["album"])           ? mysqli_real_escape_string($bd,$_POST["album"]) : '';
$genero          = isset($_POST["genero"])          ? mysqli_real_escape_string($bd,$_POST["genero"]) : '';
$duracao         = isset($_POST["duracao"])         ? mysqli_real_escape_string($bd,$_POST["duracao"]) : '';
$gravadora       = isset($_POST["gravadora"])       ? mysqli_real_escape_string($bd,$_POST["gravadora"]) : '';
$compositor      = isset($_POST["compositor"])      ? mysqli_real_escape_string($bd,$_POST["compositor"]) : '';
$ano_lancamento  = isset($_POST["ano_lancamento"])  ? mysqli_real_escape_string($bd, $_POST["ano_lancamento"]) : '';
$letra           = isset($_POST["letra"])           ? mysqli_real_escape_string($bd, $_POST["letra"]) : '';
$caminho_arquivo = isset($_POST["caminho_arquivo"]) ? mysqli_real_escape_string($bd, $_POST["caminho_arquivo"]) : '';
$data_cadastro   = isset($_POST["data_cadastro"])   ? mysqli_real_escape_string($bd, $_POST["data_cadastro"]) : '';

$query = "SELECT * FROM musicas WHERE 1";

if (!empty($titulo)) {
$query .= " AND titulo LIKE '%$titulo%'";
}

if (!empty($artista)) {
$query .= " AND artista LIKE '%$artista%'";
}

if (!empty($album)) {
$query .= " AND album LIKE '%$album%'";
}

if (!empty($ano_lancamento)) {
$query .= " AND ano_lancamento = '$ano_lancamento'";
}
if (!empty($genero)) {
$query .= " AND genero LIKE '%$genero%'";
}
if (!empty($duracao)) {
$query .= " AND duracao_segundos = '$duracao'";
}
if (!empty($gravadora)) {
$query .= " AND gravadora LIKE '%$gravadora%'";
}
if (!empty($compositor)) {
$query .= " AND compositor LIKE '%$compositor%'";
}
if (!empty($letra)) {
$query .= " AND letra LIKE '%$letra%'";
}
if (!empty($caminho_arquivo)) {
$query .= " AND caminho_arquivo LIKE '%$caminho_arquivo%'";
}
if (!empty($data_cadastro)) {
$query .= " AND data_cadastro = '$data_cadastro'";
}

$consulta = mysqli_query($bd, $query);

$reg = mysqli_fetch_array($consulta);

if (!$reg) {
echo "Não existem registros para a pesquisa!";
exit;
}

while ($reg != 0) {
$titulo          = $reg["titulo"];
$artista         = $reg["artista"];
$album           = $reg["album"];
$genero          = $reg["genero"];
$ano             = $reg["ano_lancamento"];
$duracao         = $reg["duracao_segundos"];
$gravadora       = $reg["gravadora"];
$compositor      = $reg["compositor"];
$letra           = $reg["letra"];
$caminho_arquivo = $reg["caminho_arquivo"];
$data_cadastro   = $reg["data_cadastro"];
echo "<h2>Resultado da pesquisa</h2>";

echo "Título:           $titulo<br>
Artista:                $artista<br>
Álbum:                  $album<br>
Gênero:                 $genero<br>
Ano de Lançamento:      $ano<br>
Duração (em segundos):  $duracao<br>
Gravadora:              $gravadora<br>
Compositor:             $compositor<br>
Letra:                  $letra<br>
Caminho do Arquivo:     $caminho_arquivo<br>;
Data de Cadastro:     $data_cadastro<br>";


echo "<br><br><a href='excluir.html'>Excluir música</a>";
echo "<br><br><a href='alterar.html'>Alterar música</a>";

$reg = mysqli_fetch_array($consulta);
}
?>
<br><a href="consultar.html">Voltar</a><br>
</BODY>
</HTML>
