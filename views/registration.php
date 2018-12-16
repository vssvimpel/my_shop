<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link href="../css/signin.css" rel="stylesheet">
    <?php 
        if (!isset($_GET['error'])) 
        {
            echo "<style>.uae_start {display: none;}</style>";
        }
    ?>
    <title>Страница регистрации</title>
</head>
<body class="text-center">
    <form method="POST" class="form-signin" action="../controllers/registration.php">
        <img class="mb-4" src="" alt="Сюда можно вставить какой то наш логотип" width="72" height="72">
        <h1 class="h3 mb-3 font-weight-normal">Начнем регистрацию</h1>
        <a href="../views/admin_aut.php">Или войдите в свой аккаунт</a><br><br>
        <label for="inputName" class="sr-only">Ваше имя</label>
        <input name="name" type="text" id="inputName" class="form-control" placeholder="Ваше имя" required="" autofocus="">
        <label for="inputEmail" class="sr-only">Email address</label>
        <input name="login" type="email" id="inputEmail" class="form-control" placeholder="Email address" required="" autofocus="">
        <label for="inputPassword" class="sr-only">Password</label>
        <input name="pass" type="password" id="inputPassword" class="form-control" placeholder="Пароль" required="">
        <div class="checkbox mb-3">
            <label>
                <input type="checkbox" value="remember-me"> Запомнить меня
            </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Зарегистрироваться</button>
    </form>
    <div class="uae_start">
        <div class="uae">
            <div class="uae-text">
                <p>Пользователь с таким email уже зарегистрирован. Пожалуйста используйте другую эллектронную почту для <a href="../controllers/registration.php">регистрации</a> или <a href="../controllers/admin_aut.php">авторизуйтесь</a></p>
            </div>
        </div>
    </div>
    <script src="../js/jquery-3.3.1.js"></script>
    <script src="../js/popper.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
</body>
</html>
    