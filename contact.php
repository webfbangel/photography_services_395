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
          <a href="./#home" class="navbarLink">Home</a>
        </div>
        <div class="navbarItem" onclick="handleHamburgerMenu()">
          <a href="./#services" class="navbarLink">Our Services</a>
        </div>
        <div class="navbarItem" onclick="handleHamburgerMenu()">
          <a href="./#testimonies" class="navbarLink">Testimonies</a>
        </div>
        <div class="navbarItem" onclick="handleHamburgerMenu()">
          <a href="./contact.php" class="navbarLink">Contact</a>
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

      <form method="post" action="<?php echo $_SERVER["PHP_SELF"] ?>">
        <div class="formItem">
          <label for="name">Your name</label>
          <input type="text" name="name" placeholder="What's you name?" required value="<?php echo isset($_POST["name"]) ? $name : "" ?>" />
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
          <a href="./#home">Home</a>
          <a href="./#services">Our services</a>
          <a href="./#testimonies">Testimonies</a>
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
  <script src="./js/app.js"></script>
</body>

</html>