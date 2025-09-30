<?php
namespace Liquimet\Model;
    
class Model {
    protected $db;
    protected $instances = [];          // Stores instances of various objects dynamically
    
        public function __construct(Database $db) {
            $this->db = $db;
        }
    
        private function getInstance(string $class) {
            if(!isset($this->instances[$class])){
                $this->instances[$class] = new $class($this->db);
            }
                return $this->instances[$class];
        }
    
        public function getPlatform() {
            return $this->getInstance(Platform::class);
        }
    
        public function getTransport() {
            return $this->getInstance(Transport::class);
        }
    
        public function getQuantity() {
            return $this->getInstance(Quantity::class);
        }
    
        public function getPartial() {
            return $this->getInstance(Partial::class);
        }
    
        public function getTransaction() {
            return $this->getInstance(Transaction::class);
        }
    
        public function getUser()  {
            return $this->getInstance(User::class);
        }

        public function getLoginAttempt() {
            return $this->getInstance(LoginAttempt::class);
        }

        public function getTitle() {
            return $this->getInstance(Title::class);
        }
    
        public function lastInsertId() {
            return $this->db->lastInsertId();
        }
    } 