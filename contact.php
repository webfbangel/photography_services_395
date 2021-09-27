<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>Photography services</title>

    <!--Fontawesome -->
    <script src="https://kit.fontawesome.com/86a91fcfba.js"></script>

    <!-- Stylesheets -->
    <link rel="stylesheet" href="./css/global.css" />
    <link rel="stylesheet" href="./css/contact.css" />
  </head>
  <body>
    <!-- Navbar section start -->
    <nav class="navbar">
      <div class="sectionWrapper">
        <div class="logo">
          <p class="big">Spotting the Light</p>
          <p class="small">Photography services</p>
        </div>
        <div class="hamburgerMenu" onclick="handleHamburgerMenu()">
          <i class="fas fa-bars menuOpen"></i>
          <i class="fas fa-times menuClose"></i>
        </div>
        <div class="navbarItems">
          <div class="navbarItem" onclick="handleHamburgerMenu()">
            <a href="/#home" class="navbarLink">Home</a>
          </div>
          <div class="navbarItem" onclick="handleHamburgerMenu()">
            <a href="/#services" class="navbarLink">Our Services</a>
          </div>
          <div class="navbarItem" onclick="handleHamburgerMenu()">
            <a href="/#testimonies" class="navbarLink">Testimonies</a>
          </div>
          <div class="navbarItem" onclick="handleHamburgerMenu()">
            <a href="/contact.html" class="navbarLink">Contact</a>
          </div>
        </div>
      </div>
    </nav>
    <!-- Navbar section end -->

    <!-- Contact section start -->
    <section id="contact">
      <div class="sectionWrapper">
        <div class="contactHeadline">
          <p class="headline">Contact us</p>
          <p class="subHeadline">
            We are here to help you. Leave us a message that we are eager to
            hear from you and collaborate with you
          </p>
        </div>

        <div class="contactInformation">
          <p class="title">Contact information</p>

          <div class="infoItem">
            <p class="type">Email</p>
            <p>info@spottingthelight.com</p>
          </div>
          <div class="infoItem">
            <p class="type">Phone</p>
            <p>(934)-234-2342</p>
          </div>
          <div class="infoItem">
            <p class="type">Address</p>
            <p>Av Saint Park 342</p>
            <p>City Ground</p>
            <p>Arkansas</p>
          </div>
        </div>

        <form action="" onsubmit="return handleSubmit(event)">
          <div class="formItem">
            <label for="name">Your name</label>
            <input
              type="text"
              name="name"
              required
              placeholder="What's you name?"
            />
          </div>
          <div class="formItem">
            <label for="email">Your email</label>
            <input
              type="text"
              name="email"
              required
              placeholder="What's your email?"
            />
          </div>
          <div class="formItem">
            <label for="message">Your message</label>
            <textarea
              name="message"
              required
              placeholder="How can we help you?"
            ></textarea>
          </div>
          <div class="submitMessage">
            <p class="errors"></p>
            <p class="success"></p>
          </div>
          <button type="submit">Send</button>
        </form>
      </div>
    </section>
    <!-- Contact section end -->

    <!-- Footer section end -->
    <footer>
      <div class="sectionWrapper">
        <div class="pages">
          <p class="title">Pages</p>
          <div class="contentPages">
            <a href="/#home">Home</a>
            <a href="/#services">Our services</a>
            <a href="/#testimonies">Testimonies</a>
            <a href="/contact.html">Contact</a>
          </div>
        </div>
        <div class="socialMedia">
          <a href="#"><i class="fab fa-facebook-square"></i></a>
          <a href="#"><i class="fab fa-instagram-square"></i></a>
          <a href="#"><i class="fab fa-linkedin"></i></a>
          <a href="#"><i class="fab fa-youtube"></i></a>
        </div>
        <div class="extraPages">
          <a href="/terms_conditions.html">Terms of Service</a>
          <a href="/privacy_policy.html">Privacy policy</a>
        </div>
        <div class="contactInformation">
          <p class="title">Contact information</p>

          <div class="infoItem">
            <p class="type">Email</p>
            <p>info@spottingthelight.com</p>
          </div>
          <div class="infoItem">
            <p class="type">Phone</p>
            <p>(934)-234-2342</p>
          </div>
          <div class="infoItem">
            <p class="type">Address</p>
            <p>Av Saint Park 342</p>
            <p>City Ground</p>
            <p>Arkansas</p>
          </div>
        </div>
      </div>
    </footer>
    <!-- Footer section end -->
    <script src="/js/app.js"></script>
  </body>
</html>
