var url = document.location.href;
$(document).ready(function() {
    $("#category").change(function() {
    var categid = $('#category').val();
    console.log(url); 
    console.log(categid); 
    // window.location.replace(url + '?' + 'category' + '=' + categid); 

    return false
    });
});