<?php
namespace Liquimet\Session;

class Session {
    private int $timeout = 3600;

    public function __construct() {
        $this->startSession();
        if ($this->isSessionExpired()) {
            $this->destroySession();
            redirect('login');
            exit();
        }
        $_SESSION['last_activity'] = time();
        if ($this->isLoggedIn() && !$this->validateSessionFingerprint()) {
            $this->destroySession();
            redirect('login');
            exit();
        }
    }

    public function startSession(): void {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }
    }

    public function createSessionData(array $user): void {
        if (!isset($user['id_user'])) {
            error_log("Session creation failed: Missing 'id_user'");
            return;
        }
        session_unset();
        session_regenerate_id(true);
        $_SESSION['id_user'] = $user['id_user'];
        $_SESSION['username'] = $user['username'];
        $_SESSION['role'] = $user['role'];
        $_SESSION['fingerprint'] = $this->generateSessionFingerprint();
    }

    public function isLoggedIn(): bool {
        return isset($_SESSION['id_user']);
    }

    public function requireLogin(): void {
        if (!$this->isLoggedIn()) {
            redirect('login');
            exit();
        }
    }

    public function isSessionExpired(): bool {
        return isset($_SESSION['last_activity']) && (time() - $_SESSION['last_activity']) > $this->timeout;
    }

    public function destroySession(): void {
        session_unset();
        session_destroy();
        redirect('login');
        exit();
    }

    private function generateSessionFingerprint(): string {
        return hash('sha256', $_SERVER['REMOTE_ADDR'] . $_SERVER['HTTP_USER_AGENT']);
    }

    private function validateSessionFingerprint(): bool {
        return isset($_SESSION['fingerprint']) && $_SESSION['fingerprint'] === $this->generateSessionFingerprint();
    }

    public function generateCsrfToken(): string {
        if (!isset($_SESSION['csrf_token'])) {
            $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
        }
        return $_SESSION['csrf_token'];
    }

    public function verifyCsrfToken(string $token): bool {
        return isset($_SESSION['csrf_token']) && hash_equals($_SESSION['csrf_token'], $token);
    }
}