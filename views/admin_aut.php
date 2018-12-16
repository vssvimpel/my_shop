<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link href="../css/signin.css" rel="stylesheet">
    <title>Страница входа</title>
</head>
<body class="text-center">
    <form method="POST" class="form-signin" action="../controllers/autorization.php">
        <img class="mb-4" src="" alt="Сюда можно вставить какой то наш логотип" width="72" height="72">
        <h1 class="h3 mb-3 font-weight-normal">Пожалуйста, авторизуйтесь</h1>
        <a href="../controllers/registration.php">Или зарегистрируйтесь</a><br><br>
        <label for="inputEmail" class="sr-only">Email address</label>
        <input name="login" type="email" id="inputEmail" class="form-control" placeholder="Email address" required="" autofocus="">
        <label for="inputPassword" class="sr-only">Password</label>
        <input name="pass" type="password" id="inputPassword" class="form-control" placeholder="Пароль" required="">
        <div class="checkbox mb-3">
            <label>
                <input type="checkbox" value="remember-me"> Запомнить меня
            </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Авторизоваться</button>
    </form>
    <script src="../js/jquery-3.3.1.js"></script>
    <script src="../js/popper.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
</body>
</html>
    