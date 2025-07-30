<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Musica</title>
</head>
<body>
    <?php
    $con=mysqli_connect("localhost","root","","repertorio") or die ("erro!");

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


    $in = 'insert into musicas values(null,
                                            "$titulo",
                                            "$artista",
                                            "$album",
                                            "$genero",
                                            "$ano_lancamento",
                                            "$duracao",
                                            "$gravadora",
                                            "$compositor",
                                            "$letra",
                                            "$caminho_arquivo",
                                            "$data_cadastro")';

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
    Data de cadastro:     $data_cadastro";

    echo "Registro incluido com sucesso";
} else {
    echo "Registro não incluido";
}
    ?>
</body>
</html>

