var url = document.location.href;
console.log(url);

$(document).ready(function() {
    $("#category").change(function() {
    var categid = $('#category').val();
        window.location.replace(url + '&' + 'category_id' + '=' + categid);
    });
    $("#size").change(function() {
    var size = $('#size').val();
        window.location.replace(url + '&' + 'size_id' + '=' + size);
    });
    // $("#cost").change(function() {
    //     var cost = $('#cost').val();
        
    //     window.location.replace(url + '&' + 'price' + '=' + cost);
    // });
    $('#cost').change(function(){
        var cost = $('#cost').val();
        console.log(cost);
    });
});
