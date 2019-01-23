
<!DOCTYPE html>
<html lang="en-US" >
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<title>PSAAKET</title>
<meta name="description" content="#">
<meta name="keywords" content="#">
<link rel="icon" href="<?php echo base_url(); ?>assets/vendor/images/favicon.png">
<!-- Bootstrap -->
<link href="<?php echo base_url(); ?>assets/vendor/css/bootstrap.min.css" rel="stylesheet">

<!-- Animate -->
<link href="<?php echo base_url(); ?>assets/vendor/css/animate.min.css" rel="stylesheet">

<!-- Main CSS -->
<link href="<?php echo base_url(); ?>assets/vendor/css/style.css" rel="stylesheet">

<!-- responsive stylesheet -->
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/ss/responsive.css">

<!-- Custom CSS -->
<link href="<?php echo base_url(); ?>assets/vendor/css/custom.css" rel="stylesheet">

</head>

<body>
  
  <div class="web-sidebar-menu-container" id="web-sidebar-menu-container">
    <div class="web-sidebar-menu-push">
      <div class="web-sidebar-menu-overlay"></div>
      <div class="web-sidebar-menu-inner">
        <!--Header Section Start Here -->
        <header class="header-section" id="home" >
          <div class="top-header">
            <div class="container">
              <div class="row ">
               <ul class="contact-detail2 col-md-6 pull-left mobile_only_text_center top_contact_details_font_style">
					<li> <a href="mailto:kishore@sparkinfosys.com"><i class="fa fa-envelope-o"></i><span class="bold"> support@psaaket.com</span></a></li>
					<li> <a><i class="fa fa-phone"></i><span itemprop="telephone" class="bold"> +91 8500 xxx xxx</span></a> </li>
				</ul>
               <div class="social-links col-md-6 pull-right">
                 <ul class="social-icons hidden-xs pull-right">
                   <li> <a href="#" target="_blank"><i class="fa fa-facebook"></i></a> </li>
                   <li> <a href="#" target="_blank"><i class="fa fa-twitter"></i></a> </li>
                   <li> <a href="#" target="_blank"><i class="fa fa-google-plus"></i></a> </li>
                   <li> <a href="#" target="_blank"><i class="fa fa-linkedin"></i></a> </li>
                   <li> <a href="#" target="_blank"><i class="fa fa-youtube"></i></a> </li>
                   <li> <a href="#" target="_blank"><i class="fa fa-rss"></i></a> </li>
                 </ul>
               </div>
              </div>
            </div>
          </div>
          
          <div class="navbar navbar-static-top">
            <div class="container">
              <div class="navbar-header">
                <a class="navbar-brand col-md-12" href="<?php echo base_url(); ?>">
                  <img  src="<?php echo base_url(); ?>assets/vendor/images/logo.png" alt="PSAAKET" class="img-responsive">
                </a> 
                <div class="header-right-toggle pull-right hidden-md hidden-lg">
                  <a href="javascript:void(0)" class="side-menu-button"><i class="fa fa-bars"></i></a>
                </div>
              </div>
			  <!-- Mobile Menu Starts Here  -->
    <nav class="web-sidebar-menu web-slide-from-left">
      <div class="nano">
        <div class="content">
          <nav class="responsive-menu">
            <span class="wa-close"><i class="fa fa-close"></i></span>
            <ul>
              <li class="active"><a href="<?php echo base_url(); ?>">Home</a></li>
			  <li><a href="<?php echo base_url('aboutus'); ?>">About Us</a></li>
           
			   
		
				  <li><a href="#" class="">Training</a>
                    <ul class="">
                      <li><a href="<?php echo base_url('softwaretraining'); ?>">Software Training</a></li>
                      <li><a href="#">Project Development Training</a></li>  
					  <li><a href="#">Communication Skills and Soft Skills Training</a></li>
					  <li><a href="#">Corporate Soft Skills Training</a></li>
                    </ul>
                  </li>
				  <li> <a href="campus-ambassador.php">Ambassador</a></li>
				  <li> <a href="partners.php">Partners</a></li>
				 
                  <li> <a href="contact-us.php">Contact us</a></li>
                
			
			  
			  
            </ul>
          </nav>
        </div>
      </div>
    </nav>
	<!--Destop menu-->
              <nav class="main-navigation text-left pull-right hidden-xs hidden-sm">
                <ul class="nav navbar-nav">
                  <li class="<?php if($c_url==''){ echo "active"; }?>"> <a href="<?php echo base_url(); ?>">Home</a></li>
				  <li class="<?php if($c_url=='aboutus'){ echo "active"; }  ?>"> <a href="<?php echo base_url('aboutus'); ?>">About Us</a></li>
                  <li class="<?php if($c_url=='softwaretraining'){ echo "active"; } ?>"><a href="#" class="has-submenu">Training</a>
                    <ul class="sub-menu">
                      <li><a href="<?php echo base_url('softwaretraining'); ?>">Software Training</a></li>
                      <li><a href="#">Project Development Training</a></li>  
					  <li><a href="#">Communication Skills and Soft Skills Training</a></li>
					  <li><a href="#">Corporate Soft Skills Training</a></li>
                    </ul>
                  </li>
					
                   <li class="<?php if(isset($c_url) && $c_url=='partners'){ echo "active"; }  ?>">  <a href="<?php echo base_url('partners'); ?>">Partners</a></li>
				   <li class="<?php if(isset($c_url) && $c_url=='seminarworkshop'){ echo "active"; }  ?>"><a href="#" class="has-submenu">Register as</a>
                    <ul class="sub-menu">
                      <li><a href="<?php echo base_url('seminarworkshop'); ?>">Seminar/Workshop </a></li>
                      
                    </ul>
                  </li>
				  <li class="<?php if(isset($c_url) && $c_url=='campusambassador'){ echo "active"; }  ?>"> <a href="<?php echo base_url('campusambassador'); ?>">Ambassador</a></li>
					<li class="<?php if($c_url=='mocktest'){ echo "active"; }?>">  <a href="<?php echo base_url('mocktest'); ?>">Mock Test</a></li>
                  <li class="<?php if($c_url=='contactus'){ echo "active"; }?>"> <a href="<?php echo base_url('contactus'); ?>">Contact us</a></li>
                    
                  
                 
                </ul>
              </nav>
            </div>
          </div>
        </header>
        <!-- Header Section End Here -->  
  <?php if($this->session->flashdata('success')): ?>
        <div class="alert_msg1 animated slideInUp bg-succ">
            <?php echo $this->session->flashdata('success');?> &nbsp; <i class="fa fa-check text-success ico_bac" aria-hidden="true"></i> </div>
        <?php endif; ?>
        <?php if($this->session->flashdata('error')): ?>
        <div class="alert_msg1 animated slideInUp bg-warn">
            <?php echo $this->session->flashdata('error');?> &nbsp; <i class="fa fa-exclamation-triangle text-success ico_bac" aria-hidden="true"></i> </div>
        <?php endif; ?>