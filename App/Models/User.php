<?php

namespace App\Models;


class User
{
    private static $table = 'users';
    public $name;
    public $id;

    /**
     * @return string
     */
    public static function getTable(int $id)
    {
    }
}