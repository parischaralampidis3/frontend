<?php


class Database
{
    public $connection;
    function __construct($config, $username='root' ,$password = '')
    {
     

        $dsn = 'mysql:' . http_build_query($config, '', ';');

        //$dsn = "mysql:host={$config['host']};port={$config['port']};dbname={$config['dbname']};user=root;charset={$config['charset']}";
        // Tip: This should be wrapped in a try-catch. We'll learn how, soon.
        $this->connection = new PDO($dsn,$username,$password,[PDO::ATTR_DEFAULT_FETCH_MODE=>PDO::FETCH_ASSOC] );

    }
    public function query($query)
    {

        $statement = $this->connection->prepare($query);


        $statement->execute();

        return $statement;

    }
}

