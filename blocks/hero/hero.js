var swiper = new Swiper(".hero-js", {
  slidesPerView: 1,
  loop: true,
  effect: "fade",
  grabCursor: true,
  autoplay: {
    delay: 4500,
    disableOnInteraction: false
  },
  pagination: {
    el: ".swiper-pagination",
    clickable: true
  },
  effect: "creative",
  creativeEffect: {
    prev: {
      shadow: true,
      translate: ["-20%", 0, -1]
    },
    next: {
      translate: ["100%", 0, 0]
    }
  }
});
