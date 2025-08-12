<!DOCTYPE html>
<html lang="en">
<head>
    <meta http_equiv="Content-Type" content="text/html"; charset="UTF-8">
    <title>Musica</title>
</head>
<body>
    <?php


    $id              = $_POST["id"];
    $titulo          = $_POST["titulo"];
    $artista         = $_POST["artista"];
    $album           = $_POST["album"];
    $genero          = $_POST["genero"];
    $ano_lancamento  = $_POST["ano_lancamento"];
    $duracao         = $_POST["duracao"];
    $gravadora       = $_POST["gravadora"];
    $compositor      = $_POST["compositor"];
    $letra           = $_POST["letra"];
    $caminho_arquivo = $_POST["caminho_arquivo"];
    $data_cadastro   = $_POST["data_cadastro"];

    $con=mysqli_connect("localhost","root","","repertorio") or die ("erro!");

    $in = "INSERT INTO musicas VALUES (null,
                                            '$titulo',
                                            '$artista',
                                            '$album',
                                            '$genero',
                                            '$ano_lancamento',
                                            '$duracao',
                                            '$gravadora',
                                            '$compositor',
                                            '$letra',
                                            '$caminho_arquivo',
                                            '$data_cadastro')";

$incluir=mysqli_query($con,$in);


if ($incluir == 1) {
    echo "
    Titulo:               $titulo<br>
    Artista:              $artista<br>
    Album:                $album<br>
    Genero:               $genero<br>
    Ano de lancamento:    $ano_lancamento<br>
    duracao:              $duracao<br>
    gravadora:            $gravadora<br>
    compositor:           $compositor<br>
    Letra:                $letra<br>
    Caminho do arquivo:   $caminho_arquivo<br>
    Data de cadastro:     $data_cadastro<br>";

    echo "Registro incluido com sucesso";
    echo "<br><br><a href='consultar.html'>Consultar</a>";

} else {
    echo "Registro não incluido";
}

echo "<br><br><a href='inserir.html'>Voltar</a>";

?>
</body>
</html>

