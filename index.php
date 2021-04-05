<!doctype html>
<html lang="en">
session_start();

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

  <!-- Styling and JS -->
  <script src="./js/navbar.js"></script>
  <link rel="stylesheet" href="./css/main.css">

  <!-- Font Awesome -->
  <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>

  <title> Health is Wealth </title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
  <!-- NAVBAR HERE COPY AND PASTE THIS SHIT IDK HOW ELSE TO INTEGRATE TO OTHER PAGES LOL -->
  <div class="w3-top">
    <div class="w3-bar w3-white w3-card" id="myNavbar">
      <a href="#home" class="w3-bar-item w3-button w3-wide"><img src='./img/earthchan.png' height="48px"
          width="48px">Health is Wealth</a>
      <!-- Right-sided navbar links -->
      <div class="w3-right w3-hide-small">
        <a href="planmeal.html" class="w3-bar-item w3-button"><i class="fa fa-user"></i> Plan My Meal</a>
        <a href="upload.php" class="w3-bar-item w3-button"><i class="fa fa-th"></i> What's In My Meal? </a>
        <a href="schedule.php" class="w3-bar-item w3-button"><i class="fa fa-calendar" aria-hidden="true"
            style="font-size:25px"></i></a>
        <a href="profile.php" class="w3-bar-item w3-button"><i class="fas fa-user-circle"
            style="font-size:25px"></i></a>
      </div>
      <!-- Hide right-floated links on small screens and replace them with a menu icon -->

      <a href="javascript:void(0)" class="w3-bar-item w3-button w3-right w3-hide-large w3-hide-medium"
        onclick="w3_open()">
        <i class="fa fa-bars"></i>
      </a>
    </div>
  </div>

  <!-- Sidebar on small screens when clicking the menu icon -->
  <nav class="w3-sidebar w3-bar-block w3-black w3-card w3-animate-left w3-hide-medium w3-hide-large"
    style="display:none" id="mySidebar">
    <a href="javascript:void(0)" onclick="w3_close()" class="w3-bar-item w3-button w3-large w3-padding-16">Close ×</a>
    <a href="planmeal.html" onclick="w3_close()" class="w3-bar-item w3-button">Plan My Meal</a>
    <a href="upload.php" onclick="w3_close()" class="w3-bar-item w3-button">What's In My Meal?</a>
    <a href="schedule.php" onclick="w3_close()" class="w3-bar-item w3-button"><i class="fa fa-calendar"
        aria-hidden="true" style="font-size:25px"></i></a>
    <a href="profile.php" onclick="w3_close()" class="w3-bar-item w3-button"><i class="fas fa-user-circle"
        style="font-size:25px"></i></a>
  </nav>
  <!-- NAVBAR ENDS HERE COPY AND PASTE THIS SHIT IDK HOW ELSE TO INTEGRATE TO OTHER PAGES LOL -->


  <header class="bgimg-1 w3-display-container w3-grayscale-min" id="home">
    <div class="w3-display-left w3-text-white" style="padding:48px">
      <span class="w3-jumbo w3-hide-small">Start planning your meals</span><br>
      <span class="w3-xxlarge w3-hide-large w3-hide-medium">Start planning your meals</span><br>
      <span class="w3-large">For a better health, Eat with choice</span>
      <p><a href="register.php"
          class="w3-button w3-white w3-padding-large w3-large w3-margin-top w3-opacity w3-hover-opacity-off">Register
          now!</a>
        <a href="login.php"
          class="w3-button w3-blue w3-padding-large w3-large w3-margin-top w3-opacity w3-hover-opacity-off"
          style="opacity: 1">Login</a>
      </p>
    </div>
    <!-- <div class="w3-display-bottomleft w3-text-grey w3-large" style="padding:24px 48px">
        <i class="fa fa-facebook-official w3-hover-opacity"></i>
        <i class="fa fa-instagram w3-hover-opacity"></i>
        <i class="fa fa-snapchat w3-hover-opacity"></i>
        <i class="fa fa-pinterest-p w3-hover-opacity"></i>
        <i class="fa fa-twitter w3-hover-opacity"></i>
        <i class="fa fa-linkedin w3-hover-opacity"></i>
      </div> -->
  </header>

  <!-- About Section -->
  <div class="w3-container" style="padding:128px 16px" id="about">
    <h3 class="w3-center">Health is Wealth</h3>
    <p class="w3-center w3-large">Solutions for your daily lives</p>
    <div class="w3-row-padding w3-center" style="margin-top:64px">
      <div class="w3-quarter">
        <i class="fas fa-carrot fa-spin w3-margin-bottom w3-jumbo w3-center"></i>
        <p class="w3-large">Analyse your food</p>
        <p>Upload a picture of your food and let our food analyser breakdown its ingredients and nutritional
          information! </p>
      </div>
      <div class="w3-quarter">
        <i class="fa fa-heart w3-margin-bottom w3-jumbo"></i>
        <p class="w3-large">Spread your diet</p>
        <p>Share them with your friends, build a healthy circle!</p>
      </div>
      <div class="w3-quarter">
        <i class="fas fa-robot w3-margin-bottom w3-jumbo"></i>
        <p class="w3-large">Receive recommendations</p>
        <p>Our application learns your behaviour and recommend you the healthiest choices</p>
      </div>
      <div class="w3-quarter">
        <i class="fa fa-paypal w3-margin-bottom w3-jumbo"></i>
        <p class="w3-large">Purchase with Ease & Convenience</p>
        <p>Purchase the recommendations via a trusted platform, Paypal</p>
      </div>
    </div>
  </div>

  <!-- Promo Section - "We know design"
    <div class="w3-container w3-light-grey" style="padding:128px 16px">
      <div class="w3-row-padding">
        <div class="w3-col m6">
          <h3>We know design.</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod<br>tempor incididunt ut labore et dolore.</p>
          <p><a href="#work" class="w3-button w3-black"><i class="fa fa-th"> </i> View Our Works</a></p>
        </div>
        <div class="w3-col m6">
          <img class="w3-image w3-round-large" src="/w3images/phone_buildings.jpg" alt="Buildings" width="700" height="394">
        </div>
      </div>
    </div> -->

  <!-- Team Section -->
  <div class="w3-container" style="padding:128px 16px" id="team">
    <h3 class="w3-center">THE TEAM</h3>
    <p class="w3-center w3-large">The ones who runs this company</p>
    <div class="w3-row-padding w3-grayscale" style="margin-top:64px">
      <div class="w3-col l3 m6 w3-margin-bottom">
        <div class="w3-card">
          <img src="/w3images/team2.jpg" alt="John" style="width:100%">
          <div class="w3-container">
            <h3>Yeo Yao Cong</h3>
            <p class="w3-opacity">CEO & Founder</p>
            <p>Phasellus eget enim eu lectus faucibus vestibulum. Suspendisse sodales pellentesque elementum.</p>
            <p><button class="w3-button w3-light-grey w3-block"><i class="fa fa-envelope"></i> Contact</button></p>
          </div>
        </div>
      </div>
      <div class="w3-col l3 m6 w3-margin-bottom">
        <div class="w3-card">
          <img src="/w3images/team1.jpg" alt="Jane" style="width:100%">
          <div class="w3-container">
            <h3>Anja Doe</h3>
            <p class="w3-opacity">Art Director</p>
            <p>Phasellus eget enim eu lectus faucibus vestibulum. Suspendisse sodales pellentesque elementum.</p>
            <p><button class="w3-button w3-light-grey w3-block"><i class="fa fa-envelope"></i> Contact</button></p>
          </div>
        </div>
      </div>
      <div class="w3-col l3 m6 w3-margin-bottom">
        <div class="w3-card">
          <img src="/w3images/team3.jpg" alt="Mike" style="width:100%">
          <div class="w3-container">
            <h3>Mike Ross</h3>
            <p class="w3-opacity">Web Designer</p>
            <p>Phasellus eget enim eu lectus faucibus vestibulum. Suspendisse sodales pellentesque elementum.</p>
            <p><button class="w3-button w3-light-grey w3-block"><i class="fa fa-envelope"></i> Contact</button></p>
          </div>
        </div>
      </div>
      <div class="w3-col l3 m6 w3-margin-bottom">
        <div class="w3-card">
          <img src="/w3images/team4.jpg" alt="Dan" style="width:100%">
          <div class="w3-container">
            <h3>Dan Star</h3>
            <p class="w3-opacity">Designer</p>
            <p>Phasellus eget enim eu lectus faucibus vestibulum. Suspendisse sodales pellentesque elementum.</p>
            <p><button class="w3-button w3-light-grey w3-block"><i class="fa fa-envelope"></i> Contact</button></p>
          </div>
        </div>
      </div>
    </div>
  </div>


  <!-- Footer -->
  <footer class="w3-center w3-black w3-padding-64">
    <a href="#home" class="w3-button w3-light-grey"><i class="fa fa-arrow-up w3-margin-right"></i>To the top</a>
    <div class="w3-xlarge w3-section">
      <i class="fa fa-facebook-official w3-hover-opacity"></i>
      <i class="fa fa-instagram w3-hover-opacity"></i>
      <i class="fa fa-snapchat w3-hover-opacity"></i>
      <i class="fa fa-pinterest-p w3-hover-opacity"></i>
      <i class="fa fa-twitter w3-hover-opacity"></i>
      <i class="fa fa-linkedin w3-hover-opacity"></i>
    </div>
    <p>Powered by <a href="https://www.w3schools.com/w3css/default.asp" title="W3.CSS" target="_blank"
        class="w3-hover-text-green">w3.css</a></p>
  </footer>

  <script>
    // Modal Image Gallery
    function onClick(element) {
      document.getElementById("img01").src = element.src;
      document.getElementById("modal01").style.display = "block";
      var captionText = document.getElementById("caption");
      captionText.innerHTML = element.alt;
    }


    // Toggle between showing and hiding the sidebar when clicking the menu icon
    var mySidebar = document.getElementById("mySidebar");

    function w3_open() {
      if (mySidebar.style.display === 'block') {
        mySidebar.style.display = 'none';
      } else {
        mySidebar.style.display = 'block';
      }
    }

    // Close the sidebar with the close button
    function w3_close() {
      mySidebar.style.display = "none";
    }

    // Modal Image Gallery
    function onClick(element) {
      document.getElementById("img01").src = element.src;
      document.getElementById("modal01").style.display = "block";
      var captionText = document.getElementById("caption");
      captionText.innerHTML = element.alt;
    }
  </script>


  <script>
    $(window).scroll(function () {
      if ($(document).scrollTop() > 50) {
        $('.nav').addClass('affix');
        console.log("OK");
      } else {
        $('.nav').removeClass('affix');
      }
    });
  </script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="../js/navbar.js"></script>
</body>

</html>