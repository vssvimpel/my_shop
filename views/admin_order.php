
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link rel="stylesheet" href="../lib/bootstrap.min.css">
    
    <link rel="stylesheet" href="../css/style.css">
    <title>Document</title>
</head>
<body>
<div class="wrapper">

<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Номер заказа(id)</th>
      <th scope="col">Статус</th>
      <th scope="col">Адрес</th>
      <th scope="col">Телефон</th>
      <th scope="col">Username</th>
      <th scope="col">ФИО</th>
      <th scope="col">Комментарий</th>
      <th scope="col">Доставка</th>
      <th scope="col">Метод оплаты</th>
    </tr>
  </thead>  
  <tbody>
    <tr>

      <?php echo '<th scope="row">'.$order_id.'</td>'; ?>
     
      <?php echo '<td>'.$order->status.'</td>'; ?>
      <?php echo '<td>'.$order->address.'</td>'; ?>
      <td>+7 120 123 2322</td>
      <td>Ivan</td>
      <td>Иван Петров</td>
      <?php echo '<td>'.$order->comment.'</td>'; ?>
      <td>Курьером</td>
      <td>Наличные</td>
    </tr>
  </tbody>
</table>
<p>Изменить статус</p>
<select name="status" form="update_status">
            <option value="1"><?php echo '<td>'.$order->status.'</td>'; ?></option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
        </select>
<form action="update_status.php" id="update_status">
<input type="submit" class="btn btn-primary" form="update_status" value="Сохранить">
</form>
<div id="zagolovok">      
    
    <h2 id="vasacart">Заказ #Username</h2>
    <h4 id="podzagolov">Товары в корзине</h4>
</div>
<div id="cart">
    <table>
    <tr>
        <th id="seriy">Фото</th>
        <th>
            <div id="prod_title" id="seriy">Наименование
            </div>
            </th> 
        <th id="seriy">Размер</th>
        <th id="seriy">Количество</th>
        <th id="seriy">Стомость</th>
        <th id="seriy">Удалить</th>  
        
    </tr>
    <?php foreach ($products as $product) { 
        echo '<tr><td><div class="product_foto"><img src="../images/'.$product->title.'alt=""></div></td>';
        echo '<td><div id="prod_title"><h4 id="prod">'.$product->title.'</h4><p>арт: 123412</p></div></td>';
        echo '<td><div id="prod_size"><h4 id="prod">'.$product->size.'</div></td>';
        echo '<td><div id="prod_kolvo"><h4 id="prod">'.$product->kolvo.'</h4><div>
        <i class="fas fa-plus-square"></i><br>
        <i class="fas fa-minus-square"></i></i>
        </div></div></td>';
        echo ' <td>3900 руб</td> id="prod">'.$product->price.'</div></td>';
        echo '<td><i class="fas fa-times"></i></td> id="prod">'.$product->title.'</h4><p>арт: 123412</p></div></td></tr>';
        } ?>
    
    <!-- <tr>
        <td>
            <div class="product_foto">
                <img src="../images/product/9.jpg" alt="">
            </div>
        </td>
        <td>
        <div id="prod_title">
            <h4 id="prod">Куртка синяя</h4>
            <p>арт: 123412</p>
        </div>
        </td>
        <td>39</td>
        <td>
            <div id="kolvo">
                <div id="count">1</div> 
                <div>
                <i class="fas fa-plus-square"></i><br>
                <i class="fas fa-minus-square"></i></i>
                </div>
            </div>
        </td>
        <td>3900 руб</td>
        <td><i class="fas fa-times"></i></td>
        
    </tr>
    
    <tr bgcolor="#fdfdfd">
        <td>
                <div class="product_foto">
                    <img src="../images/product/9.jpg" alt="">
                </div>
        </td>
        <td>
            <div id="prod_title">
                <h4 id="prod">Кеды серые</h4>
                <p>арт: 123412</p>
            </div>
        </td>
        <td>39</td>
        <td>
            <div id="kolvo">
                <div id="count">1</div> 
                <div>
                <i class="fas fa-plus-square"></i><br>
                <i class="fas fa-minus-square"></i></i>
                </div>
            </div>
        </td>
        <td>3900 руб</td>
        <td><i class="fas fa-times"></i></td>
    </tr>
    
    <tr>
        <td>
            <div class="product_foto">
                <img src="../images/product/9.jpg" alt="">
            </div>
        </td>
        <td>
            <div id="prod_title">
                <h4 id="prod">Джинсы голубые</h4>
                <p>арт: 123412</p>
            </div>
        </td>
        <td>39</td>
        <td>
            <div id="kolvo">
                <div id="count">1</div> 
                <div>
                <i class="fas fa-plus-square"></i><br>
                <i class="fas fa-minus-square"></i></i>
                </div>
            </div>
        </td>
        <td>3900 руб</td>
        <td><i class="fas fa-times"></i></td>
        
    </tr> -->
    </table>
    
</div>
<div id="summ">
    <h4>Итого: <span id="itogo">12500 руб.</span></h4>
</div>


</div>
<script src="../lib/jquery-3.3.1.js"></script>
<script src="../lib/popper.min.js"> </script>        
<script src="../lib/bootstrap.min.js"> </script>
<script src="../js/drop.js"></script>   
