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

var galleryTop = new Swiper(".gallery-top", {
  slidesPerView: 1,
  loop: true,
  loopedSlides: 5,
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev"
  }
});

var galleryThumbs = new Swiper(".gallery-thumbs", {
  direction: "vertical",
  slidesPerView: 4,
  slideToClickedSlide: true,
  spaceBetween: 10,
  loopedSlides: 5,
  loop: true
});
galleryTop.controller.control = galleryThumbs;
galleryThumbs.controller.control = galleryTop;
