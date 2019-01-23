<div class="header-space"></div>
      <!-- Page Header Start Here -->
      <section class="page-header-bg">
      <div class="page-header">
	 
	  

          <div class="product-header mobile_only_text_center">
              <div class="container">
                <div class="row">
                  <div class="col-md-9">
                    <h2 class="p-t-5">Mock Test</h2>
                  </div>
                  <div class="col-md-3 m-t-10">
                    <a href="<?php echo base_url(); ?>">Home</a> <i class="fa fa-angle-double-right"></i>
                    <a class="current_page">Mock Test</a>
                  </div>
                </div>
              </div>  
          </div> 
		   </div>
       
        </section>
      <!-- Page Header End Here -->

      <!-- Main Section Start Here -->
      <div id="main">
        <!-- About Us Section Start Here-->
        <section id="about-us" class="about-section">
          <div class="section-padding">
            <div class="container">
              <div class="row about-list">
                <div class="form col-md-4 contact-form wow fadeInLeft " data-wow-duration="1.5s" data-wow-offset="10">
					<div class="panel panel-default">
					<div class="panel-heading ">
					<span class="h2">Select Test</span>
					
</span>
					</div>
						<div class="panel-body">
						
							<a href="#" class="btn btn-primary btn-block" role="button">Mock Test 1</a>
							<a href="#" class="btn btn-warning btn-block" role="button">Mock Test 2</a>
							<a href="#" class="btn btn-danger btn-block" role="button">Mock Test 3</a>
							<a href="#" class="btn btn-success btn-block" role="button">Mock Test 4</a>
							
						</div>
					</div>
				</div>
                <div class="form col-md-8 contact-form wow fadeInRight " data-wow-duration="1.5s" data-wow-offset="10">
				<div class="panel panel-default">
					<div class="panel-heading ">
					<span class="h3">Mock test 1</span>
					<span class="h3 pull-right">Time : <span id="time">10:00</span>
</span>
					</div>
					<div class="panel-body">
				 <form id="#" class="form-horizontal" action="#" method="post">

<div class="">
    <p class="" style="margin-bottom:10px;font-weight:600">1. Which class provides a full width container, spanning the entire width of the viewport?</p>
    
    <div class="radio">
		<label>
			<input type="radio" name="quiz" id="1" value="1"> First Option 
		</label>
	</div>
	<div class="radio">
	<label>
		<input type="radio" name="quiz" id="3" value="3"> Second Option 
		</label>
	</div>
	<div class="radio">
		<label>
		<input type="radio" name="quiz" id="2" value="2"> Third Option
		</label>
	</div>
	<div class="radio">
		<label>
		<input type="radio" name="quiz" id="2" value="2"> Fourth Option
		</label>
	</div>
    <br>
    <input type="submit" class="w3-btn w3-orange w3-large w3-text-white" value=" Next ">
</div>
                  </form>
				  </div>
				</div>
                </div>
               
              </div>
            </div>
          </div>
        </section>
        <!-- About Us Section End Here-->

      
       
		
		

       
      </div>
      <!-- Main Section End Here -->

     
    <script> 
function startTimer(duration, display) {
    var timer = duration, minutes, seconds;
    setInterval(function () {
        minutes = parseInt(timer / 60, 10)
        seconds = parseInt(timer % 60, 10);

        minutes = minutes < 10 ? "0" + minutes : minutes;
        seconds = seconds < 10 ? "0" + seconds : seconds;

        display.text(minutes + ":" + seconds);

        if (--timer < 0) {
            timer = duration;
        }
    }, 1000);
}

jQuery(function ($) {
    var fiveMinutes = 60 * 10,
        display = $('#time');
    startTimer(fiveMinutes, display);
});	
    </script>      
