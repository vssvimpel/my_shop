<?php 
require_once '../models/User.php';
session_start();
if(isset($_POST["login"])){
    // var_dump($_POST);die;
    if(!empty($_POST['login']) && !empty($_POST['pass'])) {
        $login = ($_POST['login']);
        $user_pass = ($_POST['pass']);
        $user = User::getUserByLogin($login);
        if ($user == false) {
            header("Location: ../controllers/admin_aut.php?error=1");
        } else {
            $user_pass = ($_POST['pass']);
            $hash = password_verify($user_pass, $user->pass);
            // var_dump($hash);die;
            if ($hash == false) {
                header("Location: ../controllers/admin_aut.php?error=1"); 
            } else {
                $_SESSION['user_id'] = $user->id;
                header("Location: ../controllers/catalog.php");  
            }
        }
    }
}
?>



