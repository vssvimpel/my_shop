<?php 
$login = (isset($_SESSION["user_id"]));
if (isset($_SESSION["user_id"]) && $_SESSION["user_id"] > 0)
{
    echo "<style> .login {display: none;} </style>";
    echo "<style> .logout {display: block;} </style>";
} else {
    echo "<style> .login {display: block;} </style>";
    echo "<style> .logout {display: none;} </style>";
}
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/header.css">

    <!-- Остальные стили карежат мою верстку. Отключил временно. -->
    
    <link rel="stylesheet" href="../css/main_style.css">
    <link rel="stylesheet" href="../css/catalog.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/product.css">
    <link rel="stylesheet" href="../css/footer.css">
    <title><?php echo $page_title?> </title>
</head>
<body>
    <div class="wrapper">
        <div class="header">
            <div class="header-logo">
                <a class="logo" href="../controllers/main.php"></a> 
                <!-- Как вариант -->
                <!-- <img src="images/logo.jpg" alt=""> -->
            </div>
            <div class="header-navigation">  
                <a href="../controllers/catalog.php?collection_id=2">Женщинам</a>
                <a href="../controllers/catalog.php?collection_id=1">Мужчинам</a>
                <a href="../controllers/catalog.php?collection_id=3">Детям</a>
                <a href="../controllers/catalog.php">Новинки</a>
                <a href="../controllers/main.php">О нас</a> 
            </div>   
            <div class="header-enter">
                <img src="../images/header/account.png" alt=""> 
                <a class="login" href="../controllers/admin_aut.php">Войти</a>
                <a class="logout" href="../controllers/logout.php">Выйти</a>
                <img src="../images/header/bascet.png" alt=""> 
                <a href="#">Корзина (0)</a>


            </div>  
            
        </div>
  
