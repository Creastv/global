document.querySelectorAll(".content__wraper .content")[0].classList.add("active");
document.querySelectorAll(".tab__link")[0].classList.add("active");

function changeTab(tabIndex) {
  //   tabIndex.preventDefault();
  // Pobierz wszystkie zakładki
  var tabs = document.getElementsByClassName("tab__link");

  // Usuń klasę 'active' z wszystkich zakładek
  for (var i = 0; i < tabs.length; i++) {
    tabs[i].classList.remove("active");
  }

  // Dodaj klasę 'active' do wybranej zakładki
  tabs[tabIndex].classList.add("active");

  // Pobierz wszystkie zawartości zakładek
  var contents = document.querySelectorAll(".content__wraper .content");

  // Ukryj wszystkie zawartości zakładek
  for (var j = 0; j < contents.length; j++) {
    contents[j].classList.remove("active");
  }

  // Pokaż wybraną zawartość zakładki
  contents[tabIndex].classList.add("active");
}
