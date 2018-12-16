
<?php require_once '../templates/header.php' ?>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link rel="stylesheet" href="../lib/bootstrap.min.css">
    
    <link rel="stylesheet" href="../css/style.css">
    <title>Document</title>
</head>
<body>
<div class="wrapper">

    <div id="zagolovok">      
    
        <h2 id="vasacart">Ваша корзина</h2>
        <h4 id="podzagolov">Товары резервируются на ограниченное время</h4>
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
        
        <tr>
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
            
        </tr>
        </table>
        
    </div>
    <div id="summ">
        <h4>Итого: <span id="itogo">12500 руб.</span></h4>
    </div>
    <div id="zigzag">
        <svg viewBox="0 0 111.1 14.4">
          <polyline points="0.7,13.7 13.4,0.8 25.3,12.8 37.2,0.8 49,12.8 60.9,0.8 72.8,12.8 84.7"></polyline>
        </svg>
    </div>

    <div id="forma">
        <form action="dostavka" method="post">
            <h3 id="vasacart">Адрес доставки</h3>
            <h5 id="podzagolov">Все поля обязательны для заполнения</h5>
            <div id="zakaz">
                <h4 id="seriy">Выбирете вариант доставки</h4>
                <select name="delivery" id="">
                    <option value="">Курьерская служба - 500 руб</option>
                    <option value="">Сомовывоз</option>
                    <option value="">Почта России</option>
                </select>
            </div>
            <div id="zakaz-lg">
                <div id="zakaz-sml-r">  
                    <h4 id="seriy">Имя</h4>
                    <input type="text" name="" id="pole">
                </div>
                <div id="zakaz-sml-l">
                    <h4 id="seriy">Фамилия</h4>
                    <input type="text" name="" id="pole">    
                </div>
                
            </div>
            <div id="zakaz">
            
                <h4 id="seriy">Адресс</h4>
                <input type="text" name="" id="adress">
            </div>
            <div id="zakaz-lg">
                <div id="zakaz-sml-r"> 

                    <h4 id="seriy">Город</h4>
                    
                    <input type="text" name="" id="pole">
                </div>
                <div id="zakaz-sml-l">
                    <h4 id="seriy">Индекс</h4>
                    <input type="text" name="" id="pole">
                </div>
            </div>
            <div id="zakaz-lg">
                <div id="zakaz-sml-r"> 
                    <h4 id="seriy">Телефон</h4>
                    <input type="tel" name="" id="pole">
                </div>
                <div id="zakaz-sml-l">
                    <h4 id="seriy">Е-MAIL</h4>
                   <input type="email" name="" id="pole">
                </div>
            </div>
    </div>
            <div id="zigzag">
                <svg viewBox="0 0 111.1 14.4">
                <polyline points="0.7,13.7 13.4,0.8 25.3,12.8 37.2,0.8 49,12.8 60.9,0.8 72.8,12.8 84.7"></polyline>
                </svg>
            </div>
        
        <div id="forma">
            <h2 id="vasacart">Варианты оплаты</h2>
            <h5 id="podzagolov">Все поля обязательны для заполнения</h5>
            <div>
                <h3>Стоимость: 12000 руб.</h3>
                <h3>Доставка: 500 руб.</h3>
                <h4 id="itogo">Итого: 12500 руб.</h4>
            </div>
            <div id="zakaz">
                <h3 id="seriy">выберите способ оплаты</h3>
                <select name="pay" id="">
                    <option value="" style="background-image: url(/line/project0408/images/icons/viza.svg);">  Банковская карта
                    
                    </option>
                    <option value="">Счет</option>
                    <option value="">Наличные при получении</option>
                </select>

                <div class="drop-down">
                    <select name="options">
                        <option class="en" value="en" 
                    style="background-image:url('/line/project0408/images/icons/ms.svg');">Банковская карта</option>
                        <option class="fr" value="fr"
                    style="background-image:url('/line/project0408/images/icons/bill.svg');">Счет</option>
                        <option class="nl" value="nl"
                    style="background-image:url('/line/project0408/images/icons/money.svg');">Наличные при получении</option>
                    </select>
                </div> 

                <br>
                <input type="submit" id="btn" value="Заказать">
            </div>
        </div>

    </form>



</div>



<script src="../lib/jquery-3.3.1.js"></script>
<script src="../lib/popper.min.js"> </script>        
<script src="../lib/bootstrap.min.js"> </script>
<script src="../js/drop.js"></script>   
<?php require_once '../templates/footer.php' ?>
