
 <style>
 .razorpay-payment-button{
	 background:#192f5d;
	 color:#fff;
	 padding:9px;
	 border:none;
	 border-radius:3px;
	 margin-top:5px;
	 display:none;
 }
 </style>
<?php //echo '<pre>';print_r($details);exit; ?>
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
                <div class="form col-md-8 contact-form wow fadeInRight col-md-offset-2" data-wow-duration="1.5s" data-wow-offset="10">
                  <header class="page-header section-header">
				  <div  id="success-alert">
								
							</div>
					<h2>Register Details</h2>
					 
				  </header>
				 <table class="table table-bordered">
				
					<tbody>
					  <tr>
						<th>Title</th>
						<td><?php echo isset($post_details['title'])?$post_details['title']:''; ?></td>
					  </tr>
					  <tr>
						<th>Name</th>
						<td><?php echo isset($post_details['full_name'])?$post_details['full_name']:''; ?></td>
					  </tr> 
					  <tr>
						<th>Address for Correspondence:	</th>
						<td><?php echo isset($post_details['address'])?$post_details['address']:''; ?>.</td>
					  </tr> 
					  <tr>
						<th>Mobile No:	</th>
						<td><?php echo isset($post_details['mobile_no'])?$post_details['mobile_no']:''; ?></td>
					  </tr> 
					  <tr>
						<th>Email Id:</th>
						<td><?php echo isset($post_details['email_id'])?$post_details['email_id']:''; ?></td>
					  </tr> 
					  <tr>
						<th>College/Institution Name and Address:</th>
						<td><?php echo isset($post_details['college'])?$post_details['college']:''; ?></td>
					  </tr>
					  <tr>
						<th>Amount INR:</th>
						<td>₹ <?php echo isset($post_details['amount'])?$post_details['amount']:''; ?></td>
					  </tr>
					  
					</tbody>
				  </table>
				  <form  id="paymentform" name="paymentform" action="<?php echo base_url('register/paymentsuccess'); ?>" method="POST">
  <script
    src="https://checkout.razorpay.com/v1/checkout.js"
    data-key="<?php echo $details['key']?>"
    data-amount="<?php echo $details['amount']?>"
    data-currency="INR"
    data-name="<?php echo $details['name']?>"
    data-image="<?php echo $details['image']?>"
    data-description="<?php echo $details['description']?>"
    data-prefill.name="<?php echo $details['prefill']['name']?>"
    data-prefill.email="<?php echo $details['prefill']['email']?>"
    data-prefill.contact="<?php echo $details['prefill']['contact']?>"
    data-notes.shopping_order_id="<?php echo $bill_details['b_id']?>"
    data-order_id="<?php echo $details['order_id']?>"
    <?php if ($details['display_currency'] !== 'INR') { ?> data-display_amount="<?php echo $details['amount']?>" <?php } ?>
    <?php if ($details['display_currency'] !== 'INR') { ?> data-display_currency="<?php echo $details['display_currency']?>" <?php } ?>
  >
  </script>
  <div class="row">
  <!-- Any extra fields to be submitted with the form but not sent to Razorpay -->
  <input type="hidden" name="user_id" value="<?php echo isset($user_id)?$user_id:''; ?>">
					<div class="form-group">
                      <div class="col-sm-12">
					  <button type="submit" class="btn-theme btn" name="pay_submit">Contiune for  Payment</button>
                    </div>
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

     
          
