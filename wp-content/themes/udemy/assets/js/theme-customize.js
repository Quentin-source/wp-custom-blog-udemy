/**
 * Created by test on 3/27/2017.
 */
(function($){
wp.customize('ju_header_show_search', (value) => {
    value.bind((new_val)=>$("#top-search").toggle());
});

wp.customize('ju_header_show_cart', (value) => {
    value.bind((new_val)=>$("#top-cart").toggle());
});

})(jQuery);