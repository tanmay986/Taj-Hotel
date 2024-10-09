<?php
session_start();
include("connect.php");

?>


<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Taj Hotel</title>
  <link rel="stylesheet" href="stylemain.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css" integrity="sha512-UTNP5BXLIptsaj5WdKFrkFov94lDx+eBvbKyoe1YAfjeRPC+gT5kyZ10kOHCfNZqEui1sxmqvodNUx3KbuYI/A==" crossorigin="anonymous"
    referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>
  
</head>

<body>


  <header>
    <div class="content flex_space">
      <div class="logo">
        <img src="logo1.jpg" alt="">
      </div>
      <div class="navlinks">
        <ul id="menulist">
          <li><a href="#home">home</a> </li>
          <li><a href="#about">about</a> </li>
          <li><a href="#rooms">rooms</a> </li>
          <li><a href="#pages">pages</a> </li>
          <li><a href="#news">news</a> </li>
          <li><a href="#contact">contact</a> </li>
          <li> <i class="fa fa-search"></i> </li>
          <li> <button class="primary-btn">BOOK NOW</button> </li>
        </ul>
        <span class="fa fa-bars" onclick="menutoggle()"></span>
      </div>
    </div>
  </header>


  <script>
    var menulist = document.getElementById('menulist');
    menulist.style.maxHeight = "0px";

    function menutoggle() {
      if (menulist.style.maxHeight == "0px") {
        menulist.style.maxHeight = "100vh";
      } else {
        menulist.style.maxHeight = "0px";
      }
    }
  </script>


  <section class="home">
    <div class="content">
      <div class="owl-carousel owl-theme">
        <div class="item">
          <img src="banner-1.png" alt="">
          <div class="text">
            <h1>Spend Your Holiday</h1>
            <p>When you spend your holiday in a hotel, you unlock a world of comfort and convenience. Enjoy luxurious amenities,
              from serene spa treatments to exquisite dining options. Let the attentive staff cater to your every need while you unwind in a
              beautifully designed room. Whether you're seeking adventure or relaxation,
              a hotel stay provides the perfect base to explore your destination and make lasting memories.
            </p>
            <div class="flex">
              <button class="primary-btn">READ MORE</button>
              <button class="secondary-btn">CONTACT US</button>
            </div>
          </div>
        </div>
        <div class="item">
          <img src="banner-2.png" alt="">
          <div class="text">
            <h1>Spend Your Holiday</h1>
            <p>Lorem ipsum dolor sit amet constur adipisicing elit sed do eiusmtem por incid.
            </p>
            <div class="flex">
              <button class="primary-btn">READ MORE</button>
              <button class="secondary-btn">CONTACT US</button>
            </div>
          </div>
        </div>
        <div class="item">
          <img src="banner-3.png" alt="">
          <div class="text">
            <h1>Spend Your Holiday</h1>
            <p>Lorem ipsum dolor sit amet constur adipisicing elit sed do eiusmtem por incid.
            </p>
            <div class="flex">
              <button class="primary-btn">READ MORE</button>
              <button class="secondary-btn">CONTACT US</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous"
    referrerpolicy="no-referrer"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.js" integrity="sha512-gY25nC63ddE0LcLPhxUJGFxa2GoIyA5FLym4UJqHDEMHjp8RET6Zn/SHo1sltt3WuVtqfyxECP38/daUc/WVEA==" crossorigin="anonymous"
    referrerpolicy="no-referrer"></script>
  <script>
    $('.owl-carousel').owlCarousel({
      loop: true,
      margin: 0,
      nav: true,
      dots: false,
      navText: ["<i class = 'fa fa-chevron-left'></i>", "<i class = 'fa fa-chevron-right'></i>"],
      responsive: {
        0: {
          items: 1
        },
        768: {
          items: 1
        },
        1000: {
          items: 1
        }
      }
    })
  </script>




  <section class="book">
    <div class="container flex_space">
      <div class="text">
        <h1> <span>Book </span> Your Rooms </h1>
      </div>
      <div class="form">
        <form class="grid">
          <input type="date" placeholder="Araival Date">
          <input type="date" placeholder="Departure Date">
          <input type="number" placeholder="Adults">
          <input type="number" placeholder="Childern">
          <input type="submit" value="CHECK AVAILABILITY">
        </form>
      </div>
    </div>
  </section>



  <section class="about top">
    <div class="container flex">
      <div class="left">
        <div class="heading">
          <h1>WELCOME</h1>
          <h2>Taj Hotel</h2>
        </div>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis
          aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        <button class="primary-btn">ABOUT US</button>
      </div>
      <div class="right">
        <img src="about.png" alt="">
      </div>
    </div>
  </section>

  <section class="counter top">
    <div class="container grid">
      <div class="box">
        <h1>2500</h1>
        <hr>
        <span>Customer</span>
      </div>
      <div class="box">
        <h1>1250</h1>
        <hr>
        <span>Happy Customer</span>
      </div>
      <div class="box">
        <h1>150</h1>
        <hr>
        <span>Expert Technicians</span>
      </div>
      <div class="box">
        <h1>3550</h1>
        <hr>
        <span>Desktop Reaired</span>
      </div>
    </div>
  </section>


  <section class="rooms">
    <div class="container top">
      <div class="heading">
        <h1>EXPOLRE</h1>
        <h2>Our Rooms</h2>
        <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
        </p>
      </div>

      <div class="content mtop">
        <div class="owl-carousel owl-carousel1 owl-theme">
          <div class="items">
            <div class="image">
              <img src="room-1.png" alt="">
            </div>
            <div class="text">
              <h2>Suporior Rooms</h2>
              <div class="rate flex">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
              </div>
              <p>Lorem ipsum dolor sit amet constur adipisicing elit sed do eiusmtem por incid.
              </p>
              <div class="button flex">
                <button class="primary-btn">BOOK NOW</button>
                <h3>$250 <span> <br> Per Night </span> </h3>
              </div>
            </div>
          </div>
          <div class="items">
            <div class="image">
              <img src="room-2.png" alt="">
            </div>
            <div class="text">
              <h2>Suporior Rooms</h2>
              <div class="rate flex">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
              </div>
              <p>Lorem ipsum dolor sit amet constur adipisicing elit sed do eiusmtem por incid.
              </p>
              <div class="button flex">
                <button class="primary-btn">BOOK NOW</button>
                <h3>$250 <span> <br> Per Night </span> </h3>
              </div>
            </div>
          </div>
          <div class="items">
            <div class="image">
              <img src="room-3.png" alt="">
            </div>
            <div class="text">
              <h2>Suporior Rooms</h2>
              <div class="rate flex">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
              </div>
              <p>Lorem ipsum dolor sit amet constur adipisicing elit sed do eiusmtem por incid.
              </p>
              <div class="button flex">
                <button class="primary-btn">BOOK NOW</button>
                <h3>$250 <span> <br> Per Night </span> </h3>
              </div>
            </div>
          </div>
          <div class="items">
            <div class="image">
              <img src="room-4.png" alt="">
            </div>
            <div class="text">
              <h2>Suporior Rooms</h2>
              <div class="rate flex">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
              </div>
              <p>Lorem ipsum dolor sit amet constur adipisicing elit sed do eiusmtem por incid.
              </p>
              <div class="button flex">
                <button class="primary-btn">BOOK NOW</button>
                <h3>$250 <span> <br> Per Night </span> </h3>
              </div>
            </div>
          </div>
          <div class="items">
            <div class="image">
              <img src="room-5.png" alt="">
            </div>
            <div class="text">
              <h2>Suporior Rooms</h2>
              <div class="rate flex">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
              </div>
              <p>Lorem ipsum dolor sit amet constur adipisicing elit sed do eiusmtem por incid.
              </p>
              <div class="button flex">
                <button class="primary-btn">BOOK NOW</button>
                <h3>$250 <span> <br> Per Night </span> </h3>
              </div>
            </div>
          </div>
          <div class="items">
            <div class="image">
              <img src="room-6.png" alt="">
            </div>
            <div class="text">
              <h2>Suporior Rooms</h2>
              <div class="rate flex">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
              </div>
              <p>Lorem ipsum dolor sit amet constur adipisicing elit sed do eiusmtem por incid.
              </p>
              <div class="button flex">
                <button class="primary-btn">BOOK NOW</button>
                <h3>$250 <span> <br> Per Night </span> </h3>
              </div>
            </div>
          </div>
          <div class="items">
            <div class="image">
              <img src="room-7.png" alt="">
            </div>
            <div class="text">
              <h2>Suporior Rooms</h2>
              <div class="rate flex">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
              </div>
              <p>Lorem ipsum dolor sit amet constur adipisicing elit sed do eiusmtem por incid.
              </p>
              <div class="button flex">
                <button class="primary-btn">BOOK NOW</button>
                <h3>$250 <span> <br> Per Night </span> </h3>
              </div>
            </div>
          </div>
          <div class="items">
            <div class="image">
              <img src="room-8.png" alt="">
            </div>
            <div class="text">
              <h2>Suporior Rooms</h2>
              <div class="rate flex">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
              </div>
              <p>Lorem ipsum dolor sit amet constur adipisicing elit sed do eiusmtem por incid.
              </p>
              <div class="button flex">
                <button class="primary-btn">BOOK NOW</button>
                <h3>$250 <span> <br> Per Night </span> </h3>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <script>
    $('.owl-carousel1').owlCarousel({
      loop: true,
      margin: 40,
      nav: true,
      dots: false,
      navText: ["<i class = 'fa fa-chevron-left'></i>", "<i class = 'fa fa-chevron-right'></i>"],
      responsive: {
        0: {
          items: 1
        },
        768: {
          items: 2,
          margin: 10,
        },
        1000: {
          items: 3
        }
      }
    })
  </script>



  <section class="gallery">
    <div class="container top">
      <div class="heading">
        <h1>PHOTOS</h1>
        <h2>Our Gallery</h2>
        <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
      </div>
    </div>

    <div class="content mtop">
      <div class="owl-carousel owl-carousel1 owl-theme">
        <div class="items">
          <div class="img">
            <img src="gallery-1.png" alt="">
          </div>
          <div class="overlay">
            <span class="fa fa-plus"> </span>
            <h3>Photo Title Here.</h3>
          </div>
        </div>
        <div class="items">
          <div class="img">
            <img src="gallery-2.png" alt="">
          </div>
          <div class="overlay">
            <span class="fa fa-plus"> </span>
            <h3>Photo Title Here.</h3>
          </div>
        </div>
        <div class="items">
          <div class="img">
            <img src="gallery-3.png" alt="">
          </div>
          <div class="overlay">
            <span class="fa fa-plus"> </span>
            <h3>Photo Title Here.</h3>
          </div>
        </div>
        <div class="items">
          <div class="img">
            <img src="gallery-4.png" alt="">
          </div>
          <div class="overlay">
            <span class="fa fa-plus"> </span>
            <h3>Photo Title Here.</h3>
          </div>
        </div>
        <div class="items">
          <div class="img">
            <img src="gallery-5.png" alt="">
          </div>
          <div class="overlay">
            <span class="fa fa-plus"> </span>
            <h3>Photo Title Here.</h3>
          </div>
        </div>
        <div class="items">
          <div class="img">
            <img src="gallery-6.png" alt="">
          </div>
          <div class="overlay">
            <span class="fa fa-plus"> </span>
            <h3>Photo Title Here.</h3>
          </div>
        </div>
        <div class="items">
          <div class="img">
            <img src="gallery-4.png" alt="">
          </div>
          <div class="overlay">
            <span class="fa fa-plus"> </span>
            <h3>Photo Title Here.</h3>
          </div>
        </div>
        <div class="items">
          <div class="img">
            <img src="gallery-3.png" alt="">
          </div>
          <div class="overlay">
            <span class="fa fa-plus"> </span>
            <h3>Photo Title Here.</h3>
          </div>
        </div>
        <div class="items">
          <div class="img">
            <img src="gallery-1.png" alt="">
          </div>
          <div class="overlay">
            <span class="fa fa-plus"> </span>
            <h3>Photo Title Here.</h3>
          </div>
        </div>
        <div class="items">
          <div class="img">
            <img src="gallery-6.png" alt="">
          </div>
          <div class="overlay">
            <span class="fa fa-plus"> </span>
            <h3>Photo Title Here.</h3>
          </div>
        </div>
      </div>
    </div>
  </section>


  <script>
    $('.owl-carousel1').owlCarousel({
      loop: true,
      margin: 0,
      nav: true,
      dots: false,
      autoplay: true,
      autoplayTimeout: 1000,
      autoplayHoverPause: true,
      navText: ["<i class = 'fa fa-chevron-left'></i>", "<i class = 'fa fa-chevron-right'></i>"],
      responsive: {
        0: {
          items: 1
        },
        768: {
          items: 4,
        },
        1000: {
          items: 6
        }
      }
    })
  </script>


  <section class="services top">
    <div class="container">
      <div class="heading">
        <h1>SERVICES</h1>
        <h2>Our Services</h2>
        <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
      </div>


      <div class="content flex_space">
        <div class="left grid2">
          <div class="box">
            <div class="text">
              <i class="fa-solid fa-champagne-glasses"></i>
              <h3>Delious Food</h3>
            </div>
          </div>
          <div class="box">
            <div class="text">
              <i class="fa-solid fa-person-biking"></i>
              <h3>Fintness</h3>
            </div>
          </div>
          <div class="box">
            <div class="text">
              <i class="fa-solid fa-utensils"></i>
              <h3>Inhouse Restaurant</h3>
            </div>
          </div>
          <div class="box">
            <div class="text">
              <i class="fa-solid fa-spa"></i>
              <h3>Beauty Spa</h3>
            </div>
          </div>
        </div>
        <div class="right">
          <img src="service.png" alt="">
        </div>
      </div>
    </div>
  </section>




  <section class="Customer top">
    <div class="container">
      <div class="owl-carousel owl-carousel2 owl-theme">
        <div class="item">
          <i class="fa-solid fa-quote-right"></i>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis
            aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          <h3>Julia Robertson</h3>
          <label>Julia Robertson</label>
        </div>
        <div class="item">
          <i class="fa-solid fa-quote-right"></i>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis
            aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          <h3>Julia Robertson</h3>
          <label>Julia Robertson</label>
        </div>
        <div class="item">
          <i class="fa-solid fa-quote-right"></i>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis
            aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          <h3>Julia Robertson</h3>
          <label>Julia Robertson</label>
        </div>
      </div>
    </div>
  </section>
  <script>
    $('.owl-carousel2').owlCarousel({
      loop: true,
      margin: 0,
      nav: false,
      dots: true,
      responsive: {
        0: {
          items: 1
        },
        768: {
          items: 1,
        },
        1000: {
          items: 1
        }
      }
    })
  </script>



  <section class="news top rooms">
    <div class="container">
      <div class="heading">
        <h1>NEWS</h1>
        <h2>Our News</h2>
        <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt</p>
      </div>


      <div class="content flex">
        <div class="left grid2">
          <div class="items">
            <div class="image">
              <img src="blog-1.png" alt="">
            </div>
            <div class="text">
              <h2>Lorem</h2>
              <div class="admin flex">
                <i class="fa fa-user"></i>
                <label>Admin</label>
                <i class="fa fa-heart"></i>
                <label>500</label>
                <i class="fa fa-comments"></i>
              </div>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
          </div>
          <div class="items">
            <div class="image">
              <img src="blog-2.png" alt="">
            </div>
            <div class="text">
              <h2>Lorem.</h2>
              <div class="admin flex">
                <i class="fa fa-user"></i>
                <label>Admin</label>
                <i class="fa fa-heart"></i>
                <label>500</label>
                <i class="fa fa-comments"></i>
              </div>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
          </div>
        </div>

        <div class="right">
          <div class="box flex">
            <div class="img">
              <img src="blog-s1.png" alt="">
            </div>
            <div class="stext">
              <h2>Lorem</h2>
              <p>Lorem ipsum dolor sit amet constur adipisicing elit sed do eiusmtem por incid.
              </p>
            </div>
          </div>
          <div class="box flex">
            <div class="img">
              <img src="blog-s2.png" alt="">
            </div>
            <div class="stext">
              <h2>Lorem</h2>
              <p>Lorem ipsum dolor sit amet constur adipisicing elit sed do eiusmtem por incid.
              </p>
            </div>
          </div>
          <div class="box flex">
            <div class="img">
              <img src="blog-s3.png" alt="">
            </div>
            <div class="stext">
              <h2>Lorem</h2>
              <p>Lorem ipsum dolor sit amet constur adipisicing elit sed do eiusmtem por incid.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <section class="newsletter mtop">
    <div class="container flex_space">
      <h1>Subscribe to Our Newsletter</h1>
      <input type="text" placeholder="Your Email">
      <input type="text" value="Subscribe">
    </div>
  </section>


  <footer>
    <div class="container grid">
      <div class="box">
        <img src="logo1.jpg" alt="">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis
          aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

        <div class="icon">
          <i class="fa fa-facebook-f"></i>
          <i class="fa fa-instagram"></i>
          <i class="fa fa-twitter"></i>
          <i class="fa fa-youtube"></i>
        </div>
      </div>

      <div class="box">
        <h2>Links</h2>
        <ul>
          <li>Company History</li>
          <li>About Us</li>
          <li>Contact Us</li>
          <li>Services</li>
          <li>Privacy Policy</li>
        </ul>
      </div>

      <div class="box"> 
        <h2>Contact Us</h2>
        <p>Lorem ipsum dolor sit amet constur adipisicing elit sed do eiusmtem por incid.
        </p>
        <i class="fa fa-location-dot"></i>
        <label>12 ,Sitapura Industrial Area</label> <br>
        <i class="fa fa-phone"></i>
        <label>[91]123456789</label> <br>
        <i class="fa fa-envelope"></i>
        <label>info@abc.com</label> <br>
      </div>
    </div>
  </footer>

  <div class="legal">
    <p class="container">Copyright (c) 2022 Copyright Holder All Rights Reserved.</p>
  </div>



  <script src="https://kit.fontawesome.com/032d11eac3.js" crossorigin="anonymous"></script>
</body>

</html>