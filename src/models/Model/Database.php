<?php
namespace Liquimet\Model;

class Database extends \PDO{
    public function __construct(string $dsn, string $username, string $password, array $options = []){
        $default_options[\PDO::ATTR_DEFAULT_FETCH_MODE] = \PDO::FETCH_ASSOC;          // return data as array
        $default_options[\PDO::ATTR_EMULATE_PREPARES] = false;                       // emulate prepares off
        $default_options[\PDO::ATTR_ERRMODE] = \PDO::ERRMODE_EXCEPTION;               // error settings
        $options = array_replace($default_options, $options);                       // replace defaults if supplied
        
        parent::__construct($dsn, $username, $password, $options);                  // create \PDO object
    }

    public function runSQL(string $sql, $args = null){
        if(!$args){                                         // if no arguments
            return $this->query($sql);                      // run sql, return \PDOstatement object
        }
        
        $stmt = $this->prepare($sql);                       // if still running prepare statement
        $stmt->execute($args);                              // execute sql statement with arguments
            return $stmt;                                   // return \PDOstatement object
    }
}