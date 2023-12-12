<?php
namespace Liquimet\Model;

class Model{
    protected $db = null;                   // stores reference to database object
    protected $category = null;             // stores reference to database object
    protected $transport = null;            // stores reference to transport object
    protected $quantity = null;             // stores reference to quantity object
    protected $partial = null;              // stores reference to partial object
    protected $transaction = null;          // stores reference to transaction object
    protected $user = null;                 // stores reference to user object
    protected $session = null;              // stores reference to session object

    public function __construct($dsn, $username, $password){
        $this->db = new Database($dsn, $username, $password);           // create database object
    }   
    
    public function getCategory(){
        if($this->category === null){                                  // if $transport property null
            $this->category = new Category($this->db);                // create transport object
        }
        
        return $this->category;                                          
    }

    public function getTransport(){
        if($this->transport === null){                                  // if $transport property null
            $this->transport = new Transport($this->db);                // create transport object
        }
        
        return $this->transport;                                          
    }
    
    public function getQuantity(){
        if($this->quantity === null){                         
            $this->quantity = new Quantity($this->db);            
        }
        
        return $this->quantity;                                 
    }
    
    public function getPartial(){
        if($this->partial === null){                         
            $this->partial = new Partial($this->db);            
        }
        
        return $this->partial;                                 
    }
    
    public function getTransaction(){
        if($this->transaction === null){                         
            $this->transaction = new Transaction($this->db);            
        }
        
        return $this->transaction;                                 
    }    

    public function getUser(){
        if($this->user === null){                       
            $this->user = new User($this->db);        
        }
        
        return $this->user;                               
    }
    
    public function getSession(){
        if($this->session === null){                       
            $this->session = new Session();        
        }
        
        return $this->session;                               
    }

    public function lastInsertId(){        
        return $this->db->lastInsertId();                               
    }
}