
(function ($) {
    $('.open_menu_mobile').click(function (e) { 
        e.preventDefault();
        $('.main_menu').addClass('active');
        $('.bg_overlay').addClass('active');
    });

    $('.bg_overlay').click(function (e) { 
        e.preventDefault();
        $('.main_menu').removeClass('active');
        $('.bg_overlay').removeClass('active');
    });

    $( ".sidebar_content .product_list .price" ).each(function( index ) {
        console.log( $(this).text() );
        let price = numberWithCommas($(this).text()/100000);
        $(this).text(price)
    });

    function numberWithCommas(number) {
        var parts = number.toString().split(".");
        parts[0] = parts[0].replace(/\B(?=(\d{3})+(?!\d))/g, ",");
        return parts.join(".");
    }
})(jQuery);