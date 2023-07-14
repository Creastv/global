const btnAcordeon = document.querySelector(".btn-acorderon");
const acordeon = document.querySelector(".go-seo-loadmore__wraper");
let flag = false;
btnAcordeon.addEventListener("click", function (e) {
  e.preventDefault();
  flag = !flag;
  if (flag) {
    acordeon.classList.add("seo-open");
    btnAcordeon.innerHTML = "Zwiń";
  } else {
    acordeon.classList.remove("seo-open");
    // acordeon.style.height = "180px";
    btnAcordeon.innerHTML = "Rozwiń";
  }
});
