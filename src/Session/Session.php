<?php
namespace Liquimet\Session;

class Session {
    // Properties to store session information
    private $id_user, $username, $name, $id_gender, $role, $title;
    private int $timeout = 3600;

    public function __construct(){
        $this->startSession();

            // Check session expiration
            if ($this->isSessionExpired()) {
                $this->destroy();
                redirect('/login');
                exit();
            }

        // Update last activity timestamp
        $_SESSION['last_activity'] = time();

            // Implement session fingerprinting to prevent hijacking
            if ($this->isLoggedIn() && !$this->validateSessionFingerprint()) {
                $this->destroy();
                redirect('/login');
                exit();
            }

            // Load session data if user is logged in
            if ($this->isLoggedIn()) {
                $this->loadSessionData();      
            }
    }

    // Set session variable
    public function set(string $key, $value) {
        $_SESSION[$key] = $value;
    }
    
    // Get session variable
    public function get(string $key) {
        return $_SESSION[$key] ?? null;
    }

        // Start the session if it's not already started
        public function startSession(): void {
            if (session_status() === PHP_SESSION_NONE) {
                session_start();
            }
        }
        
        // Generate Csrf Token
        public function generateCsrfToken(): string {
            if (!isset($_SESSION['csrf_token'])) {
                $_SESSION['csrf_token'] = bin2hex(random_bytes(32));    // Secure token
            }
            return $_SESSION['csrf_token'];
        }
        
        // Verify Csrf Token
        public function verifyCsrfToken(string $token): bool {
            return isset($_SESSION['csrf_token']) && hash_equals($_SESSION['csrf_token'], $token);
        }
        
        // Log in the user and regenerate the session ID
        public function createSessionData(array $user): void {
            if (!isset($user['id_user'])) {
                // Log an error or handle the case when id_user is missing
                error_log("Error: User is missing data. Session not created.");
                return;                                                 // Pprevent undefined index errors
            }

            session_unset();                                            // Prevent session fixation
            session_regenerate_id(true);            // Regenerate session ID to avoid session fixation

            // Store user information in session
            $_SESSION['id_user'] = $user['id_user'];
            $_SESSION['username'] = $user['username'];
            $_SESSION['name'] = $user['name'];
            $_SESSION['id_gender'] = $user['id_gender'];
            $_SESSION['role'] = $user['role'];
            $_SESSION['title'] = $user['title'];

            // Store session fingerprint for security
            $_SESSION['fingerprint'] = $this->generateSessionFingerprint();
        }

        // Check if the user is logged in
        public function isLoggedIn(): bool {
            return isset($_SESSION['id_user']);
        }

        // Require admin privileges to access a page, otherwise redirect to home page
        public function requireAdmin(): void {
            if (!$this->isLoggedIn()) {
                redirect('/login');
                exit();
            } 
            
            if (!$this->isAdmin()) {
                redirect('/index');
                exit();
            }
        }

        // Check if the user is an admin
        public function isAdmin(): bool {
            return isset($_SESSION['role']) && $_SESSION['role'] === 'admin';
        }

        // Require login to access certain pages, otherwise redirect to the login page
        public function requireLogin(): void {
            if (!$this->isLoggedIn()) {
                redirect('/login');
                exit();
            }
        }

        // Check if session is expired for the logged user
        public function isSessionExpired(): bool {
            return isset($_SESSION['last_activity']) && (time() - $_SESSION['last_activity']) > $this->timeout;
        }

        // Loads session data for the logged user
        private function loadSessionData(): void {
            $this->id_user = $_SESSION['id_user'] ?? null;
            $this->username = $_SESSION['username'] ?? null;
            $this->name = $_SESSION['name'] ?? null;
            $this->id_gender = $_SESSION['id_gender'] ?? null;
            $this->role = $_SESSION['role'] ?? null;
            $this->title = $_SESSION['title'] ?? null;
        }

        // Destroy session and log the user out
        public function destroy(): void {
            session_unset();                // Unset all session variables
            session_destroy();              // Destroy the session
        
            // Ensure no CSRF token exists after logout
            unset($_SESSION['csrf_token']);
        
            redirect('/login');
            exit();
        }

        // Generate a session fingerprint (IP + User Agent)
        private function generateSessionFingerprint(): string {
            return hash('sha256', $_SERVER['REMOTE_ADDR'] . $_SERVER['HTTP_USER_AGENT']);
        }

        // Validate session fingerprint to prevent hijacking
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
        return $this->id_gender;
    }

    public function getRole(): ?string {
        return $this->role;
    }

    public function getTitle(): ?string {
        return $this->title;
    }
}

