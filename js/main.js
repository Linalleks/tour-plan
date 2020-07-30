var menuButton = document.querySelector(".menu-button");
let menuLink = document.querySelectorAll(".navbar-menu__link");

function toggleMenu() {
  document
    .querySelector(".navbar-bottom")
    .classList.toggle("navbar-bottom--visible");
}

menuButton.addEventListener("click", toggleMenu);
for (let i = 0; i < menuLink.length; i++) {
  menuLink[i].onclick = toggleMenu;
}

var hotelSlider = new Swiper(".hotel-slider", {
  // Optional parameters
  loop: true,

  // Navigation arrows
  navigation: {
    nextEl: ".hotel-slider__button--next",
    prevEl: ".hotel-slider__button--prev",
  },

  keyboard: {
    enabled: true,
    onlyInViewport: false,
  },
});

$(".newsletter").parallax({ imageSrc: "img/newsletter-bg.jpg" });

var reviewsSlider = new Swiper(".reviews-slider", {
  // Optional parameters
  loop: true,
  autoHeight: true,

  // Navigation arrows
  navigation: {
    nextEl: ".reviews-slider__button--next",
    prevEl: ".reviews-slider__button--prev",
  },

  keyboard: {
    enabled: true,
    onlyInViewport: false,
  },
});

ymaps.ready(init);
function init() {
  var myMap = new ymaps.Map("map", {
    center: [7.890461, 98.294484],
    zoom: 17,
  });

  myMap.behaviors.disable("scrollZoom");

  myPlacemark = new ymaps.Placemark(
    [7.890808, 98.294949],
    {
      iconCaption: "Hilton hotel",
    },
    {
      preset: "islands#greenDotIconWithCaption",
    }
  );

  myMap.geoObjects.add(myPlacemark);
}
