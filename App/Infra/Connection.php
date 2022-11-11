<?php

namespace App\Infra;

use PDO;

class Connection
{
    private string $host = 'docker-php-mysql';
    private string $port = '3306';
    private string $dbname = 'database';

    private string $user = 'user';
    private string $password = 'password';
    private PDO $pdo;

    public function __construct()
    {
        $this->pdo = new PDO("mysql:host=$this->host;dbname=$this->dbname", "$this->user", "$this->password");
    }

    /**
     * @return PDO
     */
    public function getPdo(): PDO
    {
        return $this->pdo;
    }

}