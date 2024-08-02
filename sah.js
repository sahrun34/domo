
const menu = document.querySelector(".menu");
const openmenuBtn = document.querySelector(".open-menu-btn");
const closemenuBtn = document.querySelector(".close-menu-btn");

[openmenuBtn, closemenuBtn].forEach((btn) => {
    btn.addEventListener("click", () => {
        menu.classList.toggle("open");
        menu.style.transition = "transform 0 .5s ease";

    });



});
menu.addEventListener("transitionend", function () {
    this.removeAttribute("style");
});
menu.querySelectorAll(".dropdown > i").forEach((arrow) => {
    arrow.addEventListener("click", function () {
        this.closest(".dropdown").classList.toggle("active");
    });
});