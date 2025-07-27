<?php
class User {
    private $db;

    public function __construct() {
        $this->db = new Database(); // Usa el conector del framework
    }

    public function findByEmail($email) {
        $this->db->query("SELECT * FROM users WHERE email = :email");
        $this->db->bind(':email', $email);
        return $this->db->single();
    }

    public function register($data) {
        $this->db->query("INSERT INTO users (username, email, password) VALUES (:username, :email, :password)");
        $this->db->bind(':username', $data['username']);
        $this->db->bind(':email', $data['email']);
        $this->db->bind(':password', $data['password']); // Hasheada
        return $this->db->execute();
    }
}