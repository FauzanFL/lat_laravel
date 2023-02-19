require("./bootstrap");

const toggleButton = document.querySelector(".sidebar-toggle-btn");
const sidebarMini = document.querySelector(".sidebar-mini");
toggleButton.addEventListener("click", () => {
    sidebarMini.classList.toggle("sidebar-collapse");
});
