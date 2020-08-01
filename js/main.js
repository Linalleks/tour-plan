$(document).ready(function () {
  var menuButton = $(".menu-button");
  menuButton.on("click", function () {
    $(".navbar-bottom").toggleClass("navbar-bottom--visible");
  });

  let menuLink = $(".navbar-menu__link");
  menuLink.on("click", function () {
    if ($(".navbar-bottom").hasClass("navbar-bottom--visible")) {
      $(".navbar-bottom").removeClass("navbar-bottom--visible");
    }
  });

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

  var modalButton = $('[data-toggle="modal"]');
  var closeModalButton = $(".modal__close");
  var modalOverlay = $(".modal__overlay");
  modalOverlay.on("click", closeModal);
  modalButton.on("click", openModal);
  closeModalButton.on("click", closeModal);

  $(document).keydown(function (eventObject) {
    if (
      (eventObject.which == 27) &
      $(".modal__dialog").hasClass("modal__dialog--visible")
    ) {
      closeModal();
    }
  });

  function openModal() {
    var targetModal = $(this).attr("data-href");
    $(targetModal).find(".modal__overlay").addClass("modal__overlay--visible");
    $(targetModal).find(".modal__dialog").addClass("modal__dialog--visible");
  }
  function closeModal() {
    event.preventDefault();
    var modalDialog = $(".modal__dialog");
    modalOverlay.removeClass("modal__overlay--visible");
    modalDialog.removeClass("modal__dialog--visible");
  }
});
