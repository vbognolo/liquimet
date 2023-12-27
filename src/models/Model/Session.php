<?php
namespace Liquimet\Model;

class Session{
    public $id_user;
    public $username;
    public $name;
    public $gender;
    public $role;

    public function __construct(){
        session_start();                                                      //start or restart session
        
        $this->id_user = $_SESSION['id_user'] ?? 0;                           //set id property of this object
        $this->username = $_SESSION['username'] ?? '';
        $this->name = $_SESSION['name'] ?? '';                                //add user's name to session
        $this->gender = $_SESSION['gender'] ?? '';                        
        $this->role = $_SESSION['role'] ?? 'public';                          //add user's role to session
    }
    
//  ===> CREATE NEW SESSION - ALSO USED TO UPDATE EXISTING SESSION 
    public function create($user){    
        session_regenerate_id(true);                                           //update session id
        
        $_SESSION['id_user'] = $user['id_user'] ;                              //add user id to session
        $_SESSION['username'] = $user['username'];
        $_SESSION['name'] = $user['name'];
        $_SESSION['gender'] = $user['gender'];
        $_SESSION['role'] = $user['role'];
    }
    
//  ===> UPDATE EXISTING SESSION
    public function update($user){
        $this->create($user);
    }
    
//  ===> DELETE EXISTING SESSION
    public function delete(){
        $_SESSION = [];                                                        //empty session superglobal
        
        $param = session_get_cookie_params();                                  //get session cookie parameters
        setcookie(session_name(), '', time() - 2400, $param['path'], $param['domain'], $param['secure'], $param['httponly']);           //clear session cookie
        
        session_destroy();
    }
}