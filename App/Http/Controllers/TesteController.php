<?php

namespace App\Http\Controllers;

use App\Infra\Connection;
use App\Models\User;

class TesteController
{
    public function teste()
    {
        $connection = new Connection();
        $query = $connection->getPdo();
        $sql = 'SELECT * FROM users';
        $statement = $query->prepare($sql);
        $statement->execute();
        $data = $statement->fetchAll(\PDO::FETCH_OBJ);

        echo '<pre>';
        var_dump($data);
    }
}
