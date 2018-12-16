<?php 
require_once '../models/User.php';
session_start();
if(isset($_POST["login"])){
    // var_dump($_POST);die;
    if(!empty($_POST['login']) && !empty($_POST['pass'])) {
        $name = ($_POST['name']);
        $login = ($_POST['login']);
        $hash = password_hash($_POST['pass'], PASSWORD_DEFAULT);
        $pass = $hash;
        $user = User::create($name, $login, $pass);
        if ($user == false) {       
            header("Location: ../controllers/registration.php?error=user_already_exists");
        } else {
            $query;
            $user = User::getUserByLogin($login);
            $_SESSION['user_id'] = $user->id;
            header("Location: ../controllers/catalog.php");
        }
    }
}
require_once '../views/registration.php';

?>



