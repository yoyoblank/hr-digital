var elements_visible = document.getElementsByClassName("btn-visible");
var elemente_btn_plus = document.getElementsByClassName("btn-plus");
var elemente_btn_minus = document.getElementsByClassName("btn-minus");

Array.prototype.forEach.call(elements_visible,function(child) {
    $(child).click(function(){
        var parent = $(child).parent().parent();
        var article = parent.children(".article").text();
        $(parent).addClass("no-visible");
        $.ajax({
            url: '/visible.php',
            method: 'post',
            data: {article: article}
        });
    });
});
Array.prototype.forEach.call(elemente_btn_plus,function(child) {
    $(child).click(function(){
        var parent = $(child).parent().children(".quantity");
        var name = $(child).parent().parent().children(".name").text();
        var quantity = parent.text();
        quantity = parseInt(quantity, 10);
        quantity ++;
        parent.html(quantity);
        $.ajax({
            url: '/quantity.php',
            method: 'post',
            data: {quantity: quantity,name: name}
        });
    });
});
Array.prototype.forEach.call(elemente_btn_minus,function(child) {
    $(child).click(function(){
        var parent = $(child).parent().children(".quantity");
        var name = $(child).parent().parent().children(".name").text();
        var quantity = parent.text();
        quantity = parseInt(quantity, 10);
        quantity --;
        if(quantity > 0){
        parent.html(quantity);
        $.ajax({
            url: '/quantity.php',
            method: 'post',
            data: {quantity: quantity,name: name}
        });
        }
    });
});