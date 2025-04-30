<?php
namespace Liquimet\Core;

use Liquimet\Session\Session;

class Router {
    protected array $postRoutes = [];
    protected array $getRoutes = [];
    protected Session $session;

    public function __construct(Session $session) {
        $this->session = $session;  // Use the existing session class
    }

    public function post(string $action, callable $callback): void {
        $this->postRoutes[$action] = $callback;
    }

    public function get(string $action, callable $callback): void {
        $this->getRoutes[$action] = $callback;
    }

    public function dispatch(?string $action): void {
        // CSRF Token Check for POST requests
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && !$this->checkCsrf()) {
            echo json_encode(['success' => false, 'message' => 'CSRF token missing or invalid.']);
            http_response_code(400);
            return;
        }

        $method = $_SERVER['REQUEST_METHOD'];

        if ($method === 'POST' && isset($this->postRoutes[$action])) {
            call_user_func($this->postRoutes[$action]);
        } elseif ($method === 'GET' && isset($this->getRoutes[$action])) {
            call_user_func($this->getRoutes[$action]);
        } else {
            header('Content-Type: application/json');
            echo json_encode(['success' => false, 'message' => 'Invalid action.']);
            http_response_code(400);
        }
    }

    private function checkCsrf(): bool {
        if (!isset($_POST['csrf_token']) || !is_string($_POST['csrf_token'])) {
            return false;
        }
    
        return $this->session->verifyCsrfToken($_POST['csrf_token']);
    }
    
}
