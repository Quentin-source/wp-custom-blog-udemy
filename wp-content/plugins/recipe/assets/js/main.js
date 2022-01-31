(function ($) {
    console.log('hello');
    

    $("#recipe_rating").on("rated", function () {
        
        let form = {
            action: "r_rate_recipe",
            rid: $(this).data("rid"),
            rating: $(this).rateit("value"),
        };

    $.post(recipe_obj.ajax_url, form, function (data) {
      console.log("hello");
    });
  });
})(jQuery);
