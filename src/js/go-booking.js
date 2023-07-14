jQuery(".datepicker").flatpickr({
  enableTime: true,
  dateFormat: "Y-m-d H:i",
  locale: "pl"
  // locale: {
  //   firstDayOfWeek: 1
  // }
});

const carTitle = document.querySelector(".booking-car--small h2");
const carDeposit = document.querySelector(".deposit-value");
const carPrice = document.querySelector(".deposit-value");
const carPriceExtras = document.querySelector(".deposit-value");
const carPriceTotal = document.querySelector(".deposit-value");

// inputs to set value
const inputCarTitle = document.querySelector("#samochod");
const inputRentFrom = document.querySelector("#data-od");
const inputRentTo = document.querySelector("#data-do");
const inputExtras = document.querySelector("#dodatki");
const inputPriceRent = document.querySelector("#cena-najmu");
const inputPriceExtras = document.querySelector("#cena-dodatki");
const inputPriceTotal = document.querySelector("#cena-calkowita");
const inputPriceDeposit = document.querySelector("#cena-kaucja");

const extras = document.querySelectorAll(".extras .extra .btn-add");
const personalInfo = document.querySelector(".personal-info");

// from to
const today = new Date();
const tomorrow = new Date(today);
tomorrow.setDate(tomorrow.getDate() + 1);
const inputGetFrom = document.querySelector("#drop-up");
const inputGetTo = document.querySelector("#drop-off");

const inputGetFromDisplay = document.querySelector(".from-value b");
const inputGetToDisplay = document.querySelector(".to-value b");

// inputGetFromDisplay.textContent = today.getFullYear() + "-" + (today.getMonth() + 1) + "-" + today.getDate();
// inputGetToDisplay.textContent = tomorrow.getFullYear() + "-" + (tomorrow.getMonth() + 1) + "-" + tomorrow.getDate();

const contenterDate = document.querySelector(".from-to-price");
inputGetTo ? (inputGetTo.disabled = true) : null;
personalInfo ? personalInfo.classList.add("disabled") : null;
for (let i = 0; i < extras.length; i++) {
  // extras[i].parentNode.classList.add("disabled");
}

inputGetFrom.addEventListener("change", function () {
  inputGetFromDisplay.textContent = inputGetFrom.value;
  // inputRentFrom.value = inputGetFrom.value;
  if (inputGetFrom.value) {
    inputGetTo.disabled = false;
  }
});

inputGetTo.addEventListener("change", function () {
  inputGetToDisplay.textContent = inputGetTo.value;
  inputRentTo.value = inputGetTo.value;
  if (inputGetTo.value) {
    for (let i = 0; i < extras.length; i++) {
      extras[i].parentNode.classList.remove("disabled");
      personalInfo.classList.remove("disabled");
    }
  }
  days();
  priceRentCalculator(days());
  setTotalPrice(priceRent, 50);
});

function days() {
  let dayFrom = new Date(inputGetFrom.value);
  let dayTo = new Date(inputGetTo.value);
  let difference_In_Time = dayTo.getTime() - dayFrom.getTime();
  let difference_In_Days = difference_In_Time / (1000 * 3600 * 24);
  getDays = difference_In_Days;
  console.log(Math.ceil(getDays));
  return Math.ceil(getDays);
}

// Get price rent
const priceOne = document.querySelector(".booking-page__resume__details").getAttribute("data-priceone");
const priceTwo = document.querySelector(".booking-page__resume__details").getAttribute("data-pricetwo");
const priceTree = document.querySelector(".booking-page__resume__details").getAttribute("data-pricetree");
const priceFour = document.querySelector(".booking-page__resume__details").getAttribute("data-pricefour");

let priceRent = priceOne;
// document.querySelector(".price-value").textContent = priceRent;
// inputPriceRent.value = priceRent;

function priceRentCalculator(days) {
  let stawka = "";
  if (days <= 4) {
    stawka = priceOne;
  } else if (days > 4 && days <= 15) {
    stawka = priceTwo;
  } else if (days > 15 && days <= 30) {
    stawka = priceTree;
  } else if (days > 31) {
    stawka = priceFour;
  }
  priceRent = days * stawka;
  if (priceRent > 0) {
    inputPriceRent.value = priceRent + " zł";
    document.querySelector(".price-value").textContent = priceRent + " zł";
    return priceRent;
  } else {
    document.querySelector(".price-value").textContent = "Źle podana data";
  }
}

let priceExtras = 0;
const con = document.querySelector(".box.extras");

for (let i = 0; i < extras.length; i++) {
  extras[i].addEventListener("click", function (e) {
    if (!e.target.parentNode.classList.contains("active")) {
      let text = e.target.parentNode.querySelector(".desc").textContent;
      let price = e.target.parentNode.querySelector(".price b").textContent;
      let all = document.createElement("div");
      all.classList.add("item", "extra-item", "ex");
      all.classList.add("active-" + i);
      con.prepend(all);
      all.innerHTML = `
            <span class="extra-item">${text}</span>
            <span class="extra-item__price"><b>${price}</b></span>
      `;
    } else {
      document.querySelector(".active-" + i).remove();
    }

    if (!e.target.parentNode.classList.contains("active")) {
      e.target.textContent = "Odejmij -";
      priceExtras += 50;
    } else {
      e.target.textContent = "Dodaj +";
      priceExtras -= 50;
    }

    e.target.parentNode.classList.toggle("active");

    setTotalPrice(priceRent, priceExtras);
    document.querySelector(".extra-item__price-total").textContent = priceExtras + " zł";
    inputPriceExtras.value = priceExtras + " zł";
  });
}
const extrasActive = document.querySelectorAll(".extras");

// function getExtras() {
//   const extrasAll = document.querySelectorAll(".extras .ex");
//   const el = [];
//   for (let i = 0; i < extrasAll.length; i++) {
//     extrasAll[i].push();
//   }
//   inputExtras.value = el;
// }
// Total price

const totalPriceContener = document.querySelector(".total-price__wraper .price");

function setTotalPrice(rent, extras) {
  extras ? extras : 0;
  totalPriceContener.textContent = rent + extras + " zł";
  inputPriceTotal.value = rent + extras + " zł";
}

inputCarTitle.value = carTitle.textContent;
inputPriceDeposit.value = carDeposit.textContent;

// document.querySelector(".js-btn-booking").addEventListener("click", function () {
//   jQuery(".wpcf7-form").submit();
// });
