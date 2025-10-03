<?php

$livros = array(
    array("nome" => "Os Miseráveis", "genero" => "Ficção", "paginas" => 1511),
    array("nome" => "1984", "genero" => "Distopia", "paginas" => 328),
    array("nome" => "O Imbecil Juvenil", "genero" => "ensaio crítico e reflexivo", "paginas" => 506),
    array("nome" => "O Pequeno Príncipe", "genero" => "Ficção", "paginas" => 96),
    array("nome" => "O Código Da Vinci", "genero" => "Ficção", "paginas" => 489),
);

echo "<h2>Lista de Livros</h2>";
echo "<table border='1' cellpadding='5' cellspacing='0'>";
echo "<tr><th>Nome</th><th>Gênero</th><th>Páginas</th></tr>";

foreach($livros as $livro){
    echo "<tr>";
    echo "<td>".$livro['nome']."</td>";
    echo "<td>".$livro['genero']."</td>";
    echo "<td>".$livro['paginas']."</td>";
    echo "</tr>";
}

echo "</table>";

?>