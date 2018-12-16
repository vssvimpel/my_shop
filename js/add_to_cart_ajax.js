$(document).ready(function() {
    $(".product_description-btn").click(function() {
        var product_id = $(this).attr('data-product-id');
        var size_id = $(this).attr('data-size-id');

        $.ajax({
            url: "add_to_cart.php",
            type: 'POST',
            data: {product_id: product_id, size_id: size_id},
            success: function(response) {
                if (response) {
                    alert('Товар добавлен в корзину');
                } else {
                    alert('Товар уже в корзине');
 
                }
            }
        });

    return false
    });


});