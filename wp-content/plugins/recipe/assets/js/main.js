(function ($) {
  $("#recipe_rating").on("rated", function () {
    $(this).rateit("readonly", true);

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
