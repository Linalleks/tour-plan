var mySwiper = new Swiper(".swiper-container", {
  // Optional parameters
  loop: true,

  // Navigation arrows
  navigation: {
    nextEl: ".slider-button--next",
    prevEl: ".slider-button--prev",
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