/*

<?php
namespace Liquimet\Session;

class Session {
    private int $timeout = 3600;

    public function __construct() {
        $this->startSession();
            if($this->isSessionExpired()){
                $this->logout();
                
                redirect('login');
                exit();
            }

        // Update last activity timestamp
        $_SESSION['last_activity'] = time();

        // Prevent session hijacking via fingerprinting
        if($this->isLoggedIn() && !$this->validateSessionFingerprint()){
            $this->logout();
                redirect('login');
                exit();
        }

        // Load session data if user is logged in
        if($this->isLoggedIn()){
            $this->loadSessionData();
        }
    }

    public function startSession(): void {
        if(session_status() === PHP_SESSION_NONE){
            session_start();
        }
    }

    public function createSessionData(array $user): void {
        session_unset();
        session_regenerate_id(true);

        // Store user information in session
        $_SESSION['id_user'] = $user['id_user'];
        $_SESSION['username'] = $user['username'];
        $_SESSION['name'] = $user['name'];
        $_SESSION['gender'] = $user['id_gender'];
        $_SESSION['role'] = $user['role'];
        $_SESSION['title'] = $user['title'];

        // Store session fingerprint for security
        $_SESSION['fingerprint'] = $this->generateSessionFingerprint();
    }

    public function isLoggedIn(): bool {
        return !empty($_SESSION['username']); //isset($_SESSION['id_user']);
    }

        //require login to access certain pages, otherwise redirect to the login page
        public function requireLogin(): void {
            if(!$this->isLoggedIn()){
                redirect('login');
                exit();
            }
        }

        public function isAdmin(): bool {
            return isset($_SESSION['role']) && $_SESSION['role'] === 'admin';
        }
    
        //require admin privileges to access a page, otherwise redirect to home page
        public function requireAdmin(): void {
            if(!$this->isLoggedIn()){
                redirect('login');
                exit();
            } 
            
            if(!$this->isAdmin()){
                redirect('index');
                exit();
            }
        }

    public function logout(): void {
        session_unset();
        session_destroy();
        redirect('login');
        exit();
    }

    private function generateSessionFingerprint(): string {
        return hash('sha256', $_SERVER['REMOTE_ADDR'] . $_SERVER['HTTP_USER_AGENT']);
    }

    private function validateSessionFingerprint(): bool {
        return isset($_SESSION['fingerprint']) &&
               $_SESSION['fingerprint'] === $this->generateSessionFingerprint();
    }
    
    // Generate CSRF Token
    public function generateCsrfToken(): string {
        if(!empty($_SESSION['csrf_token'])){
            $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
        }

        return $_SESSION['csrf_token'];
    }

    // Verify CSRF Token
    public function verifyCsrfToken($token) {
        return isset($_SESSION['csrf_token']) && hash_equals($_SESSION['csrf_token'], $token);
    }

    private function isSessionExpired(): bool {
        return isset($_SESSION['last_activity']) && (time() - $_SESSION['last_activity']) > $this->timeout;
    }

    private function loadSessionData(): void {
        // Load session variables
        $this->id_user = $_SESSION['id_user'] ?? null;
        $this->username = $_SESSION['username'] ?? null;
        $this->name = $_SESSION['name'] ?? null;
        $this->gender = $_SESSION['gender'] ?? null;
        $this->role = $_SESSION['role'] ?? null;
        $this->title = $_SESSION['title'] ?? null;
    }
}

/*class Session {
    //properties to store session information
    private $id_user, $username, $name, $gender, $role, $title;
    private int $timeout = 3600;

    public function __construct(){
        $this->startSession();

        //check session expiration
        if($this->isSessionExpired()){
            $this->logout();
            redirect('login');
            exit();
        }

        //update last activity timestamp
        $_SESSION['last_activity'] = time();

        //implement session fingerprinting to prevent hijacking
        if ($this->isLoggedIn() && !$this->validateSessionFingerprint()){
            $this->logout();
            redirect('login');
            exit();
        }

        //load session data if user is logged in
        if($this->isLoggedIn()){
            $this->loadSessionData();      
        }
    }

    //start the session if it's not already started
    public function startSession(): void {
        if(session_status() === PHP_SESSION_NONE){
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
            redirect('login');
            exit();
        } 
        
        if(!$this->isAdmin()){
            redirect('index');
            exit();
        }
    }

    //require login to access certain pages, otherwise redirect to the login page
    public function requireLogin(): void {
        if(!$this->isLoggedIn()){
            redirect('login');
            exit();
        }
    }

    //change the user's role and regenerate the session ID
    /*public function updateRole(string $new): void {
        session_regenerate_id(true);
        $_SESSION['role'] = $new;
    }

    //change the user's title and regenerate the session ID
    public function updateTitle(string $new): void {
        session_regenerate_id(true);
        $_SESSION['title'] = $new;
    }*/

    //check if session is expired for the logged user
    /*public function isSessionExpired(): bool {
        return isset($_SESSION['last_activity']) && (time() - $_SESSION['last_activity']) > $this->timeout;
    }

    //loads session data for the logged user
    /*private function loadSessionData(): void {
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
        redirect('login');
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

    //generate CSRF token to prevent unauthorized actions and cross-site request forgery
   /* public function generateCsrfToken(): string {
        if(!isset($_SESSION['csrf_token'])){
            $_SESSION['csrf_token'] = bin2hex(random_bytes(32));            //secure random token
        }
            return $_SESSION['csrf_token'];
    }

    //verify CSRF token
    public function verifyCsrfToken(string $token): bool {
        return isset($_SESSION['csrf_token']) && hash_equals($_SESSION['csrf_token'], $token);
    }

    
            // Set session variable
            public function set(string $key, $value) {
                $_SESSION[$key] = $value;
            }

            // Get session variable
            public function get(string $key) {
                return $_SESSION[$key] ?? null;
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
}*/