<?php
namespace Liquimet\Model;

class Model{
    protected $db = null;                   //stores reference to database object
    protected $platform = null;             //stores reference to platform object
    protected $transport = null;            //stores reference to transport object
    protected $quantity = null;             //stores reference to quantity object
    protected $partial = null;              //stores reference to partial object
    protected $transaction = null;          //stores reference to transaction object
    protected $user = null;                 //stores reference to user object
    protected $session = null;              //stores reference to session object

    public function __construct($dsn, $username, $password){
        $this->db = new Database($dsn, $username, $password);               //create database object
    }   
    
    public function getPlatform(){
        if($this->platform === null){                                       //if $platform property null
            $this->platform = new Platform($this->db);                      //create platform object
        }
        
        return $this->platform;                                          
    }
 
    public function getTransport(){
        if($this->transport === null){                                  
            $this->transport = new Transport($this->db);                
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