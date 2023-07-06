
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
                    <div class="col-md-10 text-center" data-aos="fade-up">
                      <span class="custom-caption text-uppercase text-white d-block  mb-3">WELCOME TO SUTUS COURT</span>
                      <h1 class="heading">A Best Place To Stay</h1>
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
                    <div class="col-md-10 text-center" data-aos="fade-up">
                      <span class="custom-caption text-uppercase text-white d-block  mb-3">WELCOME TO SUTUS COURT</span>
                      <h1 class="heading">A Best Place To Stay</h1>
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
    <section class="py-5 bg-light">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-12 col-lg-7 ml-auto order-lg-2 position-relative mb-5" data-aos="fade-up">
            <figure class="img-absolute">
              <img src="images/food-1.jpg" alt="Image" class="img-fluid">
            </figure>
            <img src="images/img_1.jpg" alt="Image" class="img-fluid rounded">
          </div>
          <div class="col-md-12 col-lg-4 order-lg-1" data-aos="fade-up">
            <h2 class="heading">Welcome!</h2>
            <p class="mb-4">Sutus Court is well located on Soi Buakhaw, a nice and restful area of Pattaya City. Here in Pattaya prime location for peaceful hotels,
               we offer you a pleasant stay and convenient transportation with only 5 minutes drive from Pattaya City Center and just 300 meters away from the uncrowded Pattaya beachfront.
                Each guest room is keenly designed and colored in a unique theme to create 10 different ambience to satisfy individual.</p>
            <p><a href="#" class="btn btn-primary text-white py-2 mr-3">Learn More</a> <span class="mr-3 font-family-serif"><em>or</em></span> <a href="https://www.youtube.com/watch?v=lP42nTzHeu8"  data-fancybox class="text-uppercase letter-spacing-1">See video</a></p>
          </div>
          
        </div>
      </div>
    </section>
    
    <section class="section">
      <div class="container">
        <div class="row justify-content-center text-center mb-5">
          <div class="col-md-7">
            <h2 class="heading" data-aos="fade-up">Rooms &amp; Suites</h2>
            <p data-aos="fade-up" data-aos-delay="100">All are spacious and stylish with air-conditioning and a private balcony. Because we provide at-home comfort and at-hotel service. Let your relaxing vacation begin at our hotel.</p>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div id="slider-card" class="owl-carousel mb-5" data-aos="fade-up" data-aos-delay="200">
              <div class="item2">
                <a href="rooms.php#room1" target="_self" class="room2">
                  <div class="img-wrap2">
                    <img src="images/zone1/zone1-01.jpg" alt="Zone1" class="img-fluid mb-3 d-block">
                  </div>
                  <div class="p-3 text-center room-info">
                    <h2>ZONE 1</h2>
                    <span class="text-uppercase letter-spacing-1">1040 Baht / per night</span>
                  </div>
                </a>
              </div>
              <div class="item2">
                <a href="rooms.php" class="room2">
                  <div class="img-wrap2">
                    <img src="images/zone2/zone2-01.jpg" alt="Zone2" class="img-fluid mb-3 d-block">
                  </div>
                  <div class="p-3 text-center room-info">
                    <h2>ZONE 2</h2>
                    <span class="text-uppercase letter-spacing-1">830 Baht / per night</span>
                  </div>
                </a>
              </div>
              <div class="item2">
                <a href="rooms.php" class="room2">
                  <div class="img-wrap2">
                    <img src="images/zone3/zone3-01.jpg" alt="Zone3" class="img-fluid mb-3 d-block">
                  </div>
                  <div class="p-3 text-center room-info">
                    <h2>ZONE 3</h2>
                    <span class="text-uppercase letter-spacing-1">720-750 (Pool) Baht / per night</span>
                  </div>
                </a>
              </div>
              <div class="item2">
                <a href="rooms.php" class="room2">
                  <div class="img-wrap2">
                    <img src="images/zone4/zone4-01.jpg" alt="Zone4" class="img-fluid mb-3 d-block">
                  </div>
                  <div class="p-3 text-center room-info">
                    <h2>ZONE 4</h2>
                    <span class="text-uppercase letter-spacing-1">750 Baht / per night</span>
                  </div>
                </a>
              </div>
              <div class="item2">
                <a href="rooms.php" class="room2">
                  <div class="img-wrap2">
                    <img src="images/zone5/zone5-01.jpg" alt="Zone5" class="img-fluid mb-3 d-block">
                  </div>
                  <div class="p-3 text-center room-info">
                    <h2>ZONE 5</h2>
                    <span class="text-uppercase letter-spacing-1">620 Baht / per night</span>
                  </div>
                </a>
              </div>
            </div>
            <div class="custom-nav">
              <button class="slider-prev btn btn-link"><i class="fas fa-chevron-left"></i></button>
              <button class="slider-next btn btn-link"><i class="fas fa-chevron-right"></i></button>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    
  
    

    
    <section class="section slider-section bg-light">
      <div class="container">
        <div class="row justify-content-center text-center mb-5">
          <div class="col-md-7">
            <h2 class="heading" data-aos="fade-up">Photos</h2>
            <p data-aos="fade-up" data-aos-delay="100">Enjoy the breath-taking views from our Hotel</p>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="home-slider major-caousel owl-carousel mb-5" data-aos="fade-up" data-aos-delay="200">
              <div class="slider-item"><a href="images/slider-1.jpg" data-fancybox="images" data-caption="Caption for this image"><img src="images/slider-1.jpg" alt="Image placeholder" class="img-fluid"></a></div>
              <div class="slider-item"><a href="images/slider-2.jpg" data-fancybox="images" data-caption="Caption for this image"><img src="images/slider-2.jpg" alt="Image placeholder" class="img-fluid"></a></div>
              <div class="slider-item"><a href="images/slider-3.jpg" data-fancybox="images" data-caption="Caption for this image"><img src="images/slider-3.jpg" alt="Image placeholder" class="img-fluid"></a></div>
              <div class="slider-item"><a href="images/slider-4.jpg" data-fancybox="images" data-caption="Caption for this image"><img src="images/slider-4.jpg" alt="Image placeholder" class="img-fluid"></a></div>
              <div class="slider-item"><a href="images/slider-5.jpg" data-fancybox="images" data-caption="Caption for this image"><img src="images/slider-5.jpg" alt="Image placeholder" class="img-fluid"></a></div>
              <div class="slider-item"><a href="images/slider-6.jpg" data-fancybox="images" data-caption="Caption for this image"><img src="images/slider-6.jpg" alt="Image placeholder" class="img-fluid"></a></div>
              <div class="slider-item"><a href="images/slider-7.jpg" data-fancybox="images" data-caption="Caption for this image"><img src="images/slider-7.jpg" alt="Image placeholder" class="img-fluid"></a></div>
              <div class="slider-item"><a href="images/slider-8.jpg" data-fancybox="images" data-caption="Caption for this image"><img src="images/slider-8.jpg" alt="Image placeholder" class="img-fluid"></a></div>
              <div class="slider-item"><a href="images/slider-9.jpg" data-fancybox="images" data-caption="Caption for this image"><img src="images/slider-9.jpg" alt="Image placeholder" class="img-fluid"></a></div>
              <div class="slider-item"><a href="images/slider-10.jpg" data-fancybox="images" data-caption="Caption for this image"><img src="images/slider-10.jpg" alt="Image placeholder" class="img-fluid"></a></div>
              <div class="slider-item"><a href="images/slider-11.jpg" data-fancybox="images" data-caption="Caption for this image"><img src="images/slider-11.jpg" alt="Image placeholder" class="img-fluid"></a></div>
              <div class="slider-item"><a href="images/slider-12.jpg" data-fancybox="images" data-caption="Caption for this image"><img src="images/slider-12.jpg" alt="Image placeholder" class="img-fluid"></a></div>
              <div class="slider-item"><a href="images/slider-13.jpg" data-fancybox="images" data-caption="Caption for this image"><img src="images/slider-13.jpg" alt="Image placeholder" class="img-fluid"></a></div>
              <div class="slider-item"><a href="images/slider-14.jpg" data-fancybox="images" data-caption="Caption for this image"><img src="images/slider-14.jpg" alt="Image placeholder" class="img-fluid"></a></div>
              <div class="slider-item"><a href="images/slider-15.jpg" data-fancybox="images" data-caption="Caption for this image"><img src="images/slider-15.jpg" alt="Image placeholder" class="img-fluid"></a></div>
              <div class="slider-item"><a href="images/slider-16.jpg" data-fancybox="images" data-caption="Caption for this image"><img src="images/slider-16.jpg" alt="Image placeholder" class="img-fluid"></a></div>
              <div class="slider-item"><a href="images/slider-17.jpg" data-fancybox="images" data-caption="Caption for this image"><img src="images/slider-17.jpg" alt="Image placeholder" class="img-fluid"></a></div>
              <div class="slider-item"><a href="images/slider-18.jpg" data-fancybox="images" data-caption="Caption for this image"><img src="images/slider-18.jpg" alt="Image placeholder" class="img-fluid"></a></div>
              <div class="slider-item"><a href="images/slider-19.jpg" data-fancybox="images" data-caption="Caption for this image"><img src="images/slider-19.jpg" alt="Image placeholder" class="img-fluid"></a></div>
            </div>
            <!-- END slider -->
          </div>
        
        </div>
      </div>
    </section>
    <!-- END section -->
    
    <section class="section bg-image overlay" style="background-image: url('images/hero_3.jpg');">
      <div class="container">
        <div class="row justify-content-center text-center mb-5">
          <div class="col-md-7">
            <h2 class="heading text-white" data-aos="fade">Our Restaurant Menu</h2>
            <p class="text-white" data-aos="fade" data-aos-delay="100">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
          </div>
        </div>
        <div class="food-menu-tabs" data-aos="fade">
          <ul class="nav nav-tabs mb-5" id="myTab" role="tablist">
            <li class="nav-item">
              <a class="nav-link active letter-spacing-2" id="mains-tab" data-bs-toggle="tab" href="#mains" role="tab" aria-controls="mains" aria-selected="true">Mains</a>
            </li>
            <li class="nav-item">
              <a class="nav-link letter-spacing-2" id="desserts-tab" data-bs-toggle="tab" href="#desserts" role="tab" aria-controls="desserts" aria-selected="false">Desserts</a>
            </li>
            <li class="nav-item">
              <a class="nav-link letter-spacing-2" id="drinks-tab" data-bs-toggle="tab" href="#drinks" role="tab" aria-controls="drinks" aria-selected="false">Drinks</a>
            </li>
          </ul>
          <div class="tab-content py-5" id="myTabContent">
            <div class="tab-pane fade show active text-left" id="mains" role="tabpanel" aria-labelledby="mains-tab">
              <div class="row">
                <div class="col-md-6">
                  <div class="food-menu mb-5">
                    <span class="d-block text-primary h4 mb-3">$20.00</span>
                    <h3 class="text-white"><a href="#" class="text-white">Murgh Tikka Masala</a></h3>
                    <p class="text-white text-opacity-7">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                  </div>
                  <div class="food-menu mb-5">
                    <span class="d-block text-primary h4 mb-3">$35.00</span>
                    <h3 class="text-white"><a href="#" class="text-white">Fish Moilee</a></h3>
                    <p class="text-white text-opacity-7">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                  </div>
                  <div class="food-menu mb-5">
                    <span class="d-block text-primary h4 mb-3">$15.00</span>
                    <h3 class="text-white"><a href="#" class="text-white">Safed Gosht</a></h3>
                    <p class="text-white text-opacity-7">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="food-menu mb-5">
                    <span class="d-block text-primary h4 mb-3">$10.00</span>
                    <h3 class="text-white"><a href="#" class="text-white">French Toast Combo</a></h3>
                    <p class="text-white text-opacity-7">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                  </div>
                  <div class="food-menu mb-5">
                    <span class="d-block text-primary h4 mb-3">$8.35</span>
                    <h3 class="text-white"><a href="#" class="text-white">Vegie Omelet</a></h3>
                    <p class="text-white text-opacity-7">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                  </div>
                  <div class="food-menu mb-5">
                    <span class="d-block text-primary h4 mb-3">$22.00</span>
                    <h3 class="text-white"><a href="#" class="text-white">Chorizo &amp; Egg Omelet</a></h3>
                    <p class="text-white text-opacity-7">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-pane fade text-left" id="desserts" role="tabpanel" aria-labelledby="desserts-tab">
              <div class="row">
                <div class="col-md-6">
                  <div class="food-menu mb-5">
                    <span class="d-block text-primary h4 mb-3">$11.00</span>
                    <h3 class="text-white"><a href="#" class="text-white">Banana Split</a></h3>
                    <p class="text-white text-opacity-7">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                  </div>
                  <div class="food-menu mb-5">
                    <span class="d-block text-primary h4 mb-3">$72.00</span>
                    <h3 class="text-white"><a href="#" class="text-white">Sticky Toffee Pudding</a></h3>
                    <p class="text-white text-opacity-7">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                  </div>
                  <div class="food-menu mb-5">
                    <span class="d-block text-primary h4 mb-3">$26.00</span>
                    <h3 class="text-white"><a href="#" class="text-white">Pecan</a></h3>
                    <p class="text-white text-opacity-7">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="food-menu mb-5">
                    <span class="d-block text-primary h4 mb-3">$42.00</span>
                    <h3 class="text-white"><a href="#" class="text-white">Apple Strudel</a></h3>
                    <p class="text-white text-opacity-7">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                  </div>
                  <div class="food-menu mb-5">
                    <span class="d-block text-primary h4 mb-3">$7.35</span>
                    <h3 class="text-white"><a href="#" class="text-white">Pancakes</a></h3>
                    <p class="text-white text-opacity-7">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                  </div>
                  <div class="food-menu mb-5">
                    <span class="d-block text-primary h4 mb-3">$22.00</span>
                    <h3 class="text-white"><a href="#" class="text-white">Ice Cream Sundae</a></h3>
                    <p class="text-white text-opacity-7">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-pane fade text-left" id="drinks" role="tabpanel" aria-labelledby="drinks-tab">
              <div class="row">
                <div class="col-md-6">
                  <div class="food-menu mb-5">
                    <span class="d-block text-primary h4 mb-3">$32.00</span>
                    <h3 class="text-white"><a href="#" class="text-white">Spring Water</a></h3>
                    <p class="text-white text-opacity-7">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                  </div>
                  <div class="food-menu mb-5">
                    <span class="d-block text-primary h4 mb-3">$14.00</span>
                    <h3 class="text-white"><a href="#" class="text-white">Coke, Diet Coke, Coke Zero</a></h3>
                    <p class="text-white text-opacity-7">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                  </div>
                  <div class="food-menu mb-5">
                    <span class="d-block text-primary h4 mb-3">$93.00</span>
                    <h3 class="text-white"><a href="#" class="text-white">Orange Fanta</a></h3>
                    <p class="text-white text-opacity-7">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="food-menu mb-5">
                    <span class="d-block text-primary h4 mb-3">$18.00</span>
                    <h3 class="text-white"><a href="#" class="text-white">Lemonade, Lemon Squash</a></h3>
                    <p class="text-white text-opacity-7">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                  </div>
                  <div class="food-menu mb-5">
                    <span class="d-block text-primary h4 mb-3">$38.35</span>
                    <h3 class="text-white"><a href="#" class="text-white">Sparkling Mineral Water</a></h3>
                    <p class="text-white text-opacity-7">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                  </div>
                  <div class="food-menu mb-5">
                    <span class="d-block text-primary h4 mb-3">$69.00</span>
                    <h3 class="text-white"><a href="#" class="text-white">Lemon, Lime &amp; Bitters</a></h3>
                    <p class="text-white text-opacity-7">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    
    <!-- END section -->
    <section class="section testimonial-section">
      <div class="container">
        <div class="row justify-content-center text-center mb-5">
          <div class="col-md-7">
            <h2 class="heading" data-aos="fade-up">People Says</h2>
          </div>
        </div>
        <div class="row">
          <div class="js-carousel-2 owl-carousel mb-5" data-aos="fade-up" data-aos-delay="200">
            
            <div class="testimonial text-center slider-item">
              <div class="author-image mb-3">
                <img src="images/person_1.jpg" alt="Image placeholder" class="rounded-circle mx-auto">
              </div>
              <blockquote>

                <p>&ldquo;Good value hotel.Great location.Good Staff.Nice Pool.&rdquo;</p>
              </blockquote>
              <p><em>&mdash; Mark</em></p>
            </div> 

            <div class="testimonial text-center slider-item">
              <div class="author-image mb-3">
                <img src="images/person_2.jpg" alt="Image placeholder" class="rounded-circle mx-auto">
              </div>
              <blockquote>
                <p>&ldquo;Room - 10/10
                  Hotel Area - 10/10
                  Locality 100/100 Soi Bukhao 🔝
                  Staffs 100/100
                  Bathroom is Good.
                  Balcony is Awesome.
                  Room Chairs are so Good.
                  House Keeping So Good & Respectful(usually they are not in Pattaya).
                  AC is Very Good.
                  Swimming Pool is Lovely.
                  Spacious Room.
                  Wifi is Good.
                  &rdquo;</p>
              </blockquote>
              <p><em>&mdash; Prasanna</em></p>
            </div>

            <div class="testimonial text-center slider-item">
              <div class="author-image mb-3">
                <img src="images/person_3.jpg" alt="Image placeholder" class="rounded-circle mx-auto">
              </div>
              <blockquote>
                <p>&ldquo;location is super,2 pools are nice,aircon strong,wifi strong,everything around you never need transportation for nightlife and daily needs,beach taxi 10 or 20 baht.&rdquo;</p>
              </blockquote>
              <p><em>&mdash; Frank</em></p>
            </div>


            <div class="testimonial text-center slider-item">
              <div class="author-image mb-3">
                <img src="images/person_4.jpg" alt="Image placeholder" class="rounded-circle mx-auto">
              </div>
              <blockquote>

                <p>&ldquo;Went out of their way to find a spot to park my car.Check in always easy and no deposits.Staff are smiling and happy to get some tourist traffic.&rdquo;</p>
              </blockquote>
              <p><em>&mdash; Redman</em></p>
            </div> 

            <div class="testimonial text-center slider-item">
              <div class="author-image mb-3">
                <img src="images/person_5.jpg" alt="Image placeholder" class="rounded-circle mx-auto">
              </div>
              <blockquote>
                <p>&ldquo;You are close to everything: food, buses, money changers, rentals, bars, shops.... everything you could ask for.....

                  The staff was friendly and helpful.
                  
                  The pool was clean.&rdquo;</p>
              </blockquote>
              <p><em>&mdash; James</em></p>
            </div>

            <div class="testimonial text-center slider-item">
              <div class="author-image mb-3">
                <img src="images/person_6.jpg" alt="Image placeholder" class="rounded-circle mx-auto">
              </div>
              <blockquote>

                <p>&ldquo;Great value,reception staff very helpful and friendly. excellent location,will book again soon.&rdquo;</p>
              </blockquote>
              <p><em>&mdash; Robert</em></p>
            </div>

          </div>
            <!-- END slider -->
        </div>

      </div>
    </section>

    
    