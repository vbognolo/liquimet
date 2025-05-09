<?php
namespace Liquimet\Model;

class LoginAttempt {
    private $db;
    private const MAX_ATTEMPTS = 5;
    private const LOCK_MINUTES = 15;

    public function __construct(Database $db){           // Runs when object created using class
        $this->db = $db;                                 // Add ref to database object
    }

    public function logAttempt(string $ip, bool $success): void {
        $sql = "INSERT INTO login_attempts (ip, success, attempt_time) 
                VALUES (:ip, :success, NOW())";

        $this->db->runSQL($sql, [
            ':ip' => $ip, ':success' => $success ? 1 : 0
        ]);
    }

    public function isLocked(string $ip): bool {
        $sql = "SELECT COUNT(*) FROM login_attempts 
                WHERE ip = :ip 
                AND success = 0 
                AND attempt_time > (NOW() - INTERVAL :minutes MINUTE)";

        $stmt = $this->db->prepare($sql);
        $stmt->bindValue(':ip', $ip);
        $stmt->bindValue(':minutes', self::LOCK_MINUTES, \PDO::PARAM_INT);
        $stmt->execute();
        $failures = $stmt->fetchColumn();

        return $failures >= self::MAX_ATTEMPTS;
    }

    public function getRecentFailures(int $limit = 100): array {
        $sql = "SELECT ip, COUNT(*) as fail_count, MAX(attempt_time) as last_fail
                FROM login_attempts
                WHERE success = 0
                GROUP BY ip
                ORDER BY last_fail DESC
                LIMIT :limit";
        $stmt = $this->db->prepare($sql);        
        $stmt->bindValue(':limit', $limit, \PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetchAll();
    }
    
}
