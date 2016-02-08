<?php

namespace Models;

/*use PDO;

class Article
{
    public static function first()
    {
        $dsn = 'mysql:host=localhost;dbname=mffc';
        $username = 'root';
        $password = '1234';
        $options = array(
            PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
        );
        $dbh = new PDO($dsn, $username, $password, $options);

        foreach($dbh->query('SELECT * FROM articles limit 0,1') as $row) {
            return $row;
        }
    }
}*/
class Article extends \Illuminate\Database\Eloquent\Model

{

    public $timestamps = false;

}