feather.replace();

// 11. Aksi pada tombol hamburger pada Device Mobile saat di-klik
const tombolHamburger = document.querySelector(".hamburger");
const navMenu = document.querySelector(".nav-group-link");

tombolHamburger.addEventListener("click", () => {
  tombolHamburger.classList.toggle("active");
  navMenu.classList.toggle("active");
});

document.querySelectorAll(".nav-link").forEach((n) => {
  n.addEventListener("click", () => {
    tombolHamburger.classList.remove("active");
    navMenu.classList.remove("active");
  });
});