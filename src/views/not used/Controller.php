<?php
namespace Liquimet\Controller;

use Liquimet\Model\Database;

class Controller {
    protected $db;
    protected $instances = [];      //stores instances of various objects dynamically
    
        public function __construct(Database $db) {
            $this->db = $db;
        }
    
        private function getInstance(string $class) {
            if(!isset($this->instances[$class])){
                $this->instances[$class] = new $class($this->db);
            }
                return $this->instances[$class];
        }
    
        public function getLoginController() {
            return $this->getInstance(LoginController::class);
        }
}