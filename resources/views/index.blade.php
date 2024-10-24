<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Demo ASIX</title>
</head>
<body>
<h1>
    <?php
    $a=34.5;
    $b=34.5;
    $greeting="Nico";
    echo " Hello World!  " . $greeting . "<br>" ;
    echo "Resultat: " . ($a + $b) . "<br>"; // Correct arithmetic operation
    ?>
</h1>

<p>Llista de llibres:</p>
<div>
    <table border="1"> <!-- Added border for visibility -->
        <thead>
        <tr>
            <th>Id</th>
            <th>Title</th>
            <th>Author</th>
            <th>Year</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($books as $book): ?> <!-- Use $book for each iteration -->
        <tr>
            <td><?= $book->id; ?></td> <!-- Corrected to $book -->
            <td><?= $book->name; ?></td> <!-- Corrected to $book -->
            <td><?= $book->author; ?></td> <!-- Corrected to $book -->
            <td><?= $book->releaseYear; ?></td> <!-- Corrected to $book -->
        </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</div>

</body>
</html>
