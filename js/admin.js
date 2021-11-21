/**
 * Created by Joel on 1/09/16.
 */
$(document).foundation();


$(document).ready(function () {
    $("#ix_js_page_cont_wrap").load("views/page_stats.php");

    $('.ix_admin_left_menu_main_ul ul').hide();
    $('.ix_admin_left_menu li').on('click', function() {
        //$(this).next('ul').toggle();
        $(this).toggleClass('ix_active').siblings().removeClass('ix_active');
        //$(this).toggleClass("ix_show_pil_down");
        $(this).next('h5').toggleClass("ix_show_pil_down");

    });


});

$(".ix_admin_left_menu a").click(function () {
    var pageTitle = $(this).attr('title');
    switch (pageTitle) {
        case 'Stats':
            $("#ix_js_page_cont_wrap").load("views/page_stats.php");
            break;
        case 'Visits':
            $("#ix_js_page_cont_wrap").load("views/page_visits.php");
            break;
        case 'Product Sales':
            $("#ix_js_page_cont_wrap").load("views/page_product_sales.php");
            break;
        default:
            $("#ix_js_page_cont_wrap").load("views/stats.php");
    }
});

var inputs = document.querySelectorAll( '.ix_input_file' );
Array.prototype.forEach.call( inputs, function( input )
{
    var label	 = input.nextElementSibling,
        labelVal = label.innerHTML;

    input.addEventListener( 'change', function( e )
    {
        var fileName = '';
        if( this.files && this.files.length > 1 )
            fileName = ( this.getAttribute( 'data-multiple-caption' ) || '' ).replace( '{count}', this.files.length );
        else
            fileName = e.target.value.split( '\\' ).pop();

        if( fileName )
            label.querySelector( 'span' ).innerHTML = fileName;
        else
            label.innerHTML = labelVal;
    });
});