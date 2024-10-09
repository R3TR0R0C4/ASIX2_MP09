<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Demo ASIX</title>
</head>
<body>
<h1>
    <?php
    echo "Hello World!";
    ?>
</h1>
<?php

echo "var1 = ",$var1;
echo "<br>var2 = ",$var2;
echo "<br>var1 + var2 = ".$var3;



?>
<p>Llista de llibres: </p>
<ul>
    <?php foreach($books as $book) : ?>
    <li><?= $book["name"] ?>  ---- Autor: <?= $book["author"] ?> ----  Release Year: <?= $book["releaseYear"] ?></li>
    <?php endforeach; ?>
</ul>
<p>Llibres de Hajime Isayama</p>
<ul>
    <?php foreach($books as $book) : ?>
        <?php if ($book["author"]==="Hajime Isayama") : ?>
    <li><?= $book["name"] ?>  Autor: <?= $book["author"] ?> Release Year: <?= $book["releaseYear"] ?></li>
    <?php endif?>
    <?php endforeach; ?>
</ul>
<p>Llibres de Makoto Shinkai</p>
<ul>
    <?php foreach(filteredAuthhors($books, "Makoto Shinkai") as $book) : ?>
    <li><?= $book["name"] ?>  Autor: <?= $book["author"] ?> Release Year: <?= $book["releaseYear"] ?></li>
    <?php endforeach; ?>
</ul>
<p>Llibres a partir del 2010</p>
<ul>
    <?php foreach(filteredYears($books, 2010) as $book) : ?>
    <li><?= $book["name"] ?>  Autor: <?= $book["author"] ?> Release Year: <?= $book["releaseYear"] ?></li>
    <?php endforeach; ?>
</ul>
<p>Llibres entre 2003 i 2016</p>
<ul>
    <?php foreach($filteredBooks as $book) : ?>
    <li><?= $book["name"] ?>  Autor: <?= $book["author"] ?> Release Year: <?= $book["releaseYear"] ?></li>
    <?php endforeach; ?>
</ul>

</body>
</html>