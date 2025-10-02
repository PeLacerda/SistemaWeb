<?php

$produtos = array(
    "Camiseta" => 99.00,
    "Boné" => 20.00,
    "Vestido" => 299.00,
    "Sandália" => 199.90
);

echo "<h3>Lista de Produtos</h3>";
echo "<ul>";
foreach($produtos as $produto => $preco){
    echo "<li>$produto - R$ ".number_format($preco, 2, ',', '.')."</li>";
}
echo "</ul>";

?>