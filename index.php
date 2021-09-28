<?php
// Message vars
$msg = "";
$msgClass = "";

if (filter_has_var(INPUT_POST, "submit")) {
  $name = htmlspecialchars($_POST["name"]);
  $email = htmlspecialchars($_POST["email"]);
  $message = htmlspecialchars($_POST["message"]);


  if (!empty($name) && !empty($email) && !empty($message)) {

    if (filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
      $msg = "Please use a valid email";
      $msgClass = "error";
    } else {
      $toEmail = "julio@fbangel.com";
      $subject = "Contact request From " . $name;
      $body = "
          <h2>Contact request</h2>
          <h4>Name</h4><p>" . $name . "</p>
          <h4>Name</h4><p>" . $email . "</p>
          <h4>Name</h4><p>" . $message . "</p>
        ";

      // Email headers
      $headers = "MIME-Version: 1.0" . "\r\n";
      $headers .= "Content-Type:text/html;charset=UTF-8" . "\r\r";

      // Aditional headers
      $headers .= "From " . $name . "<" . $email . ">" . "\r\n";

      if (mail($toEmail, $subject, $body, $headers)) {
        $msg = "Your email has been sent";
        $mesgClass = "success";
      } else {
        $msg = "Your email was not sent";
        $msgClass = "error";
      }
    }
  } else {
    $msg = "Please fill in all fields";
    $msgClass = "error";
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Photography services | Spotting the Light</title>

  <!--Fontawesome -->
  <script src="https://kit.fontawesome.com/86a91fcfba.js"></script>

  <!-- Stylesheets -->
  <link rel="stylesheet" href="./css/global.css" />

  <!-- Slider css -->
  <link rel="stylesheet" type="text/css" href="packages/slick-master/slick/slick.css" />
  <link rel="stylesheet" type="text/css" href="packages/slick-master/slick/slick-theme.css" />
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
          <a href="#home" class="navbarLink">Home</a>
        </div>
        <div class="navbarItem" onclick="handleHamburgerMenu()">
          <a href="#services" class="navbarLink">Our Services</a>
        </div>
        <div class="navbarItem" onclick="handleHamburgerMenu()">
          <a href="#testimonies" class="navbarLink">Testimonies</a>
        </div>
        <div class="navbarItem" onclick="handleHamburgerMenu()">
          <a href="./contact.php" class="navbarLink">Contact</a>
        </div>
      </div>
    </div>
  </nav>
  <!-- Navbar section end -->

  <!-- Hero section end -->
  <section id="home" class="hero">
    <div class="slider">
      <div class="slide slideOne"></div>
      <div class="slide slideTwo"></div>
      <div class="slide slideThree"></div>
    </div>
    <div class="overlay"></div>

    <div class="sectionWrapper">
      <div class="headline">Immortalize those unique moments</div>
      <div class="subHeadline">
        We are here to help preserve moments that you want to remember
        forever. Photography is the memory of the soul
      </div>
      <button class="callToActions">
        <a href="#contact"> Contact us </a>
      </button>
    </div>
  </section>
  <!-- Hero section end -->

  <!-- Services section start -->

  <section id="services">
    <div class="sectionWrapper">
      <div class="title">Services</div>
      <div class="servicesWrapper">
        <div class="service right">
          <div class="image imageOne"></div>
          <div class="information">
            <div class="name">Product photography</div>
            <div class="description">
              With good product photographs, you can get your clients or
              potential clients to have the feeling of having the product in
              their own hands. Good product photos will be able to show all
              the characteristics of the product, in addition to attracting
              the user's attention. And it is that in eCommerce, the product
              photography is the product that we really sell.
            </div>
          </div>
        </div>

        <div class="service left">
          <div class="image imageTwo"></div>
          <div class="information">
            <div class="name">Photography for catalogs</div>
            <div class="description">
              You can count on us for the design, layout, and printing of your
              catalog. We will do it in high quality so that it is printed on
              paper, and we will also export it for the web so that you can
              send it by mail or upload it to the web itself.
            </div>
          </div>
        </div>

        <div class="service right">
          <div class="image imageThree"></div>
          <div class="information">
            <div class="name">Interior Photography</div>
            <div class="description">
              Currently, many online businesses also have a physical store. In
              fact, most of them have first had the physical store and then
              they have set up their eCommerce. This store is an added value
              that your brand, your company has, and it must be exploited. For
              this reason, it is important to have good interior photographs
              of the business so that it looks better and to be able to attach
              them in the "who are we", "where are we" or "our stores" area.
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Services section end -->

  <!-- Testimonies section start -->
  <section id="testimonies">
    <div class="sectionWrapper">
      <div class="title">Testimonies</div>

      <div class="testimoniesWrapper">
        <div class="testimony">
          <i class="fas fa-quote-left icon"></i>
          <div class="message">
            What an amazing work of the guys from Spotting the Light. They
            nailed it every single pixel. The quality of their work is
            outstanding and how they portrayed my family in a frame, wow, the
            best. Thanks for everything guys!
          </div>
          <div class="name">Wendy Andersen</div>
          <div class="date">March, 2021</div>
        </div>

        <div class="testimony">
          <i class="fas fa-quote-left icon"></i>
          <div class="message">
            I wanted to immortalize a special event with my family. So we
            decided to work with Spotting the Light for their service. What a
            pleasure! The pictures are incredible. I'll be please forever.
          </div>
          <div class="name">Matthew Rock</div>
          <div class="date">March, 2021</div>
        </div>

        <div class="testimony">
          <i class="fas fa-quote-left icon"></i>
          <div class="message">
            I wasn't sure about working with Spotting the Light because I had
            never heard of them before. Now I think everyone should know about
            them, the pictures were amazing. I show them to everyone. We will
            work with you again folks!
          </div>
          <div class="name">Marta Leon</div>
          <div class="date">March, 2021</div>
        </div>
      </div>
    </div>
  </section>
  <!-- Testimonies section end -->

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
      <form method="post" action="<?php echo $_SERVER["PHP_SELF"] ?>">
        <div class="formItem">
          <label for="name">Your name</label>
          <input type="text" name="name" placeholder="What's you name?" value="<?php echo isset($_POST["name"]) ? $name : "" ?>" />
        </div>

        <div class="formItem">
          <label for="email">Your email</label>
          <input type="text" name="email" required placeholder="What's your email?" value="<?php echo isset($_POST["email"]) ? $email : "" ?>" />
        </div>

        <div class="formItem">
          <label for="message">Your message</label>
          <textarea name="message" required placeholder="How can we help you?"><?php echo isset($_POST["message"]) ? $message : "" ?></textarea>
        </div>
        <?php if ($msg != "") : ?>
          <div class="submitMessage">
            <p class="<?php echo $msgClass; ?>">
              <?php echo $msg; ?>
            </p>
          </div>
        <?php endif; ?>
        <button type="submit" name="submit">Send</button>
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
          <a href="#home">Home</a>
          <a href="#services">Our services</a>
          <a href="#testimonies">Testimonies</a>
          <a href="./contact.php">Contact</a>
        </div>
      </div>
      <div class="socialMedia">
        <a href="#"><i class="fab fa-facebook-square"></i></a>
        <a href="#"><i class="fab fa-instagram-square"></i></a>
        <a href="#"><i class="fab fa-linkedin"></i></a>
        <a href="#"><i class="fab fa-youtube"></i></a>
      </div>
      <div class="extraPages">
        <a href="./terms_conditions.php">Terms of Service</a>
        <a href="./privacy_policy.php">Privacy policy</a>
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




  <!-- Jquery -->
  <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
  <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
  <script type="text/javascript" src="./packages/slick-master/slick/slick.min.js"></script>
  <script src="./js/app.js"></script>
  <script>
    $(document).ready(function() {
      $(".slider").slick({
        dots: false,
        infinite: true,
        speed: 500,
        fade: true,
        arrows: false,
        cssEase: "linear",
        autoplay: true,
        autoplaySpeed: 3000,
      });
    });
  </script>
</body>

</html>