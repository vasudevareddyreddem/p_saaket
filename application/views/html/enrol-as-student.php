<?php include("header.php"); ?>
 <div class="header-space"></div>
<section class="page-header">
          <div class="product-header mobile_only_text_center">
              <div class="container">
                <div class="row">
                  <div class="col-md-9">
                    <h2 class="p-t-5">Student Enrolment </h2>
                  </div>
                  <div class="col-md-3 m-t-10">
                    <a href="#">Training </a> <i class="fa fa-angle-double-right"></i> 
                    <a class="current_page">Training </a>
                  </div>
                </div>
              </div>  
          </div> 
        </section>
	<div id="main" style="background:#f9f9f9">
          <!-- Contact Section Start Here -->
          <section id="contact-us" class="contact-section section-padding">
            <div class="container">
              
            </div>
            <div class="container form-section">
              <div class="row">
                
				<div class="form col-md-12 contact-form wow fadeInRight" data-wow-duration="1.5s" data-wow-offset="10">
                  <header class="page-header section-header">
				  <div  id="success-alert">
								
							</div>
					<h2>Student Enrolment </h2>
					 
				  </header>
				 <form action="enrol-as-student.php">
				  <div class="row">
				  <div class="col-md-6">
					  <div class="form-group">
						<label for="Name">Full Name</label>
						<input type="text" class="form-control" id="" placeholder="Enter Full Name ">
					  </div>
				  </div>
				  <div class="col-md-6">
					  <div class="form-group">
						<label for="Name">Gender</label>
						<div>
							<label class="radio-inline">
						  <input type="radio" name="optradio" checked>Male
						</label>
						<label class="radio-inline">
						  <input type="radio" name="optradio">Female
						</label>
						<label class="radio-inline">
						  <input type="radio" name="optradio">Third Person
						</label>
						</div>
					  </div>
				  </div>
				  </div>
				  <div class="row">
				  <div class="col-md-6">
					  <div class="form-group">
						<label >Education <small>(*Should pass 10th in English Medium)</small></label>
						<input type="text" class="form-control" id="" placeholder="Enter Education  ">
					  </div>
				  </div>
				  <div class="col-md-6">
					  <div class="form-group">
						<label for="Name">Phone</label>
						<input type="text" class="form-control" id="" placeholder="Enter Full Name ">
					  </div>
				  </div>
				  </div>
				  <div class="row">
				   <div class="col-md-6">
					  <div class="form-group">
						<label for="mail">Enrol for</label>
						<input type="mail" class="form-control" id="" placeholder="Enter E-Mail Id ">
					  </div>
				  </div>
				  <div class="col-md-6">
					  <div class="form-group">
						<label for="mail">E-Mail</label>
						<input type="mail" class="form-control" id="" placeholder="Enter E-Mail Id ">
					  </div>
				  </div>
				  </div>
				  <div class="row">
				  <div class="col-md-6">
					  <div class="form-group">
						<label for="Reference">Reference by </label>
						<input type="text" class="form-control" id="" placeholder="Enter Reference  ">
					  </div>
				  </div>
				  <div class="col-md-6">
					  <div class="form-group">
						<label for="Reference">Address</label>
						<input type="text" class="form-control" id="" placeholder="Enter Address  ">
					  </div>
				  </div>
				  </div>
				  <div class="row">
				  <div class="col-md-4">
					  <div class="form-group">
						<label >City/District</label>
						<input type="text" class="form-control" id="" placeholder="Enter City or District  ">
					  </div>
				  </div>
				  <div class="col-md-4">
					  <div class="form-group">
						<label for="mail">Select State</label>
						<select class="form-control" style="border-radius:0px;height:40px;">
							<option value="">Select State </option>
							<option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
							<option value="Andhra Pradesh">Andhra Pradesh</option>
							<option value="Arunachal Pradesh">Arunachal Pradesh</option>
							<option value="Assam">Assam</option>
							<option value="Bihar">Bihar</option>
							<option value="Chandigarh">Chandigarh</option>
							<option value="Chhattisgarh">Chhattisgarh</option>
							<option value="Dadra and Nagar Haveli">Dadra and Nagar Haveli</option>
							<option value="Daman and Diu">Daman and Diu</option>
							<option value="Delhi">Delhi</option>
							<option value="Goa">Goa</option>
							<option value="Gujarat">Gujarat</option>
							<option value="Haryana">Haryana</option>
							<option value="Himachal Pradesh">Himachal Pradesh</option>
							<option value="Jammu and Kashmir">Jammu and Kashmir</option>
							<option value="Jharkhand">Jharkhand</option>
							<option value="Karnataka">Karnataka</option>
							<option value="Kerala">Kerala</option>
							<option value="Lakshadweep">Lakshadweep</option>
							<option value="Madhya Pradesh">Madhya Pradesh</option>
							<option value="Maharashtra">Maharashtra</option>
							<option value="Manipur">Manipur</option>
							<option value="Meghalaya">Meghalaya</option>
							<option value="Mizoram">Mizoram</option>
							<option value="Nagaland">Nagaland</option>
							<option value="Orissa">Orissa</option>
							<option value="Pondicherry">Pondicherry</option>
							<option value="Punjab">Punjab</option>
							<option value="Rajasthan">Rajasthan</option>
							<option value="Sikkim">Sikkim</option>
							<option value="Tamil Nadu">Tamil Nadu</option>
							<option value="Tripura">Tripura</option>
							<option value="Uttaranchal">Uttaranchal</option>
							<option value="Uttar Pradesh">Uttar Pradesh</option>
							<option value="West Bengal">West Bengal</option>
						</select>
					  </div>
				  </div>
				    <div class="col-md-4">
					  <div class="form-group">
						<label >Pincode</label>
						<input type="text" class="form-control" id="" placeholder="Enter Pincode  ">
					  </div>
				  </div>
				  </div>
				  <div class="row">
					  <div class="col-md-3">
						 <div class="form-group">
                            <div class="g-recaptcha" data-sitekey="6LfKURIUAAAAAO50vlwWZkyK_G2ywqE52NU7YO0S" data-callback="verifyRecaptchaCallback" data-expired-callback="expiredRecaptchaCallback"></div>
                            </div>
                        </div>
					  </div>
				  </div>
				  
					  <div class="col-md-12">
					
						<button type="submit" class="btn btn-theme">Submit</button>
					  </div>
				 
				</form>
                </div>
                
              </div>
            
          </section>
		  </div>
 <script src='https://www.google.com/recaptcha/api.js'></script>
<?php include("footer.php"); ?>
          
