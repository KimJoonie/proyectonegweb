<?php
class AuthController {
    private $userModel;

    public function __construct() {
        $this->userModel = new User();
    }

    public function login() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $email = trim($_POST['email']);
            $password = $_POST['password'];

            $user = $this->userModel->findByEmail($email);

            if ($user && password_verify($password, $user->password)) {
                $_SESSION['user_id'] = $user->id;
                $_SESSION['user_email'] = $user->email;
                $_SESSION['username'] = $user->username;
                header('Location: /home');
            } else {
                $error = "Credenciales inválidas.";
            }
        }

        require_once 'Views/auth/login.php';
    }

    public function register() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $data = [
                'username' => trim($_POST['username']),
                'email' => trim($_POST['email']),
                'password' => password_hash($_POST['password'], PASSWORD_BCRYPT)
            ];
            $this->userModel->register($data);
            header('Location: /login');
        }

        require_once 'Views/auth/register.php';
    }

    public function logout() {
        session_destroy();
        header('Location: /login');
    }
}

require_once 'Core/Auth.php';
Auth::requireLogin();