jQuery(".datepicker").flatpickr({
  enableTime: true,
  dateFormat: "Y-m-d H:i",
  locale: "pl",
  minDate: "today"
  // locale: {
  //   firstDayOfWeek: 1
  // }
});

const carTitle = document.querySelector(".booking-car--small h2");
const carDeposit = document.querySelector(".deposit-value");
const carPrice = document.querySelector(".deposit-value");
const carPriceExtras = document.querySelector(".deposit-value");
const carPriceTotal = document.querySelector(".deposit-value");
const carPriceSave = document.querySelector(".total-price__wraper--down");

// inputs to set value
const inputCarTitle = document.querySelector("#samochod");
const inputRentFrom = document.querySelector("#data-od");
const inputRentTo = document.querySelector("#data-do");
const inputPriceRent = document.querySelector("#cena-najmu");
const inputPriceExtras = document.querySelector("#cena-dodatki");
const inputPriceTotal = document.querySelector("#cena-calkowita");
const inputPriceDeposit = document.querySelector("#cena-kaucja");
const inputDiscount = document.querySelector("#promocja");
const inputSave = document.querySelector("#cena-promocyjna");

const inputDodOne = document.querySelector("#dotek-tree");
const inputDodTwo = document.querySelector("#dotek-two");
const inputDodTree = document.querySelector("#dotek-tree");

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
const zgody = document.querySelector(".send-form");

// inputGetFromDisplay.textContent = today.getFullYear() + "-" + (today.getMonth() + 1) + "-" + today.getDate();
// inputGetToDisplay.textContent = tomorrow.getFullYear() + "-" + (tomorrow.getMonth() + 1) + "-" + tomorrow.getDate();

