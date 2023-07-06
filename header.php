<?php
    function getPageTitle() {
    $page = basename($_SERVER['PHP_SELF']); // Get the current page file name

    switch ($page) {
        case 'index.php':
        return 'Home';
        case 'rooms.php':
        return 'Rooms';
        case 'rates.php':
        return 'Rates';
        case 'facilities.php':
        return 'Facilities & Service';
        case 'contact.php':
        return 'Contact';
        case 'location.php':
        return 'Location';
        case 'reservation.php':
        return 'Reservation';
        default:
        return 'Sutus Court'; // Default title if the page is not matched
    }
    }
    ?>

</head>
  <body>
    
    <header class="site-header">
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg navbar-light fixed-top">
          <div class="container">
            <a class="navbar-brand" href="index.php">
              <img src="images/logo_sutus.png" alt="Sogo Hotel Logo" class="logo-image">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
              <ul class="navbar-nav">
                <li class="nav-item">
                  <a class="nav-link" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="rooms.php">Rooms</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="rates.php">Rates</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="facilities.php">Facilities & Service</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="contact.php">Contact</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="location.php">Location</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="reservation.php">Reservation</a>
                </li>
              </ul>
            </div>
          </div>
        </nav>
      </div>
    </header>
    

    <!-- END head -->
      <!-- Start Slider -->
      <div class="slider_area">
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <section class="site-hero overlay" style="background-image: url(images/hero_1.jpg)" data-stellar-background-ratio="0.5">
                <div class="container">
                  <div class="row site-hero-inner justify-content-center align-items-center">
                    <div class="col-md-10 text-center" data-aos="fade">
                      <h1 class="heading mb-3"><?php echo getPageTitle(); ?></h1>
                        <ul class="custom-breadcrumbs mb-4">
                          <li><a href="index.php">Home</a></li>
                          <li>&bullet;</li>
                          <li><?php echo getPageTitle(); ?></li>
                        </ul>
                    </div>
                  </div>
                </div>
                <div class="row site-hero-inner justify-content-center align-items-center">
                  <div class="col-md-10 text-center">
                    <a class="mouse smoothscroll" href="#next">
                      <div class="mouse-icon">
                        <span class="mouse-wheel"></span>
                      </div>
                    </a>
                  </div>
                </div>
              </section>
            </div>
            <div class="carousel-item">
              <section class="site-hero overlay" style="background-image: url(images/hero_2.jpg)" data-stellar-background-ratio="0.5">
                <div class="container">
                  <div class="row site-hero-inner justify-content-center align-items-center">
                    <div class="col-md-10 text-center" data-aos="fade">
                      <h1 class="heading mb-3"><?php echo getPageTitle(); ?></h1>
                        <ul class="custom-breadcrumbs mb-4">
                          <li><a href="index.php">Home</a></li>
                          <li>&bullet;</li>
                          <li><?php echo getPageTitle(); ?></li>
                        </ul>
                    </div>
                  </div>
                  <div class="row site-hero-inner justify-content-center align-items-center">
                    <div class="col-md-10 text-center">
                      <a class="mouse smoothscroll" href="#next">
                        <div class="mouse-icon">
                          <span class="mouse-wheel"></span>
                        </div>
                      </a>
                    </div>
                  </div>
              </section>
            </div>
            <!-- Add more carousel items as needed -->
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </div>
      <!-- END section -->

      <section class="section bg-light pb-0">
        <div class="container">
            <div class="row check-availabilty" id="next">
            <div class="block-32" data-aos="fade-up" data-aos-offset="-200">
                <form action="index.php?page=list" id="filter" method="POST">
                <div class="row">
                    <div class="col-md-6 mb-3 mb-lg-0 col-lg-3">
                    <label for="checkin_date" class="font-weight-bold text-black">Check In</label>
                    <div class="field-icon-wrap">
                        <div class="icon"><span class="icon-calendar"></span></div>
                        <input type="text" id="checkin_date" class="form-control" name="date_in" value="<?php echo isset($_POST['date_in']) ? $_POST['date_in'] : ''; ?>">
                    </div>
                    </div>
                    <div class="col-md-6 mb-3 mb-lg-0 col-lg-3">
                    <label for="checkout_date" class="font-weight-bold text-black">Check Out</label>
                    <div class="field-icon-wrap">
                        <div class="icon"><span class="icon-calendar"></span></div>
                        <input type="text" id="checkout_date" class="form-control" name="date_out" value="<?php echo isset($_POST['date_out']) ? $_POST['date_out'] : ''; ?>">
                    </div>
                    </div>
                    <div class="col-md-6 mb-3 mb-md-0 col-lg-3">
                    <div class="row">
                        <div class="col-md-6 mb-3 mb-md-0">
                        <label for="adults" class="font-weight-bold text-black">Adults</label>
                        <div class="field-icon-wrap">
                            <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                            <select name="adults" id="adults" class="form-control">
                            <option value="1" <?php if (isset($_POST['adults']) && $_POST['adults'] == '1') echo 'selected'; ?>>1</option>
                            <option value="2" <?php if (isset($_POST['adults']) && $_POST['adults'] == '2') echo 'selected'; ?>>2</option>
                            <option value="3" <?php if (isset($_POST['adults']) && $_POST['adults'] == '3') echo 'selected'; ?>>3</option>
                            <option value="4+" <?php if (isset($_POST['adults']) && $_POST['adults'] == '4+') echo 'selected'; ?>>4+</option>
                            </select>
                        </div>
                        </div>
                        <div class="col-md-6 mb-3 mb-md-0">
                        <label for="children" class="font-weight-bold text-black">Children</label>
                        <div class="field-icon-wrap">
                            <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                            <select name="children" id="children" class="form-control">
                            <option value="1" <?php if (isset($_POST['children']) && $_POST['children'] == '1') echo 'selected'; ?>>1</option>
                            <option value="2" <?php if (isset($_POST['children']) && $_POST['children'] == '2') echo 'selected'; ?>>2</option>
                            <option value="3" <?php if (isset($_POST['children']) && $_POST['children'] == '3') echo 'selected'; ?>>3</option>
                            <option value="4+" <?php if (isset($_POST['children']) && $_POST['children'] == '4+') echo 'selected'; ?>>4+</option>
                            </select>
                        </div>
                        </div>
                    </div>
                    </div>
                    <div class="col-md-6 col-lg-3 align-self-end">
                    <button class="btn btn-primary btn-block text-white">Check Availability</button>
                    </div>
                </div>
                </form>
            </div>
            </div>
        </div>
    </section>
    <script src="admin/assets/vendor/jquery/jquery.min.js"></script>
    <script src="admin/assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
