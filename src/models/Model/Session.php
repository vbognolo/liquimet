<?php
namespace Liquimet\Model;

class Session{
    public $id_user;
    public $username;
    public $member;
    public $role;

    public function __construct(){
        session_start();                                                      // start or restart session
        
        $this->id_user = $_SESSION['id_user'] ?? 0;                           // set id property of this object
        $this->username = $_SESSION['username'] ?? '';         
        $this->member = $_SESSION['member'] ?? '';
        $this->role = $_SESSION['role'] ?? '';                             
    }
    
//          --> ! CREATE NEW SESSION - ALSO USED TO UPDATE EXISTING SESSION ! <--
    public function create($user){    
        session_regenerate_id(true);                                           // update session id
        
        $_SESSION['id_user'] = $user['id_user'] ;                              // add user id to session
        $_SESSION['username'] = $user['username'];
        $_SESSION['member'] = $user['member'];
        $_SESSION['role'] = $user['role'];
    }
    
//          --> ! UPDATE EXISTING SESSION ! <--
    public function update($user){
        $this->create($user);
    }
    
//          --> ! DELETE EXISTING SESSION ! <--
    public function delete(){
        $_SESSION = [];                                             // empty session superglobal
        
        $param = session_get_cookie_params();                       // get session cookie parameters
        setcookie(session_name(), '', time() - 2400, $param['path'], $param['domain'], $param['secure'], $param['httponly']);           // clear session cookie
        
        session_destroy();
    }
}