<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8"
              <title>Demo ASIX</title>
    </head>
    <body>
        <h1>
            <?php
                echo "Hello World!";

            ?>
        </h1>
        <?php
        $var1 = 4;
        $var2 = 5;

        $var3 = $var1 + $var2;
        echo "var1 = ",$var1;
        echo "<br>var2 = ",$var2;
        echo "<br>var1 + var2 = ".$var3;
        $books=[
            [
                "name"=>"Your Name",
                "author"=>"Makoto Shinkai",
                "releaseYear"=>"2016"
            ],
            [
                "name"=>"Weathering with You",
                "author"=>"Makoto Shinkai",
                "releaseYear"=>"2019"
            ],
            [
                "name"=>"Insomniacs after School",
                "author"=>"Makoto Ojiro",
                "releaseYear"=>"2019"
            ],
            [
                "name"=>"Shingeki no Kyojin",
                "author"=>"Hajime Isayama",
                "releaseYear"=>"2009"
            ],
            [
                "name"=>"Death Note",
                "author"=>"Tsugumi Ohba",
                "releaseYear"=>"2003"
            ],
        ];

//        $books=["Your Name","Weathering with You","Insomniacs after School","Shingeki no Kyojin","Death Note"];

        function filteredAuthhors($books, $author) :array {
            //Creem array
            $filteredAuthors= [];
            foreach ($books as $book){
                if ($book['author']===$author){
                    $filteredAuthors[] = $book;
                }
            }
            return $filteredAuthors;
        }
        function filteredYears($books, $year) :array {
            //Creem array
            $filteredYears= [];
            foreach ($books as $book){
                if ($book['releaseYear']>$year){
                    $filteredYears[] = $book;
                }
            }
            return $filteredYears;


        }

        echo "<br><br>",$books[1]["author"];
        //funcio lambda
        $filteredBooks = array_filter($books, function ($book) {
            return $book["releaseYear"] >= 2003 && $book["releaseYear"] <= 2016;
        });
        // var_dump($books);



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
            <?php foreach(filteredYears($books, year:"2010") as $book) : ?>
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

