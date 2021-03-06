<?php
/*
class CBdd
{
    private $connection;
    
    public function __construct(PDO $connection = null)
    {
        $this->connection = $connection;
        if ($this->connection === null) {
            $this->connection = new PDO(
                    'mysql:host=localhost;dbname=gds', 
                    'root', 
                    ''
                );
            $this->connection->setAttribute(
                PDO::ATTR_ERRMODE, 
                PDO::ERRMODE_EXCEPTION
            );
        }
    }
    
    
    function getConnection() {
        return $this->connection;
    }
}

*/
class CBdd
{
    private $connection;
    
    public function __construct(PDO $connection = null)
    {
        $this->connection = $connection;
        if ($this->connection === null) {
            $this->connection = new PDO(
                    'mysql:host=mysql-ocami.alwaysdata.net;dbname=ocami_gds', 
                    'ocami', 
                    'nathalie35'
                );
            $this->connection->setAttribute(
                PDO::ATTR_ERRMODE, 
                PDO::ERRMODE_EXCEPTION
            );
        }
    }
    
    
    function getConnection() {
        return $this->connection;
    }
}