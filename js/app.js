$(document).ready(function(){
    $("#ix_js_search_button").click(function(){
        event.stopPropagation();
        $( ".ix_search_input" ).animate({
            width: 200,
            padding: 10,
            opacity: 1
        }, 300 );
        $(".ix_search_input").on("click", function (event) {
            event.stopPropagation();
        });
    });
    $(document).on("click", function () {
        $( ".ix_search_input" ).animate({
            width: 0,
            padding: 10,
            opacity: 0
        }, 300 );
    });

    //slider
    $('.ix_slider').bxSlider({
        controls: true,
        auto: true,
        pager: true,
        mode: 'fade'
    });
    $('.ix_js_foo_slider').bxSlider({
        controls: false,
        auto:true,
        minSlides: 1,
        maxSlides: 5,
        slideWidth: 250,
        slideMargin: 10
    });


    $('.bx_product_slider').bxSlider({
        controls: true,
        pagerCustom: '#bx_product_pager'
    });

    $('.ix_search_left_menu .ix_single h4').on('click', function() {
        $(this).next('ul').toggle();
        $(this).toggleClass("ix_expand");
    });

    $('.ix_search_left_menu .ix_non_expand').on('click', function() {
        $(this).next('ul').toggle();
        $(this).toggleClass("ix_non_expand_inner");
    });


    $(".ix_js_to_top").click(function() {
        $("html, body").animate({ scrollTop: 0 }, "slow");
        return false;
    });


    /*
    var orderSingleView = $('.ix_js_view');
    $(orderSingleView).on('click', function() {
        //$(this).next('.ix_single_order_items').toggleClass('test');

        //$(this).toggleClass("ix_expand");
    });*/



    $(".ix_single_product_variant .ix_product_variant_loop ul li").hover(function () {
       // console.log();
        $(".ix_product_variant_title span").html($(this).attr('title'));
    });


    $('.ix_single_product_details_tab_title li').click(function(){
        var tab_id = $(this).attr('data-tab');

        $('.ix_single_product_details_tab_title li').removeClass('is-active');
        $('.tab-content').removeClass('is-active');

        $(this).addClass('is-active');
        $("#"+tab_id).addClass('is-active');
    });

    $('.ix_js_popup').fancybox({
        padding: 0,
        'titleShow'     : false,
        'transitionIn'	: 'elastic',
        'transitionOut'	: 'elastic',
        'easingIn'      : 'easeOutBack',
        'easingOut'     : 'easeInBack',
        helpers: {
            media: {}
        }
    });

    $('.ix_single_order_items').hide();
    $('.ix_single_order .ix_js_view').click(function() {
        $(this).next('.ix_single_order_items').toggle();
    });

    //mobile menu
    $('.ix_mm_p').click(function () {
        $(this).find('ul').toggleClass('ix_mm_p_l1_act');
    });

    $('.ix_mobile_menu').click(function () {
       $('.ix_mobile_menu_cont').toggle();
    });

    $('.ix_mob_left_menu_btn').click(function () {
       $('.ix_category_left_menu').toggle();
    });

});
$(document).scroll(function() {
    var y = $(this).scrollTop();
    if (y > 800) {
        $('.ix_js_to_top').fadeIn();
    } else {
        $('.ix_js_to_top').fadeOut();
    }
});