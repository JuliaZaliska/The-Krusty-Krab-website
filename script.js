document.addEventListener("DOMContentLoaded", function () {
  const navBtn = document.querySelector(".nav-btn");
  const navList = document.querySelector(".nav-list");

  if (navBtn && navList) {
    navBtn.addEventListener("click", function () {
      navList.classList.toggle("open");
    });

    navList.querySelectorAll("a").forEach((link) => {
      link.addEventListener("click", function () {
        navList.classList.remove("open");
      });
    });

    document.addEventListener("click", function (event) {
      const isClickInsideMenu = navList.contains(event.target);
      const isClickOnButton = navBtn.contains(event.target);

      if (!isClickInsideMenu && !isClickOnButton) {
        navList.classList.remove("open");
      }
    });
  }
});