const contenterDate = document.querySelector(".from-to-price");
inputGetTo ? (inputGetTo.disabled = true) : null;
personalInfo ? personalInfo.classList.add("disabled") : null;
zgody ? zgody.classList.add("disabled") : null;
for (let i = 0; i < extras.length; i++) {
  extras[i].parentNode.classList.add("disabled");
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
  // inputRentTo.value = inputGetTo.value;
  if (inputGetTo.value) {
    for (let i = 0; i < extras.length; i++) {
      extras[i].parentNode.classList.remove("disabled");
      personalInfo.classList.remove("disabled");
      zgody.classList.remove("disabled");
    }
  }
  days();
  priceRentCalculator(days());
  setTotalPrice(priceRent, 0);
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

const discountPro = document.querySelector(".booking-page__resume__details").getAttribute("data-disc");
const discStart = document.querySelector(".booking-page__resume__details").getAttribute("data-start");
const dni = document.querySelector(".booking-page__resume__details").getAttribute("data-days");
const discEnd = document.querySelector(".booking-page__resume__details").getAttribute("data-end");
const hasPromo = document.querySelector(".booking-page__resume__details").getAttribute("data-pro");

let priceRent = 0;
// document.querySelector(".price-value").textContent = priceRent;
// inputPriceRent.value = priceRent;

function priceRentCalculator(days) {
  let stawka = "";

  // if (hasPromo == "true") {
  //   inputDiscount.value = 0 + "%";
  //   inputSave.value = 0 + " zł";
  //   carPriceSave.innerHTML = "";
  // }

  var dataOd = new Date(discStart);
  dataOd = dataOd.getFullYear() + "-" + (dataOd.getMonth() + 1) + "-" + dataOd.getDate();
  var dataDo = new Date(discEnd);
  dataDo = dataDo.getFullYear() + "-" + (dataDo.getMonth() + 1) + "-" + dataDo.getDate();

  var formDataOd = new Date(inputGetFrom.value);
  formDataOd = formDataOd.getFullYear() + "-" + (formDataOd.getMonth() + 1) + "-" + formDataOd.getDate();
  var formDataDo = new Date(inputGetTo.value);
  formDataDo = formDataDo.getFullYear() + "-" + (formDataDo.getMonth() + 1) + "-" + formDataDo.getDate();
  var priceRentBefore;
  let div = document.querySelector(".from-to-price .disc");

  if (dataOd === formDataOd && dataDo === formDataDo) {
    if (dni >= 0 && dni <= 4) {
      stawka = priceOne;
    } else if (dni > 4 && dni <= 15) {
      stawka = priceTwo;
    } else if (dni > 15 && dni <= 29) {
      stawka = priceTree;
    } else if (dni > 29) {
      stawka = priceFour / 30;
    }

    priceNormal = stawka * dni;
    priceRent = priceNormal - (discountPro / 100) * priceNormal;
    priceRentBefore = priceNormal - priceRent;
    priceRentBefore = Math.ceil(priceRentBefore);

    div.innerHTML = `<small><span>Otrzymujesz </span><b> ${priceRentBefore} zł </b> Rabatu / (${discountPro}% ceny) <span></span></small> <small>Zapłaciłbyś: <b>${priceNormal} zł </b></small> `;
  } else {
    div.innerHTML = "";
    if (days >= 0 && days <= 4) {
      stawka = priceOne;
      priceRent = days * stawka;
    } else if (days > 4 && days <= 15) {
      stawka = priceTwo;
      priceRent = days * stawka;
    } else if (days > 15 && days <= 29) {
      stawka = priceTree;
      priceRent = days * stawka;
    } else if (days > 29) {
      stawka = "" + priceFour / 30 + "";
      priceRent = days * stawka;
    }
  }
  priceRent = Math.ceil(priceRent);

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
      if (priceExtras !== "") {
        priceExtras += 50;
      }
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
console.log(extras[1]);

extras[0].addEventListener("click", function (e) {
  if (document.querySelector("#dodatek-one").value == "") {
    document.querySelector("#dodatek-one").value = extras[0].parentElement.getAttribute("data-txt");
  } else {
    document.querySelector("#dodatek-one").value = "";
  }
});

extras[1].addEventListener("click", function (e) {
  if (document.querySelector("#dodatek-two").value == "") {
    document.querySelector("#dodatek-two").value = extras[1].parentElement.getAttribute("data-txt");
  } else {
    document.querySelector("#dodatek-two").value = "";
  }
});

extras[2].addEventListener("click", function (e) {
  if (document.querySelector("#dodatek-tree").value == "") {
    document.querySelector("#dodatek-tree").value = extras[2].parentElement.getAttribute("data-txt");
  } else {
    document.querySelector("#dodatek-tree").value = "";
  }
});

// Total price
const totalPriceContener = document.querySelector(".total-price__wraper .price");
function setTotalPrice(rent, extras) {
  // extras = extras ? extras : 0;
  if (extras <= 0) {
    totalPriceContener.textContent = rent + " zł";
  } else {
    totalPriceContener.textContent = rent + extras + " zł";
  }

  inputPriceTotal.value = rent + extras + " zł";
}

inputCarTitle.value = carTitle.textContent;
inputPriceDeposit.value = carDeposit.textContent;

const openers = document.querySelectorAll(".opener-modal");
const closers = document.querySelectorAll(".closer");

for (let i = 0; i < openers.length; i++) {
  openers[i].addEventListener("click", function (e) {
    e.preventDefault();
    document.querySelector(".go-modal-form").classList.add("active");
    document.body.classList.add("active");
    // playAllVideos();
  });
}

for (let i = 0; i < closers.length; i++) {
  closers[i].addEventListener("click", function (e) {
    console.log(e);
    e.preventDefault();
    e.target.parentElement.parentElement.parentElement.parentElement.parentElement.classList.remove("active");
    document.body.classList.remove("active");
  });
}

if (window.innerWidth < 768) {
  jQuery(".booking-page__resume__details").detach().appendTo(".resumen");
  jQuery(".total-price").detach().appendTo(".resumen-price");
}

document.addEventListener(
  "wpcf7mailsent",
  function (event) {
    location = "https://beta.globalelitecar.pl/potwierdzenie-wstepnej-rezerwacji/";
  },
  false
);
