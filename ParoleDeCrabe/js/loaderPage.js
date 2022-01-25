$(window).on("load", function () {
  $(".loader-wrapper").fadeOut("slow");
});

let buttons = document.querySelectorAll(".filter ul li ");
buttons.forEach((button) => {
  button.addEventListener("click", function () {
    buttons.forEach((btn) => btn.classList.remove("actif"));
    this.classList.add("actif");
  });
});
