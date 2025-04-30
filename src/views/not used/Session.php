<?php
namespace Liquimet\Model;

class Session {
    //properties to store session information
    private $id_user, $username, $name, $gender, $role, $title;
    private int $timeout = 3600;

    public function __construct(){
        $this->startSession();

        //check session expiration
        if ($this->isSessionExpired()) {
            $this->logout();
            redirect('/login');
            exit();
        }

        //update last activity timestamp
        $_SESSION['last_activity'] = time();

        //implement session fingerprinting to prevent hijacking
        if ($this->isLoggedIn() && !$this->validateSessionFingerprint()) {
            $this->logout();
            redirect('/login');
            exit();
        }

        //load session data if user is logged in
        if ($this->isLoggedIn()) {
            $this->loadSessionData();      
        }
    }

    //start the session if it's not already started
    public function startSession(): void {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }
    }

    //log in the user and regenerate the session ID
    public function createSessionData(array $user): void {
        if(!isset($user['id_user'])){
            //log an error or handle the case when id_user is missing
            error_log("Error: User data is missing 'id_user'. Session not created.");
            return;                                                 //prevent undefined index errors
        }

        session_unset();                                            //prevent session fixation
        session_regenerate_id(true);            //regenerate session ID to avoid session fixation

        //store user information in session
        $_SESSION['id_user'] = $user['id_user'];
        $_SESSION['username'] = $user['username'];
        $_SESSION['name'] = $user['name'];
        $_SESSION['gender'] = $user['id_gender'];
        $_SESSION['role'] = $user['role'];
        $_SESSION['title'] = $user['title'];

        //store session fingerprint for security
        $_SESSION['fingerprint'] = $this->generateSessionFingerprint();
    }

    //check if the user is logged in
    public function isLoggedIn(): bool {
        return isset($_SESSION['id_user']);
    }

    //check if the user is an admin
    public function isAdmin(): bool {
        return isset($_SESSION['role']) && $_SESSION['role'] === 'admin';
    }

    //require admin privileges to access a page, otherwise redirect to home page
    public function requireAdmin(): void {
        if(!$this->isLoggedIn()){
            redirect('/login');
            exit();
        } 
        
        if(!$this->isAdmin()){
            redirect('/index');
            exit();
        }
    }

    //require login to access certain pages, otherwise redirect to the login page
    public function requireLogin(): void {
        if(!$this->isLoggedIn()){
            redirect('/login');
            exit();
        }
    }

    //change the user's role and regenerate the session ID
    public function updateRole(string $new): void {
        session_regenerate_id(true);
        $_SESSION['role'] = $new;
    }

    //change the user's title and regenerate the session ID
    public function updateTitle(string $new): void {
        session_regenerate_id(true);
        $_SESSION['title'] = $new;
    }

    //check if session is expired for the logged user
    public function isSessionExpired(): bool {
        return isset($_SESSION['last_activity']) && (time() - $_SESSION['last_activity']) > $this->timeout;
    }

    //loads session data for the logged user
    private function loadSessionData(): void {
        $this->id_user = $_SESSION['id_user'] ?? null;
        $this->username = $_SESSION['username'] ?? null;
        $this->name = $_SESSION['name'] ?? null;
        $this->gender = $_SESSION['gender'] ?? null;
        $this->role = $_SESSION['role'] ?? null;
        $this->title = $_SESSION['title'] ?? null;
    }

    //destroy session and log the user out
    public function logout(): void {
        session_unset();        //remove all session variables
        session_destroy();      //destroy the session
        redirect('/login');
        exit();
    }

    //generate a session fingerprint (IP + User Agent)
    private function generateSessionFingerprint(): string {
        return hash('sha256', $_SERVER['REMOTE_ADDR'] . $_SERVER['HTTP_USER_AGENT']);
    }

    //validate session fingerprint to prevent hijacking
    private function validateSessionFingerprint(): bool {
        return $this->isLoggedIn() &&
               isset($_SESSION['fingerprint']) &&
               $_SESSION['fingerprint'] === $this->generateSessionFingerprint();
    }

    //getters for session properties 
    public function getID(): ?int {
        return $this->id_user;
    }

    public function getUsername(): ?string {
        return $this->username;
    }

    public function getName(): ?string {
        return $this->name;
    }

    public function getGender(): ?int {
        return $this->gender;
    }

    public function getRole(): ?string {
        return $this->role;
    }

    public function getTitle(): ?string {
        return $this->title;
    }
}
/*
namespace Liquimet\Model;

class Session{
    public $id_user;
    public $username;
    public $name;
    public $id_gender;
    public $role;
    public $title;

    public function __construct(){
        session_start();                                                      //start or restart session
        
        $this->id_user = $_SESSION['id_user'] ?? 0;                           //set id property of this object
        $this->username = $_SESSION['username'] ?? '';
        $this->name = $_SESSION['name'] ?? '';                                //add user's name to session
        $this->id_gender = $_SESSION['id_gender'] ?? '';                        
        $this->role = $_SESSION['role'] ?? '';                                //add user's role to session
        $this->title = $_SESSION['title'] ?? '';                    
    }
    
//  ===> CREATE NEW SESSION - ALSO USED TO UPDATE EXISTING SESSION 
    public function create($user){    
        session_regenerate_id(true);                                           //update session id
        
        $_SESSION['id_user'] = $user['id_user'] ;                              //add user id to session
        $_SESSION['username'] = $user['username'];
        $_SESSION['name'] = $user['name'];
        $_SESSION['id_gender'] = $user['id_gender'];
        $_SESSION['role'] = $user['role'];
        $_SESSION['title'] = $user['title'];
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
}*/