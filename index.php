<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SkyCheap</title>

  <!-- Goggle Font -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
    rel="stylesheet">

  <!-- Bootstrap 5.3.0 CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- MDBootstrap 5 CSS -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/5.0.0/mdb.min.css" rel="stylesheet">

  <!-- MDBootstrap 5 Font awosome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

  <!-- css link -->
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/media.css">
</head>
<body>
  <!-- Navbar -->
  <nav class="navbar  navbar-expand-md">
    <div class="container-fluid">
      <a class="navbar-brand text-white" href="#">SkyCheap</a>
      <button class="navbar-toggler ms-auto" type="button" data-mdb-toggle="collapse"
        data-mdb-target="#navbarToggleExternalContent3">
        <i class="fas fa-bars"></i>
      </button>
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="index.html">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="about.html">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="services.html">Services</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="services.html">Pricing</a>
        </li>
      </ul>
      <a class="btn btn-light  log-btn nav-button" href="login.php">Login</a>
      <a class="btn btn-light reg-btn nav-button" href="register.php">Register</a>
    </div>
  </nav>

  <!-- Collapsible Menu (Fixed Width & Centered) -->
  <div class="nav-buttons">
    <div class="collapse position-absolute top-35 end-0 translate-end-x  shadow  p-3" id="navbarToggleExternalContent3"
      style="width: autopx; z-index: 1050;">
      <a class="btn btn-light me-2 log-btn" href="login.php">Login</a>
      <a class="btn btn-light reg-btn" href="register.php">Register</a>
    </div>
  </div>


  <!-- Hero Section -->

  <section class="hero-section">
    <div class="hero-container">
      <h1>Wellcome to SkyCheap</h1>
      <P>At SkyCheap, we make it easy to buy affordable data, airtime, and TV subscriptions for DStv, GOtv, and
        StarTimes. You can also pay your electricity bills quickly and stress-free!.</P>

      <!-- Login/Register Buttons -->

      <div class="hero-btn-container">
        <button class="hero-btn" onclick="location.href='register.php'">Get Started</button>
      </div>
    </div>
  </section>

  <!-- About-us section -->

  <div class="about-us-container">
    <h2>About Us</h2>
    <p>SkyCheap is your go-to platform for seamless and affordable airtime, data, and utility bill payments. We believe
      in making digital transactions effortless, fast, and reliable.</p>
    <div class="row">
      <div class="col-lg-4">
        <i class="fa-solid fa-notdef fa-20"></i>
        <h4>Our Mission</h4>
        <p>Our mission is to provide a user-friendly experience where you can conveniently top up your mobile, purchase
          data plans, and pay essential bills—all in one place. We prioritize security, affordability, and excellent
          customer support to ensure you get the best service possible.</p>
      </div>
      <div class="col-lg-4">
        <i class="fa-solid fa-eye-low-vision"></i>
        <h4>Our Vision</h4>
        <p>At SkyCheap, we envision a future where digital transactions are seamless, affordable, and accessible to
          everyone. Our goal is to empower individuals and businesses with reliable, fast, and cost-effective solutions
          for airtime, data, and bill payments.</p>
      </div>
      <div class="col-lg-4 about-img">
        <img src="images/aboutUs-img.jpg">
      </div>
    </div>
  </div>

  <hr style="width:90%; margin:auto;">

  <!-- Services Section -->

  <div class="services-container">
    <h2>Our Services</h2>
    <p>Our offerings include swift Airtime top-ups, Data Bundles, Cable TV subscriptions (DSTV, GOTV, and Startimes),
      and seamless Electricity Bill Payments.</p>
    <div class="row">
      <div class="col-lg-4 col-md-6">
        <img src="images/services/airtime.webp" alt="Airtime">
        <h4 style="padding-top:20px" ;>Buy Airtime</h4>
        <p>Recharge your line instantly and enjoy unbeatable rates!</p>
      </div>
      <div class="col-lg-4 col-md-6">
        <img src="images/services/cable-subs.webp" alt="Cable Subscription">
        <h4 style="padding-top:20px" ;>Cable Subscription</h4>
        <p>Enjoy instant cable TV subscriptions at discounted rates lower than the competition!.</p>
      </div>
      <div class="col-lg-4 col-md-6">
        <img src="images/services/neco-pin.webp" alt="Data">
        <h4 style="padding-top:20px" ;>Neco Result Checker Pin</h4>
        <p>Easily purchase your NECO result checker PIN and access your results instantly.</p>
      </div>
      <div class="col-lg-4 col-md-6">
        <img src="images/services/utility-bill.webp" alt="Utillity Bill">
        <h4 style="padding-top:20px" ;>Utility Payment</h4>
        <p>Settle your electricity and other utility bills instantly and hassle-free. Enjoy a seamless payment
          experience with our reliable and secure platform</p>
      </div>
      <div class="col-lg-4 col-md-6">
        <img src="images/services/data.webp" alt="Data">
        <h4 style="padding-top:20px" ;>Buy Data</h4>
        <p>Stay connected with our affordable data bundles. Enjoy instant activation and unbeatable rates for all
          networks.</p>
      </div>
      <div class="col-lg-4  col-md-6">
        <img src="images/services/bulk-sme.webp" alt="Bulk SME">
        <h4 style="padding-top:20px" ;>Bulk SME</h4>
        <p>Get affordable bulk SME data with instant delivery. Enjoy discounted rates and seamless activation for all
          networks.</p>
      </div>
    </div>
  </div>

  <hr style="width:90%; margin:auto;">

  <div class="pricing-container">
    <div class="data">
      <h2>Affordable Data Plans and Prices</h2>
      <div class="data-box">
        <div class="data-plan">
          <img src="images/logos/mtn-logo.png" style="width:50px; height:50px; border-radius:100%;">
          <h4>MTN DATA</h4>
          <ul>
            <li>500MB</li>
            <li>
              &#8358;
              132.5
            </li>
            <li>30days</li>
          </ul>
          <ul>
            <li>1.00GB</li>
            <li>

              &#8358;
              265
            </li>
            <li>30days</li>
          </ul>
          <ul>
            <li>2.00GB</li>
            <li>

              &#8358;
              530
            </li>
            <li>30days</li>
          </ul>
          <ul>
            <li>3.00GB</li>
            <li>

              &#8358;
              795
            </li>
            <li>30days</li>
          </ul>
          <ul>
            <li>5.00GB</li>
            <li>

              &#8358;
              1325
            </li>
            <li>30days</li>
          </ul>
          <ul>
            <li>10.0GB</li>
            <li>
              &#8358;
              2650 </li>
            <li>60days</li>
          </ul>
          <a href="/v/register">Get Started</a>
        </div>
        <div class="data-plan">
          <img src="images/logos/glo-logo.jpeg" style="width:50px; height:50px; border-radius:100%;">
          <h4>GLO DATA</h4>
          <ul>
            <li>200MB</li>
            <li>
              &#8358;
              90
            </li>
            <li>14days</li>
          </ul>
          <ul>
            <li>500MB</li>
            <li>
              &#8358;
              225
            </li>
            <li>14days</li>
          </ul>
          <ul>
            <li>500MB</li>
            <li>
              &#8358;
              225
            </li>
            <li>30days</li>
          </ul>
          <ul>
            <li>1.00GB</li>
            <li>
              &#8358;
              450
            </li>
            <li>30days</li>
          </ul>
          <ul>
            <li>2.00GB</li>
            <li>
              &#8358;
              900
            </li>
            <li>30days</li>
          </ul>
          <ul>
            <li>3.00GB</li>
            <li>
              &#8358;
              1350
            </li>
            <li>30days</li>
          </ul>
          <ul>
            <li>5.00GB</li>
            <li>
              &#8358;
              2250
            </li>
            <li>30days</li>
          </ul>
          <ul>
            <li>10GB</li>
            <li>
              &#8358;
              4500
            </li>
            <li>30days</li>
          </ul>
          <a href="/v/register">Get Started</a>
        </div>
        <div class="data-plan">
          <img src="images/logos/airtel-logo.png" style="width:50px; height:50px; border-radius:100%;">
          <h4>AIRTEL DATA</h4>
          <ul>
            <li>100MB</li>
            <li>
              &#8358;
              70
            </li>
            <li>7days</li>
          </ul>
          <ul>
            <li>300MB</li>
            <li>
              &#8358;
              210 </li>
            <li>7days</li>
          </ul>
          <ul>
            <li>500MB</li>
            <li>
              &#8358;
              350
            </li>
            <li>30days</li>
          </ul>

          <ul>
            <li>1.00GB</li>
            <li>
              &#8358;
              700 </li>
            <li>30days</li>
          </ul>
          <ul>
            <li>2.00GB</li>
            <li>
              &#8358;
              1400
            </li>
            <li>30days</li>
          </ul>
          <ul>
            <li>5.00GB</li>
            <li> &#8358;
              3500 </li>

            <li>30days</li>
          </ul>
          <ul>
            <li>10GB</li>
            <li>&#8358;
              7000 </li>
            <li>30days</li>
          </ul>
          <ul>
            <li>15.0GB</li>
            <li>&#8358;
              10500 </li>
            <li>30days</li>
          </ul>
          <a href="/v/register">Get Started</a>
        </div>
        <div class="data-plan">
          <img src="images/logos/9mobile-logo.jpeg" style="width:50px; height:50px; border-radius:100%;">
          <h4>9MOBILE DATA</h4>
          <ul>
            <li>1.00GB</li>
            <li>
              &#8358;
              150
            </li>
            <li>30days</li>
          </ul>
          <ul>
            <li>1.5GB</li>
            <li>
              &#8358;
              225
            </li>
            <li>30days</li>
          </ul>
          <ul>
            <li>2GB</li>
            <li>
              &#8358;
              300 </li>
            <li>30days</li>
          </ul>
          <ul>
            <li>2.5GB</li>
            <li>
              &#8358;
              375
            </li>
            <li>30days</li>
          </ul>
          <ul>
            <li>3GB</li>
            <li>
              &#8358;
              450
            </li>
            <li>30days</li>
          </ul>
          <ul>
            <li>4.5GB</li>
            <li>
              &#8358;
              675
            </li>
            <li>30days</li>
          </ul>
          <ul>
            <li>5.00GB</li>
            <li>
              &#8358;
              750
            </li>
            <li>30days</li>
          </ul>
          <ul>
            <li>6.00GB</li>
            <li>
              &#8358;
              900
            </li>
            <li>30days</li>
          </ul>

          <a href="/v/register">Get Started</a>
        </div>
      </div>
    </div>
  </div>

  <hr style="width:90%; margin:auto;">

  <!-- Footer Section -->
  <section id="footer-section">
    <div class="footer1 row">
      <div class="footer-column col-lg-4">
        <h4>SkyCheap</h4>
        <p>
          SkyCheap is your all-in-one platform for seamless online transactions. Say goodbye to multiple USSD codes!
          With SkyCheap, you can easily recharge airtime, subscribe to data, pay bills, and earn cashback—quickly and
          effortlessly.
        </p>
      </div>
      <div class="footer-column col-lg-4">
        <h4>Product</h4>
        <p>Airtime & Data<br>
          Utility Bills<br>
          Educational Payment<br>
          Airtime to Cash
        </p>
      </div>
      <div class="footer-column col-lg-4">
        <h4>Contact Us</h4>
        <p>Email: skycheap702@gmail.com<br>
          Phone: +234 8135599125<br>
          Address: Available Online
        </p>
      </div>
    </div>
    <div class="footer2"><span>&copy; SkyCheap Phone: +234 813 559 9125</span></div>
  </section>
  <!-- Bootstrap 5.3.0 JS (Required for Components) -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

  <!-- MDBootstrap 5 JS (Enhances Bootstrap with Additional Features) -->

  <script src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/5.0.0/mdb.min.js"></script>
  <script src="javascript/script1.js"></script>
</body>

</html>