(window.load = function (event) {
  AOS.init();

  const togglerNav = document.querySelector(".js-navbar__toggler");
  const nav = document.querySelector(".js-navbar__navigation");
  const heightHeader = document.querySelector("#header");
  let navFlag = false;

  togglerNav.addEventListener("click", () => {
    if (navFlag == false) {
      nav.classList.add("active");
      togglerNav.classList.add("active");
      document.querySelector("body").classList.add("active");
      navFlag = true;
    } else {
      nav.classList.remove("active");
      togglerNav.classList.remove("active");
      document.querySelector("body").classList.remove("active");
      navFlag = false;
    }
  });

  // Close after click the navmenu on mobile
  const itemsNAv = document.querySelectorAll(".js-navbar__navigation a");
  for (let i = 0; i < itemsNAv.length; i++) {
    itemsNAv[i].addEventListener("click", () => {
      nav.classList.remove("active");
      togglerNav.classList.remove("active");
      navFlag = false;
    });
  }

  // Go to Top
  const goToTop = document.querySelector("#go-to-top");
  goToTop.addEventListener("click", () => {
    document.documentElement.scrollTop = 0;
  });
  document.addEventListener("scroll", () => {
    if (window.pageYOffset >= 200) {
      goToTop.classList.add("active");
    } else {
      goToTop.classList.remove("active");
    }
  });

  // sticy nabvbar
  const navbar = document.querySelector("#navbar");
  const containerNavbar = document.querySelector("#header-bottom");
  const topPadding = document.querySelector("#header-top").clientHeight + (document.querySelector(".header__cookis-bar") ? document.querySelector(".header__cookis-bar").clientHeight : false);

  document.addEventListener("scroll", () => {
    if (window.pageYOffset >= topPadding) {
      navbar.classList.add("active");
      containerNavbar.style.paddingTop = topPadding + "px";
    } else {
      navbar.classList.remove("active");
      containerNavbar.style.paddingTop = "0";
    }
  });

  // navbarMobile
  const itemSubmenu = document.querySelectorAll(".js-navbar__navigation  .menu-item-has-children");
  for (let i = 0; i < itemSubmenu.length; i++) {
    const arrow = document.createElement("div");
    const contentArrow = document.createTextNode("+");
    arrow.appendChild(contentArrow);
    arrow.classList.add("mobile-opener");
    // itemSubmenu[i].style.position = "relative";
    itemSubmenu[i].appendChild(arrow);

    itemSubmenu[i].addEventListener("click", function () {
      itemSubmenu[i].classList.toggle("active");
    });
  }

  // footer
  const calaps = document.querySelectorAll(".calaps");
  console.log(calaps[1].firstChild);
  for (let i = 0; i < calaps.length; i++) {
    calaps[i].addEventListener("click", function () {
      calaps[i].classList.toggle("active");
    });
  }

  const pojazdy = document.querySelectorAll(".js-poj");
  for (let i = 0; i < pojazdy.length; i++) {
    pojazdy[i].addEventListener("click", (e) => {
      let id = e.target.getAttribute("data-id");
      document.cookie = `carID=${id}; path=/`;
    });
  }

  if (document.querySelector(".results-display-table")) {
    document.querySelector(".results-display-table").addEventListener("click", function () {
      document.cookie = "resultsDisplay=table; expires=Fri, 31 Dec 9999 23:59:59 GMT; path=/";
      location.reload();
    });
  }
  if (document.querySelector(".results-display-grid")) {
    document.querySelector(".results-display-grid").addEventListener("click", function () {
      document.cookie = "resultsDisplay=; expires=Fri, 31 Dec 1970 23:59:59 GMT; path=/";
      location.reload();
    });
  }

  // form display
  if (document.querySelector(".h-extra__form__wrap form")) {
    setTimeout(function () {
      document.querySelector(".h-extra__form__wrap form").style.display = "block";
    }, 200);
  }

  if (window.screen.width < 768) {
    if (document.querySelector(".h-extra__form__wrap")) {
      document.querySelector(".h-extra__form__wrap").addEventListener("click", function () {
        document.querySelector(".js-toggler-form").classList.toggle("active");
        document.querySelector(".h-extra__form__wrap form").classList.toggle("active");
      });
    }
  }
})();
