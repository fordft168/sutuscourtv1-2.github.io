<section class="section bg-image overlay" style="background-image: url('images/hero_4.jpg');">
      <div class="container" >
        <div class="row align-items-center">
          <div class="col-12 col-md-6 text-center mb-4 mb-md-0 text-md-left" data-aos="fade-up">
            <h2 class="text-white font-weight-bold">A Best Place To Stay. Reserve Now!</h2>
          </div>
          <div class="col-12 col-md-6 text-center text-md-right" data-aos="fade-up" data-aos-delay="200">
            <a href="reservation.php" class="btn btn-outline-white-primary py-3 text-white px-5">Reserve Now</a>
          </div>
        </div>
      </div>
    </section>
    
    <footer class="section footer-section">
        <div class="container">
          <div class="row mb-4">
            <div class="col-md-3 mb-5">
              <ul class="list-unstyled link">
                <li><a href="home.php"><img src="images/logo_sutus2.png" alt="Sutus Court Logo"></a></li>
                <li><a href="rooms.php">Rooms</a></li>
                <li><a href="rates.php">Rates</a></li>
              </ul>
            </div>
            <div class="col-md-3 mb-5">
              <ul class="list-unstyled link">
                <li><a href="facilities.php">Facilities &amp; Service</a></li>
                <li><a href="contact.php">Contact us</a></li>
                <li><a href="location.php">Location</a></li>
                <li><a href="reservation.php">Reservation</a></li>
              </ul>
            </div>
            <div class="col-md-3 mb-5 pr-md-5 contact-info">
              <p>
                <span class="d-block"><span class="ion-ios-location h5 mr-3 text-primary"></span>Address:</span>
                <span>420/100 Moo 9, Soi Buakhaw,</span><br>
                <span>Nongprue, Banglamung,</span><br>
                <span>Chon Buri 20150, Thailand.</span>
              </p>
              <p>
                <span class="d-block"><span class="ion-ios-telephone h5 mr-3 text-primary"></span>Phone:</span>
                <span><a href="tel:+66(0) 38428632-3">+66(0) 38428632-3</a></span>
              </p>
              <p>
                <span class="d-block"><span class="ion-ios-email h5 mr-3 text-primary"></span>Email:</span>
                <span><a href="mailto:sutuscourt@hotmail.com">sutuscourt@hotmail.com</a></span>
              </p>
            </div>
            <div class="col-md-3 mb-5">
              <p>Sign up for our newsletter</p>
              <form action="#" class="footer-newsletter">
                <div class="form-group">
                  <input type="email" class="form-control" placeholder="Email...">
                  <button type="submit" class="btn"><span class="fas fa-paper-plane"></span></button>
                </div>
              </form>
            </div>
          </div>
          <div class="row pt-5">
            <p class="col-md-6 text-left">
              &copy; <script>document.write(new Date().getFullYear());</script> All rights reserved Sutus Court
            </p>
            <p class="col-md-6 text-right social">
              <a href="#"><span class="fab fa-facebook"></span></a>
              <a href="#"><span class="fab fa-twitter"></span></a>
              <a href="https://th.tripadvisor.com/Hotel_Review-g293919-d2283542-Reviews-Sutus_Court-Pattaya_Chonburi_Province.php" target="_blank"><img src="images/tripadvisor-icon.png" alt="TripAdvisor" class="small-icon"></a>
            </p>
          </div>
        </div>
      </footer>

      <script>
      $('.datepicker').datepicker({
        format:"yyyy-mm-dd"
      })
      window.start_load = function(){
        $('body').prepend('<di id="preloader2"></di>')
      }
      window.end_load = function(){
        $('#preloader2').fadeOut('fast', function() {
            $(this).remove();
          })
      }

      window.uni_modal = function($title = '' , $url=''){
        start_load()
        $.ajax({
            url:$url,
            error:err=>{
                console.log()
                alert("An error occured")
            },
            success:function(resp){
                if(resp){
                    $('#uni_modal .modal-title').html($title)
                    $('#uni_modal .modal-body').html(resp)
                    $('#uni_modal').modal('show')
                    end_load()
                }
            }
        })
    }
    window.alert_toast= function($msg = 'TEST',$bg = 'success'){
          $('#alert_toast').removeClass('bg-success')
          $('#alert_toast').removeClass('bg-danger')
          $('#alert_toast').removeClass('bg-info')
          $('#alert_toast').removeClass('bg-warning')

        if($bg == 'success')
          $('#alert_toast').addClass('bg-success')
        if($bg == 'danger')
          $('#alert_toast').addClass('bg-danger')
        if($bg == 'info')
          $('#alert_toast').addClass('bg-info')
        if($bg == 'warning')
          $('#alert_toast').addClass('bg-warning')
        $('#alert_toast .toast-body').html($msg)
        $('#alert_toast').toast({delay:3000}).toast('show');
      }
    </script>
    <!-- Bootstrap core JS-->
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js"></script>
            <!-- Third party plugin JS-->
            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
            <!-- Core theme JS-->
            <script src="js/scripts.js"></script>