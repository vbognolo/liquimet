<?php
namespace Liquimet\Model;

class Database extends \PDO {
    public function __construct(string $dsn, string $username, string $password, array $options = []){
        //initialize default options
        $default_options = [
            \PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_ASSOC,             //return data as associative array
            \PDO::ATTR_EMULATE_PREPARES => false,                           //disable emulated prepared statements
            \PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION                   //throw exceptions on errors
        ];

        //add MYSQL_ATTR_LOCAL_INFILE only if available (MySQL only)
        if(defined('PDO::MYSQL_ATTR_LOCAL_INFILE')){
            $default_options[\PDO::MYSQL_ATTR_LOCAL_INFILE] = true;         //enable large file import
        }

        //merge provided options with defaults
        $options = array_replace($default_options, $options);

        //create PDO object
        parent::__construct($dsn, $username, $password, $options);
    }

    public function runSQL(string $sql, array $args = []) {
        $stmt = $this->prepare($sql);         //always prepare statements for safety
        $stmt->execute($args);             //execute with arguments
            return $stmt;                            //return statement object
    }




/*
namespace Liquimet\Model;

class Database extends \PDO{
    public function __construct(string $dsn, string $username, string $password, array $options = []){
        $default_options[\PDO::ATTR_DEFAULT_FETCH_MODE] = \PDO::FETCH_ASSOC;          //return data as array
        $default_options[\PDO::ATTR_EMULATE_PREPARES] = false;                        //emulate prepares off
        $default_options[\PDO::ATTR_ERRMODE] = \PDO::ERRMODE_EXCEPTION;               //error settings
        $default_options[\PDO::MYSQL_ATTR_LOCAL_INFILE] = true;                       //for importing large data     //dodala za input file upload
        $options = array_replace($default_options, $options);                         //replace defaults if supplied
        
        parent::__construct($dsn, $username, $password, $options);                    //create \PDO object
    }

    public function runSQL(string $sql, $args = null){
        if(!$args){                                         //if no arguments
            return $this->query($sql);                      //run sql, return \PDOstatement object
        }
        
        $stmt = $this->prepare($sql);                       //if still running prepare statement
        $stmt->execute($args);                              //execute sql statement with arguments
            return $stmt;                                   //return \PDOstatement object
    }
}*/
}
