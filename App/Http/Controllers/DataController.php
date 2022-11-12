<?php

namespace App\Http\Controllers;

use App\Infra\Connection;
use App\Models\User;
use PDO;

class DataController
{
    public function search()
    {
        $connection = new Connection();
        $query = $connection->getPdo();
        $sql = 'SELECT * FROM users';
        $statement = $query->prepare($sql);
        $statement->execute();
        $data = $statement->fetchAll(PDO::FETCH_OBJ);

        echo '<pre>';
        var_dump($data);
    }

    public function dataDive(){
        echo file_get_contents(__DIR__.'/../../../DataDive/database1.json');
    }
}
