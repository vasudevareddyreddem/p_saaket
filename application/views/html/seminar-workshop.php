 <div class="header-space"></div>
      <!-- Page Header Start Here -->
      <section class="page-header-bg">
      <div class="page-header">
	 
	  

          <div class="product-header mobile_only_text_center">
              <div class="container">
                <div class="row">
                  <div class="col-md-9">
                    <h2 class="p-t-5">Register</h2>
                  </div>
                  <div class="col-md-3 m-t-10">
                    <a href="<?php echo base_url(); ?>">Home</a> <i class="fa fa-angle-double-right"></i>
                    <a class="current_page">Seminar/Workshop</a>
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
                <div class="form col-md-6 contact-form wow fadeInRight col-md-offset-3" data-wow-duration="1.5s" data-wow-offset="10">
                  <header class="page-header section-header">
				  <div  id="success-alert">
								
							</div>
					<h2>Seminar/Workshop Register</h2>
					 
				  </header>
				 <form id="#" class="form-horizontal" action="<?php echo base_url('register/index'); ?>" method="post">

                   
				   <div class="form-group">
                      <div class="col-sm-12">
					   <label for="sel1">Title</label>
					  <input class="form-control" type="text" name="title" id="title" placeholder="Ex: Mr./Ms./Mrs " value=""  required>
					 </div>
                    </div>
					<div class="form-group">
                      <div class="col-sm-12">
					  	   <label for="sel1">Name:</label>
					  <input class="form-control" type="text" name="full_name" id="full_name" placeholder="Enter name" value=""  required>
					 </div>
                    </div>
					<div class="form-group">
                      <div class="col-sm-12">
					   <label for="sel1">Address for Correspondence:</label>
					  <textarea class="form-control" type="text" name="address" id="address" placeholder="Enter Address for Correspondence:" value="" required></textarea>
					 </div>
                    </div>
					<div class="form-group">
                      <div class="col-sm-12">
					  <label for="sel1">Mobile No:</label>
					  <input class="form-control" type="text" name="mobile_no" id="mobile_no" placeholder="Enter Mobile No" value="" required>
					 </div>
                    </div>
                   
                    <div class="form-group">
                      <div class="col-sm-12 ">
					  <label for="sel1">Email Id: </label>
					  <input class="form-control" type="mail" name="email_id" name="email_id" placeholder="Enter Email" value="" required>
				     <span style="color:red;">	</span>
				   </div>
                    </div>
                     <div class="form-group">
                      <div class="col-sm-12">
					  <label for="sel1">Qualification:</label>
					  <input class="form-control" type="text" name="" placeholder="Enter your Qualification" value="" / required>
					 </div>
                    </div>
					<div class="form-group">
                      <div class="col-sm-12">
					   <label for="sel1">College/Institution Name and Address:</label>
					  <textarea class="form-control" type="text" name="college" id="college" placeholder="Enter College/Institution Name and Address" value=""  required></textarea>
					 </div>
                    </div>
					  <div class="form-group">
                      <div class="col-sm-12 ">
					  <label for="sel1">Amount INR: </label>
					  <input class="form-control" type="text" name="amount" id="amount" value="5000"  readonly="true"/>
				     <span style="color:red;">	</span>
				   </div>
                    </div>
					
                    <div class="form-group">
                      <div class="col-sm-11">
					   <button type="submit"  class="btn-theme btn">Register</button>
                    </div>
                    </div>
                  </form>
                </div>
               
              </div>
            </div>
          </div>
        </section>
        <!-- About Us Section End Here-->

      
       
		
		

       
      </div>
      <!-- Main Section End Here -->

     
          
