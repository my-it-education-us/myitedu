
    $(function (){
    $(".large_image_window").empty().hide();

    $(".product_icon").mouseover(function (){
    let img_url = $(this).data("img_url");
    let img = "<img class='display_img' src='"+img_url+"'>";
    $(".large_image_window").fadeIn('slow').html(img);

});
    $(".product_icon").mouseleave(function (){
    $(".large_image_window").empty().hide();

});


    $(".shopping_cart").click(function (){
    let data = {};
    $.post("http://myitedu.uz/shopping_cart/shopping_cart.php", data, function (response){
    $("#modal-body").html(response);
});

});
    $(document).on("click", ".remove_item_icon", function (){
    let product_id = $(this).data("product_id");
    let data = {'product_id' :product_id};
    let result = null;
    $.post("http://myitedu.uz/shopping_cart/delete_items.php", data, function (response){

    if (response==1) {
    $.post("http://myitedu.uz/shopping_cart/shopping_cart.php", data, function (response) {
    $("#modal-body").html(response);
    $(".shopping_cart").text(qty);
});
}
});

});
    $(".product").click(function (){
    let product_id = $(this).data('product_id');
    let qty = $("#qty_"+product_id).val();
    let data = {
    'product_id': product_id,
    'qty': qty,
    'user_id': 99
};
    $.post("http://myitedu.uz/shopping_cart/add_shopping_cart.php", data, function (response){
    $(".shopping_cart").text(qty);

});
})
    $("#checkout_button").click(function (){
    $("#checkout").fadeIn("slow");
    $("#staticBackdrop").animate({ scrollTop: $("#staticBackdrop")[0].scrollHeight}, 950);
});

});
