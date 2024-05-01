window.addEventListener("DOMContentLoaded", function () {
  let menu = document.getElementById("menu");
  let navMovil = document.getElementById("nav-movil");
  let navActivo = false;

  menu.addEventListener("click", function () {
    if (!navActivo) {
      navMovil.style.display = "flex";
      navActivo = true;
    } else if (navActivo) {
      navMovil.style.display = "none";
      navActivo = false;
    }
  });

});
