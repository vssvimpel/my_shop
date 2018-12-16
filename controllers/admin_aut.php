<?php
session_start();	
if(isset($_SESSION["user_id"])){
    header("Location: ../controllers/catalog.php");
} else {
    require_once "../views/admin_aut.php";
}

?>



