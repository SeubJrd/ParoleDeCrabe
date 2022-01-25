$(document).imagesLoaded(function () {
  var $grid = $(".item-detail").isotope({});
  $(".item-menu").on("click", "li ", function () {
    var filterValue = $(this).attr("data-filter");
    $grid.isotope({ filter: filterValue });
  });
});
