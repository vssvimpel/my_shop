<?php require_once '../templates/header.php' ?>
    <title>Каталог</title>
    <link rel="stylesheet" href=../css/catalog.css>
</head>
<body>
<div class="main_wrapper">
    <div class="wrapper">
        <div class="title">
            <h1><?php echo $collection_title?></h1>
            <h2><?php echo $category_title?></h2>
        </div>
        <div class="options">
        <select name="category" id="category">
            <?php echo '<option value="">Все категории</option>';?>
            <?php foreach ($categories as $category) {
            echo '<option value="'.$category->id.'" data-category-id="'.$category->id.'">'.$category->title.'</option>';
            } ?>
            </select>
            <select name="size" id="size">
                <option>Размер</option>
            </select>
            <select name="cost" id="cost">
                <option>Стоимость</option>
                <option>0-1000</option>
                <option>1000-3000</option>
                <option>3000-6000</option>
                <option>6000-20000</option>
            </select>
        </div>
        <div class="all_products">
            <?php foreach ($products as $product) { ?>
                <a href="product.php?id=<?php echo $product->id?>">
                <div class="item">
                    <div class="product"><?php echo '<img src="../images/catalog/'.$product->image.'" align="left" width="217" height="253">'?></div>
                    <p class="description"><?php echo $product->title?> </p>
                    <p class="price"><?php echo $product->price?></p>
                </div> </a>
           <?php } ?> 
        </div>
        <div class="buttons">
            <button>1</button>
            <button>2</button>
            <button>3</button>
            <button>4</button>
        </div>
    </div>
</div>

<?php require_once '../templates/footer.php' ?>