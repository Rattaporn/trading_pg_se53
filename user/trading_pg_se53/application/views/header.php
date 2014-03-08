<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Test TPG HOME PAGE</title>

<link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
<link href="<?php echo base_url();?>resource/css/style.css" type="text/css"  rel="stylesheet" />
<link href="<?php echo base_url();?>resource/css/swipebox.css" rel="stylesheet" />
<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>resource/js/jquery-1.9.1.min.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>resource/js/jquery-easy.min.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>resource/js/jquery-1.11.1.min.js" type="text/javascript"></script>
<!--<script src="<?php echo base_url();?>resource/js/jquery.validate.js" type="text/javascript"></script>-->
<!--<script src="<?php echo base_url();?>resource/js/validate_register.js" type="text/javascript"></script>-->
<!--<script src="<?php echo base_url();?>resource/js/validate_addphoto.js" type="text/javascript"></script>-->


</head>

<body>
<div id="wrapper">
<!--Start Menu Bar-->
 <div id="menu-bar" >
  <div id="logo">
    <a href="<?php echo base_url();?>index"><img src="<?php echo base_url();?>resource/images/logo-white2.png" style="display:block; "/></a>
  </div> 
  
  <ul class="nav-menu">
   <li class="tab_selected"><a href="<?php echo base_url();?>index">HOME</a>|</li>
   <li><a href="<?php echo base_url();?>index/gallery">GALLERY</a>|</li>
   <?php if($this->session->userdata('login')!=NULL){ ?>
   		<li><a href="<?php echo base_url();?>index/trade">TRADING</a>|</li><?php }else{?>
		<li><a href="<?php echo base_url();?>login_controller">TRADING</a>|</li><?php }?>
   <li><a href="<?php echo base_url();?>index/about">ABOUT</a>|</li>
   <li><a href="<?php echo base_url();?>index/contact">CONTACT</a></li>
  </ul>

  <!-- Sign in box-->
  <?php if($this->session->userdata('login')!=NULL){ ?>
  <div id="profiles">
   	<img src="<?php echo base_url();?>resource/imgProfiles/<?php echo $this->session->userdata('img_profile');?>" alt="profile"/><?php echo $this->session->userdata('name')?>
    <a href="#"><img class="pf-arrow" src="<?php echo base_url();?>resource/images/arrowg.png"/></a>
  </div>
  <?php 
  }else{ 
  ?>
  <!--<ul>-->
   <button class="btn"><a href="<?php echo base_url();?>login_controller">Sign In</a></button> 
   <button class="btn"><a href="<?php echo base_url();?>register">Sign Up</a></button>
 <!-- </ul>-->
  <?php	
  }
  ?>
 
  <div class="pf-box" style="display:none;">
  
   <div class="pf-in-box">
    <div class="img-pf"><img src="<?php echo base_url();?>resource/imgProfiles/<?php echo $this->session->userdata('img_profile');?>" width="96" height="96"/>
	</div>
   
    <div class="pf-text">
     <div style=""><label><?php echo $this->session->userdata('email');?></<label></div>
	 <hr>
   	 <div style=" margin:10px 0;" ><a href="<?php echo base_url();?>register/editprofile/<?php echo $this->session->userdata('uid');?>"><img style=" margin:0 10px ;" src="<?php echo base_url();?>resource/images/editg.png">Edit Profile</a></div>
   	 <div style="margin-top:10px; margin-bottom: 10px;"><a href="<?php echo base_url(); ?>login_controller/logout"><img style=" margin:0 10px ;" src="<?php echo base_url();?>resource/images/logoutg.png">Sign out</a></div>
    </div>
   </div>
   
	<script> 
	//$(document).ready(function(){
	
		$("#profiles").click(function(){
		
		$(".pf-box").slideToggle("slow");
		});				
	//});
	</script>
  
  </div><!--End profile box-->
  
</div>

