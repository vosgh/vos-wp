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

/* footer buttons handler */

  document.addEventListener("DOMContentLoaded", function () {
    document.querySelectorAll(".footer-btns button").forEach(function (button, index) {
      button.addEventListener("click", function () {
        if (index === 0) {
          if (loginData.isUserLoggedIn) {
            // Выполнение выхода при нажатии на кнопку "Выйти"
            window.location.href = loginData.logoutUrl;
          } else {
            // Перенаправление на страницу авторизации при нажатии на кнопку "Войти на сайт"
            window.location.href =
              "http://vos-site/%d0%b0%d0%b2%d1%82%d0%be%d1%80%d0%b8%d0%b7%d0%b0%d1%86%d0%b8%d1%8f/";
          }
        } else if (index === 1) {
          // Перенаправление на страницу "Вход для РО и предприятий"
          window.location.href = "https://example.com/ro-login";
        } else if (index === 2) {
          // Перенаправление на страницу "Регистрация"
          window.location.href = "https://example.com/register";
        }
      });
    });

    // Обработчик для формы выхода
    var logoutForm = document.getElementById("logout-form");
    if (logoutForm) {
      logoutForm.addEventListener("submit", function () {
        document.getElementById("wp-submit").innerText = "Войти на сайт";
      });
    }
  });
