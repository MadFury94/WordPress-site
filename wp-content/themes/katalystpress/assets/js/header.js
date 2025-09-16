document.addEventListener("DOMContentLoaded", function () {
  var openBtn = document.getElementById("mobile-menu-button");
  var closeBtn = document.getElementById("mobile-menu-close");
  var menu = document.getElementById("mobile-menu");

  if (!openBtn || !menu) return;

  function openMenu() {
    menu.classList.remove("hidden");
    openBtn.setAttribute("aria-expanded", "true");
    document.body.classList.add("overflow-hidden");
  }

  function closeMenu() {
    menu.classList.add("hidden");
    openBtn.setAttribute("aria-expanded", "false");
    document.body.classList.remove("overflow-hidden");
  }

  openBtn.addEventListener("click", openMenu);
  if (closeBtn) closeBtn.addEventListener("click", closeMenu);

  // Close when clicking backdrop
  menu.addEventListener("click", function (e) {
    if (e.target === menu) {
      closeMenu();
    }
  });
});

