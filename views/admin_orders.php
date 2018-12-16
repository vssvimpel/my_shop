<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/main_style.css">

    <title>Список заказов</title>
</head>
<body>
    <div class="wrapper">
        <div class="orders">
            <h1>Список заказов</h1>
            <p>Панель администратора</p>
        </div>
        <table class="table table-hover">
            <thead>
                <tr>
                <th scope="col">ID</th>
                <th scope="col">Статус заказа</th>
                <th scope="col">Адрес</th>
                <th scope="col">Имя клиента</th>
                <th scope="col">Комментарий к заказу</th>
                </tr>
            </thead>
            <tbody>
                <!-- путь в ссылке проверить!! -->
                <?php foreach ($orders as $order) {
                    echo '<tr>';
                    echo '<td><a href="admin_order.php?order_id='.$order->id.'">'.$order->id.'</a></td>';
                    echo '<td><a href="admin_order.php?order_id='.$order->id.'">'.$order->status.'</a></td>';
                    echo '<td><a href="admin_order.php?order_id='.$order->id.'">'.$order->address.'</a></td>';
                    echo '<td><a href="admin_order.php?order_id='.$order->id.'">'.$order->user_id.'</a></td>';
                    echo '<td><a href="admin_order.php?order_id='.$order->id.'">'.$order->comment.'</a></td>';
                    echo '</tr>';
                } ?>
            </tbody>
        </table>
    </div>
    



    <script src="../js/jquery-3.3.1.js"></script>
    <script src="../js/popper.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
</body>
</html>
    