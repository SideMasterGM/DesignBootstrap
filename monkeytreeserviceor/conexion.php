<?php
class DataBase extends SQLite3
{
    function __construct()
    {
        $this->open('db/reviews.db');
    }
}

$dataBase = new DataBase();
?>