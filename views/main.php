<?php require_once '../templates/header.php' ?>
        <div class="new_collections">
            <div class="new_collection_text">
                <h1>НОВЫЕ ПОСТУПЛЕНИЯ ВЕСНЫ</h1>
                <h3>Мы подготовили для Вас лучшие новинки сезона</h3>
                <!-- ссылки не рабочие. Подумать куда какая ссылка будет вести. Пока можно сделать все на каталог чтобы ссылалось -->
                <a href="../controllers/catalog.php" class="btn">ПОСМОТРЕТЬ НОВИНКИ</a>
            </div>
        </div>
        <div class="navigation_info">
            <div class="navigation_info_blocks">
                <div class="info_block_woman">
                    <a href="#">ДЖИНСОВЫЕ КУРТКИ <br> NEW ARRIVALS</a>
                </div>
                <div class="info_block_belt"></div>
            </div>
            <div class="navigation_info_blocks">
                <div class="info_block_lightgray">
                    <div class="image">
                    </div>
                    <div class="text">
                        <p>Каждый сезон мы подготавливаем для Вас исключительно лучшую модную одежду. Следите за нашими новинками</p>
                    </div>
                </div>
                <div class="info_block_jeans">
                    <a href="#">ДЖИНСЫ <br> от 3200 руб.</a>
                </div>
                <div class="info_block_gray">
                    <img src="../images/main/icons/left-arrow.svg" alt="arrow">
                    <a href="#">АКСЕССУАРЫ</a>
                </div>
            </div>
            <div class="navigation_info_blocks">
                <div class="info_block_shoes"></div>
                <div class="info_block_lightgray">
                    <div class="image">
                    </div>
                    <div class="text">
                        <p>Самые низкие цены в Москве. Нашли дешевле - вернем разницу!</p>
                    </div>
                </div>
                <div class="info_block_sport">
                    <a href="#">Спортивная одежда <br> от 590 руб.</a>
                </div>
            </div>
            <div class="navigation_info_blocks">
                <div class="info_block_gray">
                    <img src="../images/main/icons/left-arrow.svg" alt="arrow">
                    <a href="#">ЭЛЕГАНТНАЯ ОБУВЬ <br> БОТИНКИ, КРОССОВКИ</a>
                </div>
                <div class="info_block_children">
                    <a href="#">ДЕТСКАЯ ОДЕЖДА <br> NEW ARRIVAL</a>
                </div>
            </div>
        </div>
        <div class="loyality">
            <div class="loyality_form">
                <h2>БУДЬ ВСЕГДА В КУРСЕ ВЫГОДНЫХ ПРЕДЛОЖЕНИЙ</h2>
                <p>подписывайся и следи за выгодными предложениями</p>
                <input type="text" name="" placeholder="Введите Ваш e-mail">
                <input type="submit" value="Отправить">
                <!-- в этот блок можно выводить информацию, если e-mail введен некорректно -->
                <div class="loyality_form_warning"></div>
            </div>
            
        </div>
<?php require_once '../templates/footer.php' ?>
