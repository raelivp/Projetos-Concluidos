<?php

$bd = new SQLite3("filmes.db");

$sql = "DROP TABLE IF EXISTS filmes";

if ($bd->exec($sql)) 

echo "\ntabela de filmes apagada\n"; 


$sql = "CREATE TABLE filmes (
        id INTEGER PRIMARY KEY AUTOINCREMENT,
        titulo VARCHAR (200) NOT NULL,
        poster VARCHAR (200),
        sinopse TEXT, 
        nota DECIMAL (2,1)
    )
";

if ($bd->exec($sql)) 

echo "\ntabela de filmes criada\n"; 

else 
    echo "\nErro ao criar tabela de Filmes\n";


$sql = "INSERT INTO filmes (id, titulo, poster, sinopse, nota) VALUES (
    0,
    'vingadores',
    'https://image.tmdb.org/t/p/w300/q6725aR8Zs4IwGMXzZT8aC8lh41.jpg',
    'Filme dos vingadores',
    8.6
    )";

if ($bd->exec($sql)) 

echo "\nFilme inserido com sucesso\n"; 

else 
    echo "\nErro ao adicionar filme\n";



?>