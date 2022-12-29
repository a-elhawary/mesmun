<?php
    require_once(dirname(__DIR__)."/Models/User.php");

    class UsersController{
        private static function showError($error, $file){
            require_once $file;
        }

        public static function login($email, $password){
            $file = __DIR__."/../Views/Pages/login.php";
	        $users = new User();
	        $users = $users->getBy("email", $email);
            // check user exists
	        if(empty($users)){
                self::showError("Incorrect Email Address", $file);
                return;
	        }
            // check password is correct
            if(!password_verify($password, $users[0]["password"])){
                self::showError("Incorrect Password", $file);
                return;
            }

            setcookie("mesmun_login", $users[0]["id"], time()+24*60*60*1);
            echo '<script> window.location = "'.ObjectManager::getBase().'";</script>';
        }

        public static function register(){
            $error = "";
            $file = __DIR__."/../Views/Pages/register.php";

            // Check that all of the form is submitted
            if(empty($_POST["first_name"])){
                self::showError("First Name Field Required", $file);
                return;
            }
            if(empty($_POST["last_name"])){
                self::showError("Last Name Field Required", $file);
                return;
            }
            if(empty($_POST["email"])){
                self::showError("Email Field Required", $file);
                return;
            }
            if(empty($_POST["password"])){
                self::showError("Password Field Required", $file);
                return;
            }
            if(empty($_POST["confirm-password"])){
                self::showError("Confirm Password Field Required", $file);
                return;
            }

            // Check that passwords match
            if($_POST["password"] != $_POST["confirm-password"]){
                self::showError("Passwords Don't Match", $file);
                return;
            }

            // Check that email is available
            $user = new User();
            $usersWithEmail = $user->getBy("email", $_POST["email"]);
            if(count($usersWithEmail) != 0){
                self::showError("Email Already Registered", $file);
                return;
            }

            // Create and Login User
            $isSuccessful = true;
            unset($_POST["submit"]);
            unset($_POST["confirm-password"]);
            $password = $_POST["password"];
            $_POST["password"] = password_hash($password, PASSWORD_DEFAULT);
            $_POST["role"] = 0;
            $user->insert($_POST);
            self::login($_POST["email"], $password);
        }
    }
?>
