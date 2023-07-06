<?php
$date_in = isset($_POST['date_in']) ? $_POST['date_in'] : date('Y-m-d');
$date_out = isset($_POST['date_out']) ? $_POST['date_out'] : date('Y-m-d', strtotime(date('Y-m-d') . ' + 3 days'));
$adults = $_POST['adults'] ?? "";

$children = $_POST['children'] ?? "";

?>

<!-- Masthead -->
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

    <section class="site-hero inner-page overlay" style="background-image: url(images/hero_4.jpg)" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row site-hero-inner justify-content-center align-items-center">
          <div class="col-md-10 text-center" data-aos="fade">
            <h1 class="heading mb-3">Rooms</h1>
            <ul class="custom-breadcrumbs mb-4">
              <li><a href="index.php">Home</a></li>
              <li>&bullet;</li>
              <li>Rooms</li>
            </ul>
          </div>
        </div>
      </div>

      <a class="mouse smoothscroll" href="#next">
        <div class="mouse-icon">
          <span class="mouse-wheel"></span>
        </div>
      </a>
    </section>
    <!-- END section -->

<section class="page-section bg-dark">
  <div class="container">
    <div class="col-lg-12">
      <div class="card">
        <div class="card-body">
          <form action="index.php?page=list" id="filter" method="POST">
            <div class="row">
              <div class="col-md-6 mb-3 mb-lg-0 col-lg-3">
                <label for="checkin_date" class="font-weight-bold text-black">Check In</label>
                <div class="field-icon-wrap">
                  <div class="icon"><span class="icon-calendar"></span></div>
                  <input type="text" class="form-control datepicker" name="date_in" autocomplete="off" value="<?php echo isset($date_in) ? date("Y-m-d", strtotime($date_in)) : "" ?>">
                </div>
              </div>
              <div class="col-md-6 mb-3 mb-lg-0 col-lg-3">
                <label for="checkout_date" class="font-weight-bold text-black">Check Out</label>
                <div class="field-icon-wrap">
                  <div class="icon"><span class="icon-calendar"></span></div>
                  <input type="text" class="form-control datepicker" name="date_out" autocomplete="off" value="<?php echo isset($date_out) ? date("Y-m-d", strtotime($date_out)) : "" ?>">
                </div>
              </div>
              <div class="col-md-6 mb-3 mb-md-0 col-lg-3">
				<div class="row">
					<div class="col-md-6 mb-3 mb-md-0">
					<label for="adults" class="font-weight-bold text-black">Adults</label>
					<div class="field-icon-wrap">
						<div class="icon"><span class="ion-ios-arrow-down"></span></div>
						<select name="adults" id="adults" class="form-control">
						<option value="1" <?php if ($adults == "1") echo "selected"; ?>>1</option>
						<option value="2" <?php if ($adults == "2") echo "selected"; ?>>2</option>
						<option value="3" <?php if ($adults == "3") echo "selected"; ?>>3</option>
						<option value="4+" <?php if ($adults == "4+") echo "selected"; ?>>4+</option>
						</select>
					</div>
					</div>
					<div class="col-md-6 mb-3 mb-md-0">
					<label for="children" class="font-weight-bold text-black">Children</label>
					<div class="field-icon-wrap">
						<div class="icon"><span class="ion-ios-arrow-down"></span></div>
						<select name="children" id="children" class="form-control">
						<option value="1" <?php if ($children == "1") echo "selected"; ?>>1</option>
						<option value="2" <?php if ($children == "2") echo "selected"; ?>>2</option>
						<option value="3" <?php if ($children == "3") echo "selected"; ?>>3</option>
						<option value="4+" <?php if ($children == "4+") echo "selected"; ?>>4+</option>
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
      <hr>
      <?php
      $cat = $conn->query("SELECT * FROM room_categories");
      $cat_arr = array();
      while ($row = $cat->fetch_assoc()) {
        $cat_arr[$row['id']] = $row;
      }
      $qry = $conn->query("SELECT distinct(category_id),category_id from rooms where id not in (SELECT room_id from checked where '$date_in' BETWEEN date(date_in) and date(date_out) and '$date_out' BETWEEN date(date_in) and date(date_out)  )");
      while ($row = $qry->fetch_assoc()) :
      ?>
        <div class="card item-rooms mb-3">
          <div class="card-body">
            <div class="row">
              <div class="col-md-5">
                <img src="images/<?php echo $cat_arr[$row['category_id']]['cover_img'] ?>" alt="">
              </div>
              <div class="col-md-5" height="100%">
                <h3><b><?php echo '$ ' . number_format($cat_arr[$row['category_id']]['price'], 2) ?></b><span> / per day</span></h3>
                <h4><b><?php echo $cat_arr[$row['category_id']]['name'] ?></b></h4>
                <div class="align-self-end mt-5">
                  <button class="btn btn-primary float-right book_now" type="button" data-id="<?php echo $row['category_id'] ?>">Book now</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      <?php endwhile; ?>
    </div>
  </div>
</section>

<style type="text/css">
  .item-rooms img {
    width: 23vw;
  }
</style>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="admin/assets/vendor/jquery/jquery.min.js"></script>
<script src="admin/assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>

<script>
  $('.book_now').click(function() {
    uni_modal('Book', 'admin/book.php?in=<?php echo $date_in ?>&out=<?php echo $date_out ?>&cid=' + $(this).attr('data-id'))
  })
</script>
