<?php

namespace Core\Database;

use PDO;

class Database{
    protected $pdo; //guardem instancia de la classe pdo

    //creem constructor  reb instancia pdo per a realitzar les consultes
    public function __construct($pdo){
        $this->pdo = $pdo;
    }

    //creem funcio per afegir els registres d'una taula de la bd
    public function selectAll($table){
        $statement = $this->pdo->prepare("SELECT * FROM $table");
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_CLASS);

    }

}