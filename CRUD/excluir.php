<HTML>
<BODY>
<?php
$id = $_GET["id"];
$bd = mysqli_connect("localhost","root","","repertorio") or die ("Erro naconexão!");
$excluiu = mysqli_query($bd, "DELETE FROM musicas WHERE id = '$id'");
if ($excluiu) {
echo "O registro foi excluído!!!";
} else {
echo "O registro NÃO foi excluído!!!<br>";
}
?>
<br><a href="consultar.html">Voltar para nova Consulta</a><br>
<a href="incluir.html">Incluir um novo arquivo</a>
</BODY>
</HTML>
