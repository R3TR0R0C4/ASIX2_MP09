<?php

use Core\App;

$var1 = 4;
$var2 = 5;

$var3 = $var1 + $var2;

//$books=[
//    [
//        "name"=>"Your Name",
//        "author"=>"Makoto Shinkai",
//        "releaseYear"=>"2016"
//    ],
//    [
//        "name"=>"Weathering with You",
//        "author"=>"Makoto Shinkai",
//        "releaseYear"=>"2019"
//    ],
//    [
//        "name"=>"Insomniacs after School",
//        "author"=>"Makoto Ojiro",
//        "releaseYear"=>"2019"
//    ],
//    [
//        "name"=>"Shingeki no Kyojin",
//        "author"=>"Hajime Isayama",
//        "releaseYear"=>"2009"
//    ],
//    [
//        "name"=>"Death Note",
//        "author"=>"Tsugumi Ohba",
//        "releaseYear"=>"2003"
//    ],
//];

//        $books=["Your Name","Weathering with You","Insomniacs after School","Shingeki no Kyojin","Death Note"];

//function filteredAuthhors($books, $author) :array {
//    //Creem array
//    $filteredAuthors= [];
//    foreach ($books as $book){
//        if ($book['author']===$author){
//            $filteredAuthors[] = $book;
//        }
//    }
//    return $filteredAuthors;
//}
//function filteredYears($books, $year) :array {
//    //Creem array
//    $filteredYears= [];
//    foreach ($books as $book){
//        if ($bookcreateImmutable['releaseYear']>$year){
//            $filteredYears[] = $book;
//        }
//    }
//    return $filteredYears;
//}
//
////funcio lambda
//$filteredBooks = array_filter($books, function ($book) {
//    return $book["releaseYear"] >= 2003 && $book["releaseYear"] <= 2016;
//});


//consultem els registres de la taula books de la bd
$books = App::get('database')->selectAll('books');



// var_dump($books);
//cridem a la vista
require '../resources/views/index.blade.php';