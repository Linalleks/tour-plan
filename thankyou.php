<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Best Tour Plan - Hotel Booking</title>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
    <link rel="icon" href="favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" href="css/swiper-bundle.min.css" />
    <link rel="stylesheet" href="css/aos.css" />
    <link rel="stylesheet" href="css/style.css" />
  </head>
  <body>
    <header class="navbar navbar--mobile--fixed">
      <div class="container">
        <div class="navbar-top">
          <a data-aos="zoom-out" href="index.html" class="logo">
            <img
              src="img/horizontal-logo.svg"
              alt="Logo: Best Tour Plan"
              class="logo__image"
            />
          </a>

          <form
            action="#"
            class="search navbar__search navbar__search--mobile--hidden"
          >
            <input
              type="text"
              class="search__input"
              placeholder="Search Location"
            />
            <button class="search__button">
              <img src="img/search.svg" alt="Icon: search" />
            </button>
          </form>

          <a href="#" class="user navbar__user navbar__user--mobile--hidden">
            <img
              src="img/user-avatar.jpg"
              alt="avatar: Nathan"
              class="user__avatar"
            />
            <span class="user__name">Nathan</span>
          </a>
          <!-- /.user -->
          <button class="menu-button navbar-top__menu-button">
            <span class="menu-button__line"></span>
            <span class="menu-button__line"></span>
            <span class="menu-button__line"></span>
          </button>
        </div>
        <!-- /.navbar-top -->
      </div>
      <!-- /.container -->
      <div class="navbar-bottom">
        <div class="container">
          <ul class="navbar-menu">
            <li class="navbar-menu__item navbar-menu__item--mobile--visible">
              <a
                href="#"
                class="user navbar__user navbar__user--mobile--visible"
              >
                <img
                  src="img/user-avatar.jpg"
                  alt="avatar: Nathan"
                  class="user__avatar"
                />
                <span class="user__name user__name--light">Nathan</span>
              </a>
              <!-- /.user -->
            </li>
            <li class="navbar-menu__item navbar-menu__item--mobile--visible">
              <form
                action="#"
                class="search navbar__search navbar__search--mobile--visible"
              >
                <input
                  type="text"
                  class="search__input"
                  placeholder="Search Location"
                />
                <button class="search__button">
                  <img src="img/search.svg" alt="Icon: search" />
                </button>
              </form>
            </li>
            <li class="navbar-menu__item">
              <a href="#" class="navbar-menu__link">All Deals</a>
            </li>
            <li class="navbar-menu__item">
              <a href="#" class="navbar-menu__link">Hotels</a>
            </li>
            <li class="navbar-menu__item">
              <a href="#" class="navbar-menu__link">Activities</a>
            </li>
            <li class="navbar-menu__item">
              <a href="#" class="navbar-menu__link">Hotel Day Packages</a>
            </li>
            <li class="navbar-menu__item">
              <a href="#" class="navbar-menu__link">Restaurants</a>
            </li>
            <li class="navbar-menu__item">
              <a href="#" class="navbar-menu__link">Events</a>
            </li>
            <li class="navbar-menu__item">
              <a href="#" class="navbar-menu__link">Rodrigues</a>
            </li>
          </ul>
          <!-- /.navbar-menu -->
        </div>
        <!-- /.container -->
      </div>
      <!-- /.navbar-bottom -->
    </header>
    <nav class="breadcrumb">
      <div class="container">
        <ul class="breadcrumb-list">
          <li class="breadcrumb-list__item">
            <a href="#" class="breadcrumb-list__link">Home</a>
          </li>
          <li class="breadcrumb-list__item">
            <a href="#" class="breadcrumb-list__link">Flash Offers</a>
          </li>
          <li class="breadcrumb-list__item">
            Grand Hilton Hotel
          </li>
        </ul>
      </div>
      <!-- /.container -->
    </nav>
    <!-- /.breadcrumb -->

    <section class="hotel">
      <div class="container">
        <div class="hotel-info">
          <div class="hotel-info__text">
            <div class="hotel-wrapper">
              <?php
                $mesageId = $_GET['mesageId'];
                if ($mesageId == 1) {
                  echo '<h1 class="hotel-name hotel-info__name">Message sent!</h1>
                </div>
                <p class="hotel-description hotel-info__description">
                  Our manager will call you in 5 minutes.
                </p>';
                } else {
                  echo '<h1 class="hotel-name hotel-info__name">Thank You for subscribe!</h1>
                </div>';
                }
              ?>
              <a href="index.html" class="button button-home">
                <  At Homepage
              </a>
          </div>
          <!-- /.hotel-info__text -->
        </div>
        <!-- /.hotel-info -->
      </div>
      <!-- /.container -->
    </section>
    <!-- /.hotel -->
    <footer class="footer">
      <div class="container">
        <div class="footer-wrapper">
          <a class="footer__logo" href="index.html">
            <img
              data-src="img/vertical-logo.svg"
              src="#"
              alt="Logo: Best Tour Plan"
              class="logo lazy"
            />
          </a>
          <div class="footer__list footer__categories">
            <h3 class="footer__title">All categories</h3>
            <ul class="footer__ul">
              <li class="footer__item">
                <a href="#" class="footer__link">All Deals</a>
              </li>
              <li class="footer__item">
                <a href="#" class="footer__link">Hotels</a>
              </li>
              <li class="footer__item">
                <a href="#" class="footer__link">Activities</a>
              </li>
              <li class="footer__item">
                <a href="#" class="footer__link">Spa Packages</a>
              </li>
              <li class="footer__item">
                <a href="#" class="footer__link">Hotel Day Packages</a>
              </li>
              <li class="footer__item">
                <a href="#" class="footer__link">Restaurants</a>
              </li>
              <li class="footer__item">
                <a href="#" class="footer__link">Fitness</a>
              </li>
              <li class="footer__item">
                <a href="#" class="footer__link">Rodrigues</a>
              </li>
            </ul>
          </div>
          <!-- /.footer__list -->

          <div class="footer__list footer__additional">
            <h3 class="footer__title">Additional Information</h3>
            <ul class="footer__ul">
              <li class="footer__item">
                <a href="#" class="footer__link">About Us</a>
              </li>
              <li class="footer__item">
                <a href="#" class="footer__link">Contact Us</a>
              </li>
              <li class="footer__item">
                <a href="#" class="footer__link">How does it work?</a>
              </li>
              <li class="footer__item">
                <a href="#" class="footer__link">Frequently Asked Questions</a>
              </li>
              <li class="footer__item">
                <a href="#" class="footer__link">Deals.mu loyalty program</a>
              </li>
              <li class="footer__item">
                <a href="#" class="footer__link">Remote your Business on BTP</a>
              </li>
            </ul>
          </div>
          <!-- /.footer__list -->

          <div class="footer__social-network">
            <h3 class="footer__title footer__title--inline">Social Network</h3>
            <div class="footer__social-links">
              <a href="#" class="footer__link"
                ><img src="img/facebook.svg" alt="icon: facebook"
              /></a>
              <a href="#" class="footer__link"
                ><img src="img/youtube.svg" alt="icon: youtube"
              /></a>
              <a href="#" class="footer__link"
                ><img src="img/instagram.svg" alt="icon: instagram"
              /></a>
            </div>
            <!-- /.footer__social-links -->
          </div>
          <!-- /.footer__social-network -->

          <div class="footer__list footer__legal">
            <h3 class="footer__title">Legal Information</h3>
            <ul class="footer__ul">
              <li class="footer__item">
                <a href="#" class="footer__link">Terms & Conditions</a>
              </li>
              <li class="footer__item">
                <a href="#" class="footer__link">Disclaimer</a>
              </li>
              <li class="footer__item">
                <a href="#" class="footer__link">Cancellation policy</a>
              </li>
              <li class="footer__item">
                <a href="#" class="footer__link">Privacy</a>
              </li>
            </ul>
          </div>
          <!-- /.footer__list -->

          <div class="footer__contact-details">
            <h3 class="footer__title footer__title--mb-3">Contact Details</h3>
            <p class="footer__text">
              Feel free to contact us by phone, email or by our contact form
            </p>
            <ul class="footer__ul">
              <li class="footer__item footer__item--mb-2">
                <div class="footer__icon-wrapper">
                  <img
                    class="footer__icon"
                    src="img/map-marker.svg"
                    alt="icon: map"
                  />
                </div>
                9748 Blossom Hill Rd undefined Lansing, Idaho 68545 United
                States
              </li>
              <li class="footer__item footer__item--mb-2">
                <div class="footer__icon-wrapper">
                  <img
                    class="footer__icon"
                    src="img/contact-phone-call.svg"
                    alt="icon: phone call"
                  />
                </div>
                <span>
                  Tel (business hours) :
                  <a href="tel:2691500" class="phone-number">269 1500</a><br />
                  Tel (hotline) Monday - Saturday:
                  <a href="tel:52566138" class="phone-number">52-56-61-38</a>
                  <span class="work-time">(08:00 am - 20:00 pm)</span><br />
                  Tel (hotline) Sunday:
                  <a href="tel:52566138" class="phone-number">52-56-61-38</a>
                  <span class="work-time">(08:00 am - 14:00 pm)</span>
                </span>
              </li>
              <li class="footer__item footer__item--mb-2">
                <div class="footer__icon-wrapper">
                  <img
                    class="footer__icon"
                    src="img/email.svg"
                    alt="icon: email"
                  />
                </div>
                <a class="email" href="mailto:cherly.lawson@example.com"
                  >cherly.lawson@example.com</a
                >
              </li>
            </ul>
          </div>
          <!-- /.footer__contact-details -->

          <div class="footer__bottom">
            <div class="footer__bottom-links">
              <a href="#" class="footer__bottom-link footer__link"
                >Disclaimer</a
              >
              <a href="#" class="footer__bottom-link footer__link"
                >Conditions of use</a
              >
              <a href="#" class="footer__bottom-link footer__link"
                >Cancellation policy</a
              >
            </div>
            <img
              data-src="img/payment-icons.png"
              src="#"
              alt="Icons: payment methods"
              class="payment footer__payment lazy"
            />
          </div>
          <!-- /.footer__bottom -->
        </div>
        <!-- /.footer-wrapper -->
      </div>
      <!-- /.container -->
    </footer>
    <!-- /.footer -->

    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/parallax.min.js"></script>
    <script src="js/swiper-bundle.min.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/jquery.mask.min.js"></script>
    <script src="js/aos.js"></script>
    <script src="js/lazyload.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>
