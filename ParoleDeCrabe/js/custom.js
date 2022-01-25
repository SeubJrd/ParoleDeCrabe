jQuery(".item-detail").magnificPopup({
  delegate: "a",
  type: "image",
  gallery: {
    enabled: true,
    navigateByImgClick: true,
  },
  Image: {
    titleSrc: "title",
  },
});
