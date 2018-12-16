<?php
session_start();
unset($_SESSION['user_id']);
session_destroy();
header("Location: ../controllers/admin_aut.php");
?>