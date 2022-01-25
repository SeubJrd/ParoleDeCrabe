$(".gallery").imagesLoaded(function () {
  var elem = document.querySelector(".gallery");
  var msnry = new Masonry(elem, {
    // options
    isFitWidth: true,
    itemSelector: ".grid-item",
  });
});
