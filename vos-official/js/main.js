/* swiper banner */

let swiper = new Swiper(".mySwiper", {
  loop: true,
  autoplay: {
    delay: 4000,
    disableOnInteraction: false,
  },
});

/* menu */

document.addEventListener("DOMContentLoaded", function () {
  const navItems = document.querySelectorAll(".nav-item");

  navItems.forEach((navItem) => {
    let isMenuHovered = false;
    const dropdownMenu = navItem.querySelector(".dropdown-menu");

    navItem.addEventListener("mouseenter", function () {
      if (dropdownMenu) {
        dropdownMenu.classList.add("_active");
      }
    });

    navItem.addEventListener("mouseleave", function () {
      setTimeout(function () {
        if (!isMenuHovered && dropdownMenu) {
          dropdownMenu.classList.remove("_active");
        }
      }, 200);
    });

    if (dropdownMenu) {
      dropdownMenu.addEventListener("mouseenter", function () {
        isMenuHovered = true;
      });
      dropdownMenu.addEventListener("mouseleave", function () {
        isMenuHovered = false;
      });
    }
  });
});
