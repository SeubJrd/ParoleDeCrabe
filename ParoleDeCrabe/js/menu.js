let btn = document.querySelector("button.header__btn");
let menu = document.querySelector("body");

btn.addEventListener("click", () => {
  menu.classList.toggle("active");
});

