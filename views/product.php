<?php require_once '../templates/header.php' ?>
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:400,700&amp;subset=cyrillic,cyrillic-ext" rel="stylesheet">
    <link rel="stylesheet" href="../css/product.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="wrapper">
        <div class="wrapper-work">
            <div class="wrapper-work-product">
                <div class="wrapper-work-product-wrapper">
                    <div class="wrapper-work-product-wrapper-product" style="background-image: url(../images/catalog/9.jpg);">

                    </div> 
                </div>
            </div>
            <div class="product_description">
            <?php 
            // echo "$product->price";
                echo '<div class="product_description-vendor_code">
                      Артикул: 965897
                    </div>';
                echo '<div class="product_description-product_name">
                      <h1>'.$product->title.'</h1>
                     </div>';
                echo '<div class="product_description-price">
                     <p>'.$product->price.' руб.</p>
                     </div>';
                echo '<div class="product_description-description">
                     <p>'.$product->description.'</p>
                    </div>';
                echo '<div class="product_description-product_size-size_number">';
                    
                foreach ($sizes as $size){
                    echo  '<button data-size-id="'.$size->id.'">'.$size->value.'</button>';
                  
                }

                echo '</div>';

            ?>
                <!-- // <div class="product_description-product_name">
                //     <h1>КЕДЫ С ПОЛОСКОЙ</h1>
                // </div>
                // <div class="product_description-vendor_code">
                //     Артикул: 965897
                // </div>
                // <div class="product_description-price">
                //     <p>4 500 руб.</p>
                // </div>
                // <div class="product_description-description">
                //     <p>Отличные кеды из водонепроницаемого материала. Отлично подходят для любой погоды.
                //     Приятно седят на ноге, стильные и комфортные.</p>
                // </div>
                // <div class="product_description-product_size">
                //     <div class="product_description-product_size-text">
                //         РАЗМЕР
                //     </div>
                //     
                // </div> -->
                
                 <div class="product_description-btn" data-product-id="<?php echo $product->id ?>">
                     ДОБАВИТЬ В КОРЗИНУ
                 </div>
            </div>
        </div>            
    </div>
    <script src="../js/jquery-3.3.1.js"></script>
    <script src="../js/add_to_cart_ajax.js"></script>
    <?php require_once '../templates/footer.php' ?>