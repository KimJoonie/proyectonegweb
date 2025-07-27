<?php
class Auth {
    public static function check() {
        return isset($_SESSION['user_id']);
    }

    public static function user() {
        return $_SESSION['username'] ?? null;
    }

    public static function requireLogin() {
        if (!self::check()) {
            header('Location: /login');
            exit();
        }
    }
}